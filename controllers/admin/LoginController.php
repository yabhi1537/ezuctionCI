<?php 
class LoginController extends CI_Controller
{
    function __construct()
    {
     parent::__construct();   
     $this->load->model('admin/Loginmodel');
    }

    public function index(){

        $this->load->view('admin/login');

    }

    public function login(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $logincheck = $this->Loginmodel->getCheckLogin($email,$password);
        if(!empty($logincheck)){

            $adminid = $logincheck[0]['id'];
            $this->session->set_userdata('id',$adminid);   

            redirect('admin/HomeController');


        }else{

            
            $this->session->set_flashdata('failure','Username and Password Incorrect');
            
            redirect('admin');
        }

    


    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('admin');
    }
    
}




?>