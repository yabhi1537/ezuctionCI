<?php 
class Loginmodel extends CI_Model
{

    public function getTeacherlogin($email,$password){

        $login = $this->db->query("SELECT * FROM `teachers` WHERE email='$email' && password='$password'");
        return $login->result_array();
    }

    public function getContact(){

        $contact = $this->db->query("SELECT * FROM `social`");
        return $contact->result_array();

    }

    public function getReviews(){

        $reviews = $this->db->query("SELECT * FROM `reviews`");
        return $reviews->result_array();

    }

    public function getAboutus(){

        $about = $this->db->query("SELECT * FROM `aboutus`");
        return $about->result_array();

    }

    public function getTeacherid($userid){

        $techid = $this->db->query("SELECT * FROM `teachers` WHERE id='$userid'");
        return $techid->result_array();

    }

    public function getOtp($otp){   

        $opts = $this->db->query("SELECT * FROM `teachers` WHERE otp='$otp'");
        return $opts->result_array();

    }
    public function getMailid($emails){
        $email = $this->db->query("SELECT * FROM `teachers` WHERE email='$emails'");
        return $email->num_rows();
        
    }
    public function getEmails(){

        $temail = $this->db->query("SELECT * FROM `teachers`");
        return $temail->result_array();

    }
    
}



?>