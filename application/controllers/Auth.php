<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){

        parent:: __construct();
        
        $this->load->model('Auth_model');
	}


	public function index()
	{
		$this->load->view('login/login');
	}

	public function login(){

		if($_SERVER['REQUEST_METHOD']=="POST"){

            $userId	=	$this->input->post('userid');

            $pwd	=	$this->input->post('password');

            $data   =	$this->Auth_model->userInf($userId);

            if($data){

            	$match	=	password_verify($pwd,$data->password);
            
				if($match){
	                
	                $this->session->set_userdata('login',$data);

	                $this->session->set_userdata("user_id",$data->user_id);
					$this->session->set_userdata("user_name",$data->user_name);
					$this->session->set_userdata("user_type",$data->user_type);

	                redirect('auth/dashboard');
				}else{

	                $this->session->set_flashdata('err_message','Invalid username and password combination.Please try again.');
			
					$this->load->view('login/login');
				}


            }else{

                  $this->session->set_flashdata('err_message','Invalid username and password combination.Please try again.');
		
				 $this->load->view('login/login');

               }
               
        }else{
        
            $this->load->view('login/login');
        }
    }

    public function dashboard(){


    	 if($this->session->userdata('login')){


    	$this->load->view('common/header');
    	$this->load->view('dashboard/dashboard');
    	$this->load->view('common/footer');

    	}else{

            redirect('auth/login');
        }
    }

     public function logout(){

        if($this->session->userdata('login')){

            $this->session->sess_destroy();

            redirect('auth');
        }else{

            redirect('auth');
        }

    }
}
