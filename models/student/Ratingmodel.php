<?php 
class Ratingmodel extends CI_Model
{

    function getRatings($sid,$techid){

        $query = $this->db->query("SELECT * FROM `ratings` WHERE `sid`='$sid' && techid ='$techid'");

        return $query->num_rows();

    }


    
}



?>