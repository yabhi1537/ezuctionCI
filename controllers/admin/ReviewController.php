<?php 
class ReviewController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Reviewmodel');
        date_default_timezone_set('Asia/Kolkata');

    }

    public function index(){

        $data['review'] = $this->Reviewmodel->getReviews();
      
        $this->load->view('admin/review',$data);

    }

    public function addReviews(){
        $this->load->view('admin/addreview');
        
    }

    public function saveReviews(){
       $date =  date('Y-m-d H:i:s');
       $title = $this->input->post('title');
       $description = $this->input->post('description');
       
       $config['upload_path']          = 'upload/reviews/';
       $config['allowed_types']        = 'gif|jpg|png';
    //    $config['max_size']             = 100;
    //    $config['max_width']            = 1024;
    //    $config['max_height']           = 768;

       $this->load->library('upload', $config);

       if ( ! $this->upload->do_upload('image'))
       {
               $error = array('error' => $this->upload->display_errors());
               $errorrs = $error['error'];
               $this->session->set_flashdata('failure',$errorrs);
              $this->load->view('admin/addreview');
               
              
       }
       else
       {
               $data = array('upload_data' => $this->upload->data());
              $imagenae = $data['upload_data']['file_name'];
               
       }

       $formArray['title'] = $title;
       $formArray['desc'] = $description;
       $formArray['image'] = $imagenae;
       $formArray['created_at'] = $date;

       $this->db->insert('reviews',$formArray);
       $this->session->set_flashdata('success','Review added Succesfully');
       redirect('admin/review');

    }

    public function delReview(){

        $revid = $this->uri->segment(4);

       // print_r($revid);die();
        $this->db->where('id',$revid);

        $this->db->delete('reviews');

        $this->session->set_flashdata('success','Review Deleted Succesfully');

        // redirect('admin/review');


    }

    public function editreview(){

        $revid = $this->uri->segment(4);
        $data['reviews'] = $this->Reviewmodel->getReviewsbyid($revid);
        $this->load->view('admin/editreview',$data);

    }

    public function updatereview(){

        $revid = $this->uri->segment(4);
        $date =  date('Y-m-d H:i:s');
        $title = $this->input->post('title');
        $description = $this->input->post('description');
        
        if(!empty($_FILES['image']['name'])){
        
        $config['upload_path']          = 'upload/reviews/';
        $config['allowed_types']        = 'gif|jpg|png';
     //    $config['max_size']             = 100;
     //    $config['max_width']            = 1024;
     //    $config['max_height']           = 768;
 
        $this->load->library('upload', $config);
 
        if ( ! $this->upload->do_upload('image'))
        {
                $error = array('error' => $this->upload->display_errors());
                $errorrs = $error['error'];
                $this->session->set_flashdata('failure',$errorrs);
               $this->load->view('admin/editreview');
                
               
        }
        else
        {
                $data = array('upload_data' => $this->upload->data());
               $imagenae = $data['upload_data']['file_name'];
                
        }}else{

            $imagenae = $this->input->post('oldimage');

        }
 
        $formArray['title'] = $title;
        $formArray['desc'] = $description;
        $formArray['image'] = $imagenae;
        $formArray['created_at'] = $date;
 
        $this->db->where('id',$revid);
        $this->db->update('reviews',$formArray);

        $this->session->set_flashdata('success','Review updated Succesfully');
        redirect('admin/review');
        // $data['reviews'] = $this->Reviewmodel->getReviewsbyid($revid);
        // $this->load->view('admin/editreview',$data);

    }
    
}



?>