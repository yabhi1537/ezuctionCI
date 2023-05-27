<?php 


        class Blog extends CI_Controller
{
        public function index(){
                $this->load->model('Loginmodel');
                $data['contact']  = $this->Loginmodel->getContact();
                $data['blogs'] =  $this->db->get('blogs')->result();
                $this->load->view('blogs',$data);
        }





public function jQuery(){
        $this->load->view('jquery');

}


        
}



?>