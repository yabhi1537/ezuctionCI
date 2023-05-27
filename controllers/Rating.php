<?php 
class Rating extends CI_Controller
{
    function __construct(){
        parent::__construct();
    }

    function index(){
        $this->load->model('Loginmodel');
        $this->load->model('Profile_model');
        $data['contact']  = $this->Loginmodel->getContact();
        $usrid = $this->session->userdata('userid');
       $data['ratings'] =   $this->Profile_model->getRatings($usrid);
       
        $this->load->view('ratings',$data);

    }
    
}


?>