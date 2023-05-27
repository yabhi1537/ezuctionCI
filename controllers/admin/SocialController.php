<?php 
class SocialController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Socialmodel');
    }
    

    function index(){

        $data['social'] = $this->Socialmodel->getSocialdetails();
        $this->load->view('admin/social',$data);
    }

    function saveData(){

      $callus =   $this->input->post('callus');
      $business =   $this->input->post('businesss');
      $insta =   $this->input->post('instagram');
      $facebook =   $this->input->post('facebook');
      $footerabout =   $this->input->post('footerabout');

      $formArrya['number'] = $callus;
      $formArrya['hours'] = $business;
      $formArrya['insta'] = $insta;
      $formArrya['facebook'] = $facebook;
      $formArrya['footer_about'] = $footerabout;
      
    //   print_r($formArrya);die();
      $this->db->where('id','1');
      $this->db->update('social',$formArrya);

      $this->session->set_flashdata('success','Data Updated Succesfully');
      redirect('admin/SocialController');



    }
    
}



?>