<?php 

class Banners extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        
    }

    function index(){

        $query = $this->db->get('banners');
        $data['banner'] = $query->result_array();
        $this->load->view('admin/banners',$data);

    }

    function savebanners(){


        $config['upload_path']          = 'upload/banner/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        // $config['max_size']             = '';
        $config['max_width']            = 870;
        $config['max_height']           = 580;
        $config['min_width']            = 507;
        $config['min_height']           = 338;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('image'))
        {
                $error = array('error' => $this->upload->display_errors());
                $errore = $error['error'];
                $this->session->set_flashdata('failure',$errore);
                redirect('admin/Banners');
               
        }
        else
        {
                $data = array('upload_data' => $this->upload->data());
               $imagename = $data['upload_data']['file_name'];
               $formArray['banner'] = $imagename;
               $this->db->where('id','1');
               $this->db->update('banners',$formArray);
               $this->session->set_flashdata('success','Banner Updated Succesfully');
               redirect('admin/Banners');

        }


    }
    
}



?>