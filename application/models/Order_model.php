<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Order_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    

    public function getOrders(){
        
         $query=$this->db->query("SELECT order_details.* , order_master.*, profile.* FROM order_master INNER JOIN order_details ON order_details.order_master_id=order_master.order_master_id INNER JOIN profile ON profile.profile_id = order_master.profile_id GROUP BY reference_no ORDER BY order_id DESC");
        return $query->result();
      }

      // For new order 
     public function getOrderForNew(){

      $query=$this->db->query("SELECT order_details.* , order_master.*, profile.* FROM order_master INNER JOIN order_details ON order_details.order_master_id=order_master.order_master_id INNER JOIN profile ON profile.profile_id = order_master.profile_id WHERE order_master.status = '1' GROUP BY reference_no  ");
      return $query->result();
    }
    public function getOrderForConfirmed(){
      
            $query=$this->db->query("SELECT order_details.* , order_master.*, profile.* FROM order_master INNER JOIN order_details ON order_details.order_master_id=order_master.order_master_id INNER JOIN profile ON profile.profile_id = order_master.profile_id WHERE order_master.status = '2' GROUP BY reference_no  ");
            return $query->result();
    }
    public function getOrderForCanceled(){
      
            $query=$this->db->query("SELECT order_details.* , order_master.*, profile.* FROM order_master INNER JOIN order_details ON order_details.order_master_id=order_master.order_master_id INNER JOIN profile ON profile.profile_id = order_master.profile_id WHERE order_master.status = '3' GROUP BY reference_no  ");
            return $query->result();
    }

    
    
     
      public function getOrder(){
        
         $query=$this->db->query("SELECT order_details.* , order_master.*, profile.* FROM order_master INNER JOIN order_details ON order_details.order_master_id=order_master.order_master_id INNER JOIN profile ON profile.profile_id = order_master.profile_id GROUP BY reference_no ORDER BY order_id DESC LIMIT 3");
        return $query->result();
      }  
       public function getOrderDetails($order_id,$order_master_id,$profile_id){
        $query=$this->db->query("SELECT order_details.* , order_master.*, profile.*, reservation.* FROM order_master INNER JOIN order_details ON order_details.order_master_id=order_master.order_master_id INNER JOIN profile ON profile.profile_id = order_master.profile_id INNER JOIN reservation ON profile.profile_id = reservation.profile_id WHERE order_master.order_master_id='$order_master_id'");
        return $query->result();
       }
      public function getCustomeretails($order_id,$order_master_id,$profile_id){

        $query=$this->db->query("SELECT order_master.*, profile.*, reservation.* FROM order_master  INNER JOIN profile ON profile.profile_id = order_master.profile_id INNER JOIN reservation ON reservation.reservation_id = order_master.reservation_id WHERE order_master.profile_id='$profile_id' GROUP BY order_master.profile_id");
        return $query->result();
      }
      public function getUserOrders($profile_id){

        $query=$this->db->query("SELECT order_details.* , order_master.*, profile.* FROM order_master INNER JOIN order_details ON order_details.order_master_id=order_master.order_master_id INNER JOIN profile ON profile.profile_id = order_master.profile_id WHERE profile.profile_id = '$profile_id' GROUP BY reference_no ORDER BY order_id");
        return $query->result();
      }
      public function getOrdersCount(){

        return $this->db->count_all("order_master");
      }

     public function insertData($ReservationArray,$AddressArray,$cartArray,$charge,$reference_no){

   
              $insertQuery = $this->db->insert('profile', $AddressArray);

               $profile_id = $this->db->insert_id();

               $stripe_transaction_id = $charge->id;


                $street_address = $ReservationArray['street_address'];
                $country = $ReservationArray['country'];
                $zip = $ReservationArray['zip'];
                $reservation_date = $ReservationArray['reservation_date'];
                $reservation_time = $ReservationArray['reservation_time'];
                $vehicle_id = $ReservationArray['vehicle_id'];
                
               
                $query=$this->db->query("INSERT INTO reservation (`reservation_id`,`street_address`, `country`, `zip`, `profile_id`,`reservation_request_time`, `reservation_date`, `reservation_time`) VALUES (NULL,'$street_address','$country','$zip','$profile_id', CURRENT_TIMESTAMP, '$reservation_date', '$reservation_time')");
               
                $reservation_id = $this->db->insert_id(); 
                
                $this->session->set_userdata('reference_no',$this->generateRandomString());

                $reference_no = $this->session->userdata('reference_no');

              $query=$this->db->query("INSERT INTO `order_master` (`order_master_id`,`reference_no`,`vehicle_id`,`order_date_time`, `profile_id`, `reservation_id`,`grand_total`, `square_transaction_id`, `status`) VALUES (NULL, '$reference_no','$vehicle_id', CURRENT_TIMESTAMP,'$profile_id','$reservation_id',0,'$stripe_transaction_id', 1)");

              $order_id = $this->db->insert_id();
              $this->load->library('session');
              
               $this->session->set_userdata('profile_id', $profile_id);
              $this->session->set_userdata('reservation_id', $reservation_id);
              $this->session->set_userdata('order_id', $order_id);

              $grand_total = 0;
              foreach($cartArray as $item) {

                  $item_price = number_format(($item->price * $item->qnty), 2);
                  $grand_total += $item_price;
                  $this->db->query("INSERT INTO `order_details` (`order_id`, `order_master_id`, `product_id`, `product_name`, `product_unit_price`, `product_quantity`) VALUES (NULL, '$order_id', '$item->id', '$item->name', '$item->price', '$item->qnty');");
                  // $this->db->query("UPDATE products SET sale=sale+" . $item->qnty . ", quantity=quantity-" . $item->qnty . " WHERE product_id=" . $item->id);
                  //echo $this->db->last_query();
              }

              $data = array('grand_total' => $grand_total);
              $this->db->update('order_master',$data,array('order_master_id'=>$order_id));
              $this->load->view('client/invoice');

              
             
              return true;
              
              
            
     }
     public function generateRandomString($length = 14) {
      $characters = '0123456789';
      $charactersLength = strlen($characters);
      $randomString = '';
      for ($i = 0; $i < $length; $i++) {
          $randomString .= $characters[rand(0, $charactersLength - 1)];
      }
      return $randomString;
   }



     
}




 