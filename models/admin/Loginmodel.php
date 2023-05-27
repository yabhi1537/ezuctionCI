<?php 
class Loginmodel extends CI_Model
{

    public function getCheckLogin($email,$password){

        $admin = $this->db->query("SELECT * FROM `admin` WHERE username = '$email' && password='$password'");
        return $admin->result_array();

    }

    public function getTeachrscount(){

        $count = $this->db->query("SELECT * FROM `teachers`");
        return $count->num_rows();

    }


    public function getTeachrsactivecount(){

        $counts = $this->db->query("SELECT * FROM `teachers` WHERE `status`='1'");
        return $counts->num_rows();

    }

    public function getfacilities(){

        $facilities = $this->db->query("SELECT * FROM `facilities`");
        return $facilities->result_array();

    }

    public function getStudents(){

        $students = $this->db->query("SELECT * FROM `students`");
        return $students->num_rows();

    }

    public function getInactiveTeachers(){

        $teche = $this->db->query("SELECT * FROM `teachers` WHERE paidstatus='1'");
        return $teche->num_rows();

    }
    
}



?>