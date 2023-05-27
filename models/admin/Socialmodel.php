<?php 
class Socialmodel extends CI_Model
{
    public function getSocialdetails(){

       $social =  $this->db->query("SELECT * FROM `social`");
       return $social->result_array();

    }
    
}


?>