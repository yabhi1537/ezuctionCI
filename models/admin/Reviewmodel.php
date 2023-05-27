<?php 
class Reviewmodel extends CI_Model
{
    public function getReviews(){

        $review = $this->db->query("SELECT * FROM `reviews`");
        return $review->result_array();

    }

    public function getReviewsbyid($revid){

        $reviews = $this->db->query("SELECT * FROM `reviews` WHERE id='$revid'");
        return $reviews->result_array();

    }

    public function getAboutus(){

        $about = $this->db->query("SELECT * FROM `aboutus` WHERE id='1'");
        return $about->result_array();

    }

    public function getAboutportal(){

        $abouts = $this->db->query("SELECT * FROM `aboutportal` WHERE id='1'");
        return $abouts->result_array();

    }

    public function getRating(){

        $ratings = $this->db->query("Select ratings.id,ratings.sid,ratings.techid,ratings.review,ratings.rating, students.name as studentname,teachers.name
        From ratings
        LEFT JOIN students ON ratings.sid = students.id
        LEFT JOIN teachers ON ratings.techid = teachers.id");
        return $ratings->result_array();



    }
    
}


?>