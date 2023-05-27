<?php 
class LoginController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Loginmodel');
        $this->load->model('student/Loginstudentsmodel');
    }
    public function index(){
        $data['contact']  = $this->Loginmodel->getContact();
        $this->load->view('student/login',$data);
    }

    public function checklogin(){
        $mobile = $this->input->post('mobile');
        $password = $this->input->post('password');
        $logincheck = $this->Loginstudentsmodel->getChecklogin($mobile,$password);
        $logincount = count($logincheck);
        if(!empty($logincheck)){

            $studentid =  $logincheck[0]['id'];
           
            $this->session->set_userdata('sid',$studentid);
            redirect('home');

        }else{


            $this->session->set_flashdata('error','Username and Password Incorrect');
            redirect('students/login');

        }




    }


    public function logout()
		{
			$this->session->sess_destroy();
			redirect('students/login');
		}

    
}




?>