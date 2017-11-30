<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Reservation_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    

    
    function ListOfReservations()
    {
        $query =$this->db->query("SELECT reservation.* , profile.* FROM reservation INNER JOIN profile ON reservation.profile_id=profile.profile_id");
        return $query->result();
                                  
     }
     public function GetSetting(){

        $query = $this->db->query("SELECT * FROM settings");
        return $query->result();
     }
     public function CountReservation(){

        $query = $this->db->query('SELECT * FROM reservation');
        return $query->num_rows();
		
     }
     public function CountClient(){

        $query = $this->db->query('SELECT * FROM profile');
        return $query->num_rows();
     }
    

     
}
