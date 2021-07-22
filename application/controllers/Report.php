<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

	public function __construct(){

        parent:: __construct();
        
        $this->load->model('Auth_model');
        $this->load->model('Master');
        $this->load->model('ReportModel');

        if(! $this->session->userdata('user_id')){
            
            redirect(base_url());
    
            }
	}

    public function stk_stmt(){

       // echo 'hi';
        //exit;
        if($_SERVER['REQUEST_METHOD'] == "POST") {

            $from_dt         =   $_POST['from_date'];

            $to_dt           =   $_POST['to_date'];

            $data['tenant']  =   $this->ReportModel->f_get_tenant($from_dt,$to_dt);

         //    echo $this->db->last_query();
        //    exit;
          
            $this->load->view('common/header');
               
            $this->load->view('reports/stk_stmt/stk_stmt',$data);
            
            $this->load->view('common/footer');

        }else{

            $this->load->view('common/header');
               
             $this->load->view('reports/stk_stmt/stk_stmt_ip');
             $this->load->view('common/footer');

        }

    }


}