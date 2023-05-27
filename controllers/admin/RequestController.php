<?php 
class RequestController extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index(){
        $query = $this->db->get('contactus');
        $data['contact'] = $query->result_array();
       
        $this->load->view('admin/request',$data);

    }
    
}



?>