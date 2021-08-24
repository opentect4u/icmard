<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Model {

    public function f_get_particulars($table_name, $select=NULL, $where=NULL, $flag,$order=NULL,$condition=NULL) {
        
        if(isset($select)) {

            $this->db->select($select);

        }

        if(isset($where)) {

            $this->db->where($where);

        }

        if(isset($order) && isset($condition)) {


           $this->db->order_by($order, $condition);

        }

        $result		=	$this->db->get($table_name);

        if($flag == 1) {

            return $result->row();
            
        }else {

            return $result->result();

        }

    }
   
    public function f_get_particulars_array($table_name, $select=NULL, $where=NULL) {
        
        if(isset($select)) {

            $this->db->select($select);

        }

        if(isset($where)) {

            $this->db->where($where);

        }

        $result		=	$this->db->get($table_name);
       
       
            return $result->result_array();

    }

    //For Where in Clause for employees
    public function f_get_particulars_in($table_name, $where_in=NULL, $where=NULL) {

        if(isset($where)){

            $this->db->where($where);

        }

        if(isset($where_in)){

            $this->db->where_in('sl_no', $where_in);

        }
        
        $result	=	$this->db->get($table_name);

        return $result->result();

    }

    public function f_get_distinct($table_name, $select=NULL, $where=NULL) {

        $this->db->distinct();

        if(isset($select)) {

            $this->db->select($select);

        }

        if(isset($where)) {

            $this->db->where($where);

        }

        $result		=	$this->db->get($table_name);

        return $result->result();
        
    }

    

    //For inserting row

    public function f_insert($table_name, $data_array) {

        $this->db->insert($table_name, $data_array);

        return $this->db->insert_id();

    }

    //For Inserting Multiple Row

    public function f_insert_multiple($table_name, $data_array){

        $this->db->insert_batch($table_name, $data_array);

        return;

    }

    //For Editing row

    public function f_edit($table_name, $data_array, $where) {

        $this->db->where($where);
        $this->db->update($table_name, $data_array);

        return;

    }

    //For Deliting row

    public function f_delete($table_name, $where) {

        $this->db->delete($table_name, $where);

        return;

    }

	public function f_get_amc_dtls(){
        // $user_id    = $this->session->userdata('login')->user_id;
        

    $data = $this->db->query("select a.id,a.comp_id,b.item_name,
                             a.frm_dt,a.to_dt,a.total
                            from  md_amc a, md_item b
                            where a.item = b.id
                            order by a.frm_dt"
                                );
                                

     return $data->result();
    
        
    }
    public function f_get_stockin_dtls(){
        // $user_id    = $this->session->userdata('login')->user_id;
        

    $data = $this->db->query("select a.sl_no,a.inventry_no,b.item_name,
                             a.pur_dt,a.total
                            from  td_stockin a, md_stk_item b
                            where a.item = b.id
                            order by a.pur_dt"
                                );
                                

     return $data->result();
    
        
    }

}
