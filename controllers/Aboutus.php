<?php 



            class Aboutus extends CI_Controller
            {
                public function index(){
                    $this->load->model('Loginmodel');
                    $data['contact']  = $this->Loginmodel->getContact();
                    $data['about']  = $this->Loginmodel->getAboutus();
                    $this->load->view('aboutus',$data);
                    
                }
                
            }


?>