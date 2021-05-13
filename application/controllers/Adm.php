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
                 $this->load->view('customer/add_cust');
                 $this->load->view('common/footer');

            }

      
    }

   /// End Code For Add Customer  On 12/05/2021    ///

 


}
