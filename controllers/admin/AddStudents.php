<?php 
class AddStudents extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
    }
    

    public function index(){
        $students = $this->db->get('students');
        $data['student'] = $students->result_array();
        $this->load->view('admin/students',$data);
    }

    public function addStudents(){

        $this->load->view('admin/addstudent');
    }

    public function saveData(){
        $date = date('Y-m-d H:i:s');
        $newdate = date('y');
        $str_result = '0123456789'; 
        $stdid = "ST".$newdate."-".substr(str_shuffle($str_result), 0, 4); 

        $name = $this->input->post('names');
        $email = $this->input->post('email');
        $gender = $this->input->post('gender');
        $mobile = $this->input->post('mobile');
        $dob = $this->input->post('dob');
        $schoolname = $this->input->post('schoolname');
        $class = $this->input->post('class');
        $subject = $this->input->post('subjectt');
        $address = $this->input->post('address');
        $area = $this->input->post('area');
        $pincode = $this->input->post('pincode');
        $district = $this->input->post('district');
        $state = $this->input->post('state');
        $password = $this->input->post('password');

        $formArray['name'] = $name;
        $formArray['email'] = $email;
        $formArray['number'] = $mobile;
        $formArray['gender'] = $gender;
        $formArray['dob'] = $dob;
        $formArray['schoolname'] = $schoolname;
        $formArray['class'] = $class;
        $formArray['address'] = $address;
        $formArray['area'] = $area;
        $formArray['pincode'] = $pincode;
        $formArray['district'] = $district;
        $formArray['state'] = $state;
        $formArray['password'] = $password;
        $formArray['tutionsubject'] = $subject;
        $formArray['studnetid'] = $stdid;
        $formArray['created_at'] = $date;
        $this->db->insert('students',$formArray);
        $this->session->set_flashdata('success',"Student added Succesfully ".$stdid."");
        redirect('admin/AddStudents/addStudents');
        

    }

    public function delStudent(){

        $product_id = $this->uri->segment(4);
        $this->db->where('id',$product_id);
        $this->db->delete('students');
        $this->session->set_flashdata('success',"Student deleted Succesfully");
        redirect('admin/AddStudents');
    }


    public function editStudent(){
        $product_id = $this->uri->segment(4);
        $this->db->where('id',$product_id);

        $stdt = $this->db->get('students');
        $data['student'] = $stdt->result_array();
        $this->load->view('admin/editstudent',$data);

    }

    public function updateStudent(){
        $product_id = $this->uri->segment(4);
        $name = $this->input->post('names');
        $email = $this->input->post('email');
        $gender = $this->input->post('gender');
        $mobile = $this->input->post('mobile');
        $dob = $this->input->post('dob');
        $schoolname = $this->input->post('schoolname');
        $class = $this->input->post('class');
        $subject = $this->input->post('subjectt');
        $address = $this->input->post('address');
        $area = $this->input->post('area');
        $pincode = $this->input->post('pincode');
        $district = $this->input->post('district');
        $state = $this->input->post('state');
        $password = $this->input->post('password');

        $formArray['name'] = $name;
        $formArray['email'] = $email;
        $formArray['number'] = $mobile;
        $formArray['gender'] = $gender;
        $formArray['dob'] = $dob;
        $formArray['schoolname'] = $schoolname;
        $formArray['class'] = $class;
        $formArray['address'] = $address;
        $formArray['area'] = $area;
        $formArray['pincode'] = $pincode;
        $formArray['district'] = $district;
        $formArray['state'] = $state;
        $formArray['password'] = $password;
        $formArray['tutionsubject'] = $subject;
        $formArray['studnetid'] = $stdid;
        // $formArray['created_at'] = $date;

        $this->db->where('id',$product_id);
        $this->db->update('students',$formArray);
        $this->session->set_flashdata('success',"Student updates Succesfully");
        redirect('admin/AddStudents');


    }
}


?>