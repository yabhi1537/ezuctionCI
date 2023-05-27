<?php 
class EventModel extends CI_Model
{
    public function getBlogs(){
        $review = $this->db->query("SELECT * FROM `events`");
        return $review->result_array();
    }
    
}


?>