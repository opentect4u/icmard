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




}
