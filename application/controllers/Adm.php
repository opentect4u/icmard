<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adm extends CI_Controller {

	public function __construct(){

        parent:: __construct();
        
        $this->load->model('Auth_model');
        $this->load->model('Master');

        if(! $this->session->userdata('user_id')){
            
            redirect(base_url());
    
            }
	}

   /// Start Code For Listing  Item    On 12/05/2021    ///

	public function index()
	{
        $data['items']  =  $this->Master->f_get_particulars("md_item", NULL, NULL, 0);
        $this->load->view('common/header');
		$this->load->view('item/item_list',$data);
        $this->load->view('common/footer');
	}

   /// Start Code For Listing  Item    On 12/05/2021    ///


    /// Start Code For Add  Item    On 12/05/2021    ///

    public function add_item()
    {


         if($_SERVER['REQUEST_METHOD'] == "POST") {


                $row = $this->db->get_where('md_item', array('item_name' => $this->input->post('item_name')))->num_rows();
                if( 1 == $this->input->post('license') ){
                    $license = 1;
                }else{
                    $license = 0;
                }

                 if( 1 == $this->input->post('Insurance') ){
                    $Insurance = 1;
                }else{
                    $Insurance = 0;
                }

                 if( 1 == $this->input->post('amc') ){
                    $amc = 1;
                }else{
                    $amc = 0;
                }

               $data_array = array(

                "item_name"     =>  $this->input->post('item_name'),

                "license"       =>  $license,
                "Insurance"     =>  $Insurance,
                "amc"           =>  $amc,
                "created_by"    =>  $this->session->userdata('user_name'),
                "created_dt"    =>  date('Y-m-d H:i:s')

                );

                    if($row >0){

                    //For notification storing message
                    $this->session->set_flashdata('msg', 'Item Already Exist!');

                    redirect('adm/add_item');


                     }else{

                        $this->Master->f_insert('md_item', $data_array);
                        //For notification storing message
                        $this->session->set_flashdata('msg', 'Successfully added!');

                        redirect('adm/add_item');

                     }

            }else{

                 $this->load->view('common/header');
                 $this->load->view('item/add_item');
                 $this->load->view('common/footer');

            }

      
    }

   /// End Code For Add  Item    On 12/05/2021    ///

    /// Start Code For Edit  Item    On 12/05/2021    ///

    public function edit_item()
    {


         if($_SERVER['REQUEST_METHOD'] == "POST") {

                if( 1 == $this->input->post('license') ){
                    $license = 1;
                }else{
                    $license = 0;
                }

                 if( 1 == $this->input->post('Insurance') ){
                    $Insurance = 1;
                }else{
                    $Insurance = 0;
                }

                 if( 1 == $this->input->post('amc') ){
                    $amc = 1;
                }else{
                    $amc = 0;
                }

               $data_array = array(

                "item_name"     =>  $this->input->post('item_name'),

                "license"       =>  $license,
                "Insurance"     =>  $Insurance,
                "amc"           =>  $amc,
                "created_by"    =>  $this->session->userdata('user_name'),
                "created_dt"    =>  date('Y-m-d H:i:s')

                );
               $where   =  array('id' => $this->input->post('id') );

                   
                        $this->Master->f_edit('md_item', $data_array, $where);
                        //For notification storing message
                        $this->session->set_flashdata('msg', 'Successfully Updated!');

                        redirect('adm/edit_item?id='.$this->input->post('id'));

            }else{

                $where   =  array('id' => $this->input->get('id') );

                $data['item']  =  $this->Master->f_get_particulars("md_item", NULL, $where, 1);

                $this->load->view('common/header');
                $this->load->view('item/edit_item',$data);
                $this->load->view('common/footer');

            }

      
    }
     /// End Code For Edit  Item    On 12/05/2021    ///

    /// **** Start Code For Delete Item   *********** //
    public function del_item()
    {
        $where = array(

            'id' => $this->input->get('id')

        );

            $this->Master->f_delete('md_item', $where);
             //For notification storing message
            $this->session->set_flashdata('msg', 'Successfully deleted!');

            redirect("adm");

      
       
    }
    /// **** End Code For Delete Item  *********** //
    public function del_tenant()
    {
        $where = array(

            'id' => $this->input->get('id')

        );

            $this->Master->f_delete('md_tenant', $where);
             //For notification storing message
            $this->session->set_flashdata('msg', 'Successfully deleted!');
            //  alert('Successfully deleted!');
            redirect("adm/tenant_list");   
    }

//*********************/Tenant View************************//
    public function tenant_list()
    {
        $data['customer']  =  $this->Master->f_get_particulars("md_tenant", NULL, NULL, 0);
        $this->load->view('common/header');
        $this->load->view('tenant/tenant_list',$data);
        $this->load->view('common/footer');
    }

    //*********************/Add Tenant Details************************//
    public function add_tenant()
    {

         if($_SERVER['REQUEST_METHOD'] == "POST") {

                 //    $row = $this->db->get_where('md_item', array('item_name' => $this->input->post('item_name')))->num_rows();
                //     $uin = $this->Master->f_get_particulars("md_tenant",array("ifnull(MAX(uin),9999999) uin"),NULL, 1);
			       $uid = $uin->uin+1;
			   
               $data_array = array(
			   
				// "uin"              =>  $uid, 
                "name"            =>  $this->input->post('t_name'),
				"floor_no"        =>  $this->input->post('floor_no'),
				"room_no"         =>  $this->input->post('room_no'),
				"agree_st_dt"     =>  $this->input->post('agree_st_dt'),
				"agree_end_dt"    =>  $this->input->post('agree_end_dt'),
				"covd_area"       =>  $this->input->post('covd_area'),
				"rent_per_sqrt"   =>  $this->input->post('rent_per_sqrt'),
				"rent_per_mnth"   =>  $this->input->post('rent_per_mnth'),
                "created_by"      =>  $this->session->userdata('user_name'),
                "created_dt"      =>  date('Y-m-d H:i:s')

                );

                        $this->Master->f_insert('md_tenant', $data_array);
                        //For notification storing message
                        $this->session->set_flashdata('msg', 'Successfully Added!');
                        // alert('Successfully Added!');
                        // redirect('adm/add_tenant');
                        redirect('adm/tenant_list');
            }else{
               
                 $this->load->view('common/header');
                 $select        = array("uin","cust_name");
                 $where  =   array(
 
                     'cust_type'     => 'T');
                     
                 $data['tenantdtls']   = $this->Master->f_get_particulars('md_customer',$select,$where,0);
                //  echo $this->db->last_query();
                //  exit();
                 $this->load->view('tenant/add_tenant',$data);
                 $this->load->view('common/footer');

            }

      
    }

    public function edit_tenant()
    {


         if($_SERVER['REQUEST_METHOD'] == "POST") {

               $data_array = array(

                "name"            =>  $this->input->post('t_name'),
				"floor_no"        =>  $this->input->post('floor_no'),
				"room_no"         =>  $this->input->post('room_no'),
				"agree_st_dt"     =>  $this->input->post('agree_st_dt'),
				"agree_end_dt"    =>  $this->input->post('agree_end_dt'),
				"covd_area"       =>  $this->input->post('covd_area'),
				"rent_per_sqrt"   =>  $this->input->post('rent_per_sqrt'),
				"rent_per_mnth"   =>  $this->input->post('rent_per_mnth'),
                "modified_by"      =>  $this->session->userdata('user_name'),
                "modified_dt"      =>  date('Y-m-d H:i:s')

                );
               $where   =  array('id' => $this->input->post('id') );
  
                        $this->Master->f_edit('md_tenant', $data_array, $where);
                        //For notification storing message
                        $this->session->set_flashdata('msg', 'Successfully Updated!');
                        // alert('Successfully Updated!');
                        // redirect('adm/edit_tenant?id='.$this->input->post('id'));
                        redirect('adm/tenant_list');

            }else{

                $where   =  array('id' => $this->input->get('id') );

                $data['cust']  =  $this->Master->f_get_particulars("md_tenant", NULL, $where, 1);
                // echo $this->db->last_query();
                // exit;
                $this->load->view('common/header');
                $this->load->view('tenant/edit_tenant',$data);
                $this->load->view('common/footer');

            }

      
    }


    /// Start Code For Listing  Customer    On 12/05/2021    ///

    public function cust_list()
    {
        $data['customer']  =  $this->Master->f_get_particulars("md_customer", NULL, NULL, 0);
        $this->load->view('common/header');
        $this->load->view('customer/cust_list',$data);
        $this->load->view('common/footer');
    }

   /// End Code For Listing  Customer    On 12/05/2021    ///



    /// Start Code For Add  Customer  On 12/05/2021    ///

    public function add_customer()
    {


         if($_SERVER['REQUEST_METHOD'] == "POST") {


                //$row = $this->db->get_where('md_item', array('item_name' => $this->input->post('item_name')))->num_rows();
                   $uin = $this->Master->f_get_particulars("md_customer",array("ifnull(MAX(uin),9999999) uin"),NULL, 1);
			       $uid = $uin->uin+1;
			   

               $data_array = array(
			   
				"uin"              =>  $uid, 
                "cust_name"        =>  $this->input->post('cust_name'),
				"cust_type"        =>  $this->input->post('cust_type'),
				"addr_line1"       =>  $this->input->post('addr_line1'),
				"addr_line2"       =>  $this->input->post('addr_line2'),
				"pin"              =>  $this->input->post('pin'),
				"gstin"            =>  $this->input->post('gstin'),
				"pan"              =>  $this->input->post('pan'),
				"tan"              =>  $this->input->post('tan'),
				"propieter_namr"   =>  $this->input->post('propieter_namr'),
				"contact_person"   =>  $this->input->post('contact_person'),
                "mobile_no"        =>  $this->input->post('mobile_no'),
                "email"            =>  $this->input->post('email'),
                "company_type"     =>  $this->input->post('company_type'),
				"bank_name"        =>  $this->input->post('bank_name'),
                "branch_name"      =>  $this->input->post('branch_name'),
                "ac_no"            =>  $this->input->post('ac_no'),
				"ifs_code"		   =>  $this->input->post('ifs_code'),
                "created_by"       =>  $this->session->userdata('user_name'),
                "created_dt"       =>  date('Y-m-d H:i:s')

                );

                

                        $this->Master->f_insert('md_customer', $data_array);
                        //For notification storing message
                        $this->session->set_flashdata('msg', 'Successfully added!');

                        redirect('adm/add_customer');

                    

            }else{

                 $this->load->view('common/header');
                 $this->load->view('customer/add_cust');
                 $this->load->view('common/footer');

            }

      
    }

   /// End Code For Add Customer  On 12/05/2021    ///
   
   
     /// Start Code For Edit  Customer    On 13/05/2021    ///

    public function edit_cust()
    {


         if($_SERVER['REQUEST_METHOD'] == "POST") {

                

               $data_array = array(

                "cust_name"        =>  $this->input->post('cust_name'),
				"cust_type"        =>  $this->input->post('cust_type'),
				"addr_line1"       =>  $this->input->post('addr_line1'),
				"addr_line2"       =>  $this->input->post('addr_line2'),
				"pin"              =>  $this->input->post('pin'),
				"gstin"            =>  $this->input->post('gstin'),
				"pan"              =>  $this->input->post('pan'),
				"tan"              =>  $this->input->post('tan'),
				"propieter_namr"   =>  $this->input->post('propieter_namr'),
				"contact_person"   =>  $this->input->post('contact_person'),
                "mobile_no"        =>  $this->input->post('mobile_no'),
                "email"            =>  $this->input->post('email'),
                "company_type"     =>  $this->input->post('company_type'),
				"bank_name"        =>  $this->input->post('bank_name'),
                "branch_name"      =>  $this->input->post('branch_name'),
                "ac_no"            =>  $this->input->post('ac_no'),
				"ifs_code"		   =>  $this->input->post('ifs_code'),
                "created_by"       =>  $this->session->userdata('user_name'),
                "created_dt"       =>  date('Y-m-d H:i:s')

                );
               $where   =  array('uin' => $this->input->post('uin') );

                   
                        $this->Master->f_edit('md_customer', $data_array, $where);
                        //For notification storing message
                        $this->session->set_flashdata('msg', 'Successfully Updated!');

                        redirect('adm/edit_cust?id='.$this->input->post('uin'));

            }else{

                $where   =  array('uin' => $this->input->get('id') );

                $data['cust']  =  $this->Master->f_get_particulars("md_customer", NULL, $where, 1);

                $this->load->view('common/header');
                $this->load->view('customer/edit_cust',$data);
                $this->load->view('common/footer');

            }

      
    }
     /// End Code For Customer  On 13/05/2021    ///
	 
	 /// **** Start Code For Delete Customer   *********** //
    public function del_cust()
    {
        $where = array(

            'uin' => $this->input->get('id')

        );

            $this->Master->f_delete('md_customer', $where);
             //For notification storing message
            $this->session->set_flashdata('msg', 'Successfully deleted!');

            redirect("adm/cust_list");

      
       
    }
    /// **** End Code For Delete Customer  *********** //

 


}
