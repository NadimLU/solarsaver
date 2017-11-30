<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Vehicle_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    

    
    function InsertVehicleDetails($VehicleDetailsArray,$ServiceArray)
    {
        
        $this->db->insert('vehicle_list', $VehicleDetailsArray);
        
        
        $vehicle_id = $this->db->insert_id();
        
        $data2 = Dashboard::arrayCustomize($ServiceArray, $vehicle_id);
        
        $this->db->insert_batch('services', $data2);
        
                                  
    }
    public function ListOfVehicles(){

        $query =$this->db->query("SELECT * FROM vehicle_list");
        return $query->result();
    }
    public function SingleVehicleDetails($vehicle_id){

        $query =$this->db->query("SELECT vehicle_list.* , services.* FROM vehicle_list INNER JOIN services ON services.vehicle_id=vehicle_list.vehicle_id  WHERE vehicle_list.vehicle_id = '$vehicle_id'");
        return $query->result();

    }
    public function deleteImage($id) {

        $this->db->where('vehicle_id', $id);
        $this->db->delete('vehicle_list');
    
    }
    public function UpdateServiceDetailsSingle($ServiceDetailsArray,$vehicle_id){

     
       $data2 = Dashboard::arrayUpdateCustomize($ServiceDetailsArray,$vehicle_id);
      
       $this->db->update_batch("services", $data2, "service_id");
        
       
    }
    public function UpdateVehicleDetailsSingle($EditVehicleDetailsArray,$vehicle_id){
        
             
               
             
               $this->db->where('vehicle_id',$vehicle_id);
               $this->db->update('vehicle_list', $EditVehicleDetailsArray);
               
           
             
               
    }
     
    

     
}
