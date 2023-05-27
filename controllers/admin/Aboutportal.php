<?php 
class Aboutportal extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Reviewmodel');
    }

    public function index(){

        $data['about'] = $this->Reviewmodel->getAboutportal();
        $this->load->view('admin/aboutportal',$data);

    }

    public function saveData(){
        $config['upload_path']          = 'upload/blog/';
        $config['allowed_types']        = '*';
        // $config['max_size']             = '';
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
            $error = array('error' => $this->upload->display_errors());
            $errore = $error['error'];
            $this->session->set_flashdata('error',$errore);

           // print_r($errore);die();
           // redirect('admin/Aboutportal');
        }
        else
        {
            $image = array('upload_data' => $this->upload->data());
            $imagename = $image['upload_data']['file_name'];
            $formArray['images'] = $imagename;
        }
            $title=$this->input->post('title');
            $description=$this->input->post('editor1');
            $formArray['title'] = $title;
            $formArray['description'] = $description;

            $this->db->where('id','1');
            $this->db->update('aboutportal',$formArray);
            $this->session->set_flashdata('success','Data Updated Successfully');
            redirect('admin/Aboutportal');


    }
    
}


?>