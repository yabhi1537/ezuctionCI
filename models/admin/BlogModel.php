<?php 
class BlogModel extends CI_Model
{
    public function getBlogs(){

        $review = $this->db->query("SELECT * FROM `blogs`");
        return $review->result_array();

    }

   
    
}


?>