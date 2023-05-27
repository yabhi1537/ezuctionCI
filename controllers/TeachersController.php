<?php 


class TeachersController extends CI_Controller
{
    
    public function index(){
        $this->load->model('Loginmodel');
        $this->load->model('Teacher_model');
        $data['contact']  = $this->Loginmodel->getContact();
        
        $teachers = $this->Teacher_model->all();
        
        $data['teachers'] = $teachers;
        
        $this->load->view('teachers',$data);
    }    
    
}

?>