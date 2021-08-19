<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReportModel extends CI_Model {

    public function f_get_tenant($from_dt,$to_dt){
        $query  = $this->db->query("select  a.name,a.floor_no,a.room_no,a.agree_st_dt,a.agree_end_dt,
                                    a.rent_per_sqrt,a.covd_area,a.rent_per_mnth
                                    from md_tenant a
                                    where    a.agree_st_dt between '$from_dt' and '$to_dt' 
                                    order by a.agree_end_dt");

        return $query->result();
    }

    public function f_get_amc($from_dt,$to_dt){
        $query  = $this->db->query("select b.cust_name ,c.item_name,a.item_serial,a.instl_loc,a.frm_dt,a.to_dt,
                                    a.amc_chrg,a.cgst,a.sgst,a.total
                                    from md_amc a,md_customer b,md_item c
                                    where    a.frm_dt between '$from_dt' and '$to_dt' 
                                    and a.comp_id=b.uin
                                    and a.item=c.id
                                    order by a.to_dt");

        return $query->result();
    }

    public function f_get_lic($from_dt,$to_dt){
        $query  = $this->db->query("select c.item_name,a.item,a.frm_dt,a.to_dt,
                                    a.rnw_from,a.rnw_to,a.auth_person
                                    from md_licence a,md_item c
                                    where    a.frm_dt between '$from_dt' and '$to_dt' 
                                    and a.item=c.id
                                    order by a.to_dt");

        return $query->result();
    }

    
    public function f_get_insu($from_dt,$to_dt){
        $query  = $this->db->query("select c.item_name,a.item,a.frm_dt,a.to_dt,
                                   a.remarks ,a.auth_person
                                    from md_insu a,md_item c
                                    where    a.frm_dt between '$from_dt' and '$to_dt' 
                                    and a.item=c.id
                                    order by a.to_dt");

        return $query->result();
    }

}
