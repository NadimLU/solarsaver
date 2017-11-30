<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Form_model extends CI_Model
{
    public function InsertContactMessages($ContactPageData)
    {

        $this->db->insert('contact_page', $ContactPageData);
    }

    public function GetVehicleDetails(){

        $query =$this->db->query("SELECT vehicle_list.* , services.* FROM vehicle_list INNER JOIN services ON services.vehicle_id=vehicle_list.vehicle_id");
        return $query->result();
    }


     
}
