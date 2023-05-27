<?php 
class StudentReview extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Reviewmodel');

    }

    function index(){

        $data['ratings'] = $this->Reviewmodel->getRating();
        $this->load->view('admin/studentreview',$data);

    }

    public function delRating(){
        $ratingid = $this->uri->segment(4);

        $this->db->where('id',$ratingid);
        $this->db->delete('ratings');

        $this->session->set_flashdata('success','Student Rating Deleted Succesfully');

        redirect('admin/StudentReview');


    }

    public function editRating(){

        $ratingid = $this->uri->segment(4);
        $this->db->where('id',$ratingid);
        $ratings = $this->db->get('ratings');
        $data['rating'] =$ratings->result_array(); 
        $this->load->view('admin/editstudentreview',$data);

        
    }

    public function updateRatings(){
        $ratingid = $this->uri->segment(4);
        $this->db->where('id',$ratingid);
        $formArray['rating'] = $this->input->post('rating');
        $formArray['review'] = $this->input->post('review');

        $this->db->where('id',$ratingid);
        $this->db->update('ratings',$formArray);
        $this->session->set_flashdata('success','Student Rating Updated Succesfully');
        redirect('admin/StudentReview');

    }
    
}



?>