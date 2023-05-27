<?php 

class Loginstudentsmodel extends CI_Model
{
    public function getChecklogin($number,$password){

        $getLogin = $this->db->query("SELECT * FROM `students` WHERE `number`='$number' && `password`='$password'");
        return $getLogin->result_array();

    }

    public function getPhonenumber($phone){

        $phone = $this->db->query("SELECT * FROM `students` WHERE `number`='$phone'");
        return $phone->num_rows();

    }
        public function getStudentid($userid){

        $techid = $this->db->query("SELECT * FROM `students` WHERE id='$userid'");
        return $techid->result_array();

    }
        public function getStuContact(){

        $contact = $this->db->query("SELECT * FROM `students`");
        return $contact->result_array();

    }
        public function getOtpStu($otp){

        $opts = $this->db->query("SELECT * FROM `students` WHERE otp='$otp'");
        return $opts->result_array();
        }
   
    public function getMailid($emails){

        $email = $this->db->query("SELECT * FROM `students` WHERE email='$emails'");
        return $email->num_rows();

    }
    function all(){
         $students = $this->db->query("SELECT * FROM students");
        return $students->result_array();
    }

    function fetch_pass($session_id)
    {
    $fetch_pass=$this->db->query("select * from students where id='$session_id'");
    $res=$fetch_pass->result();
    }
    function change_pass($session_id,$new_pass)
    {
    $update_pass=$this->db->query("UPDATE students set password ='$new_pass'  where id='$session_id'");
    }
       
     
}




?>