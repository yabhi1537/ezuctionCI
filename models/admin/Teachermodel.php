<?php 
class Teachermodel extends CI_Model
{
    public function getTeachersdata(){

        $teachrs = $this->db->query("SELECT * FROM `teachers`");
        return $teachrs->result_array();

    }


    public function getUpdateStaus($id,$status){

        $teachrsstaus = $this->db->query("UPDATE `teachers` SET `status`='$status' WHERE id='$id'");

    }

    public function getEmailid($email){

        $temail = $this->db->query("SELECT * FROM `teachers` WHERE email='$email'");
        return $temail->num_rows();

    }
    
}



?>