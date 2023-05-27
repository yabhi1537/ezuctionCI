<?php 
class RatingController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
        $this->load->model('student/Ratingmodel');
    }
    

    public function index(){

       $date  =  date('Y-m-d H:i:s');
       $studentid = $this->input->post('studentid');
       $techid = $this->input->post('teachid');
       $review = $this->input->post('review');
       $rating = $this->input->post('rting');

       $checkstu  = $this->Ratingmodel->getRatings($studentid,$techid);
       $checkstu  = $this->Ratingmodel->getRatings($studentid,$techid);
       if($checkstu=="0"){

       $formArray['sid'] = $studentid;
       $formArray['techid'] = $techid;
       $formArray['review'] = $review;
       $formArray['rating'] = $rating;
       $formArray['created_at'] = $date;

       $this->db->insert('ratings',$formArray);

       echo "saved";

       }else{

        $formArray['sid'] = $studentid;
        $formArray['techid'] = $techid;
        $formArray['review'] = $review;
        $formArray['rating'] = $rating;
        $formArray['updated_at'] = $date;

        $condition = array('sid' => $studentid, 'techid' => $techid);
        $this->db->where($condition); 
        $this->db->update('ratings',$formArray);
        echo "updated";

       }

    }
}



?>