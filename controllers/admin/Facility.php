<?php 

class Facility extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Loginmodel');
    }

    public function index(){

        $data['facility'] = $this->Loginmodel->getfacilities();
        $this->load->view('admin/addfacility',$data);


    }


    function saveData(){

        $title = $this->input->post('title');
        $subtitile = $this->input->post('subtitile');

       if(!empty($_FILES['files']['name'][0])){


        $data = [];

        $count = count($_FILES['files']['name']);

        $allimages="";
        for($i=0;$i<$count;$i++){
   
          if(!empty($_FILES['files']['name'][$i])){
   
            $_FILES['file']['name'] = $_FILES['files']['name'][$i];
            $_FILES['file']['type'] = $_FILES['files']['type'][$i];
            $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
            $_FILES['file']['error'] = $_FILES['files']['error'][$i];
            $_FILES['file']['size'] = $_FILES['files']['size'][$i];
  
            $config['upload_path'] = 'upload/facility/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = '5000'; // max_size in kb
            $config['file_name'] = $_FILES['files']['name'][$i];
   
            $this->load->library('upload',$config); 
   
            if($this->upload->do_upload('file')){
              $uploadData = $this->upload->data();
              $filename = $uploadData['file_name'];
              $allimages.=$filename.',';
          
            }else{

                $error = array('error' => $this->upload->display_errors());
                $errors = $error['error'];
                $this->session->set_flashdata('failure',$errors);
                $this->load->view('admin/addfacility');

                
            }
          }
   
        }
        $productiages = rtrim($allimages,",");
    }else{

        $productiages = $this->input->post('oldimage');

    }
        $formArray['title'] = $title;
        $formArray['subtitle'] = $subtitile;
        $formArray['image'] = $productiages;

        $this->db->where('id','1');
        $this->db->update('facilities',$formArray);
        $this->session->set_flashdata('success','Data Updated Succesfully');

        redirect('admin/Facility');


    }
    
}



?>