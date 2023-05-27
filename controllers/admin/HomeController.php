<?php 
class HomeController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Loginmodel');

    }

    public function index(){

        $data['teachers'] = $this->Loginmodel->getTeachrscount();
        $data['activeteachers'] = $this->Loginmodel->getTeachrsactivecount();
        $data['student'] = $this->Loginmodel->getStudents();
        $data['paidtechaers'] = $this->Loginmodel->getInactiveTeachers();
       
        $this->load->view('admin/index',$data);

    }
    
}




?>