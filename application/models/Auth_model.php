<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model{

	 /** Start Code for Retrieves password against supplied user id,user must be active with value A */

	public function userInf($userId){   

        $this->db->select('*');
        
        $this->db->where('user_id',$userId);
        
        $this->db->where('user_status','A');
        
        $data = $this->db->get('md_users');
        
		if($data->num_rows()>0){

      return $data->row();
      
      }else{

        return false;
      }
  }

  /**End Code for Retrieves password against supplied user id,user must be active with value A */


}

?>
