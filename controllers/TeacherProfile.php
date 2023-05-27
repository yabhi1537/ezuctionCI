<?php 


class TeacherProfile extends CI_Controller
{
   
    public function index(){
       
        $techer_id = $this->uri->segment(2);  

        $this->load->model('Teacher_model');

        $results = $this->Teacher_model->results($techer_id);
        
        $data['results'] = $results;
        
         $batches = $this->Teacher_model->batchesdata($techer_id);
        
        $data['batches'] = $batches; 
        
        
        
        $limit = $this->Teacher_model->teacherlimit();
        
        $data['limit'] = $limit; 
        
        $profile =  $this->Teacher_model->profile($techer_id);

        // $usrid = $this->session->userdata('userid');
       
        $one = $this->Teacher_model->getStartone($techer_id);
        $two = $this->Teacher_model->getStartTwo($techer_id);
        $three = $this->Teacher_model->getStartThree($techer_id);
        $four = $this->Teacher_model->getStartfour($techer_id);
        $five = $this->Teacher_model->getStartfive($techer_id);
        $fircount = count($one);
        $seccount = count($two);
        $thircount = count($three);
        $fourcount = count($four);
        $fivecount = count($five);
        if(!empty($one)){
        $fisrtcouhr = $one[0]['rating'];
        $fiststss = $fisrtcouhr * $fircount;
        }else{

            $fiststss="0";
        }
        if(!empty($two)){
        $secnsons = $two[0]['rating'];
        $secondsss = $secnsons * $seccount;
        }else{
            $secondsss="0";
        }
        if(!empty($three)){
        $thrress = $three[0]['rating'];
        $thirts = $thrress * $thircount;
        }else{
            $thirts="0";
        }
        if(!empty($four)){
        $fours = $four[0]['rating'];
        $foutsdet = $fours * $fourcount;
        }else{
            $foutsdet="0";
        }
        if(!empty($five)){
        $fivess = $five[0]['rating'];
        $fivesdetaiss = $fivess * $fivecount;
        }else{

            $fivesdetaiss="0";
        }
        $ratingss = $fiststss + $secondsss + $thirts + $foutsdet + $fivesdetaiss;
        if(!empty($ratingss)){
        $ratingcount = $fircount + $seccount + $thircount + $fourcount + $fivecount;
        $mainRating = $ratingss / $ratingcount;
        $data['first_character'] = substr($mainRating, 0, 1);
        }
        //$data =array();
        $data['profile'] = $profile;
    
        $this->load->model('Loginmodel');
        $data['contact']  = $this->Loginmodel->getContact();
        $this->load->view('profileteacher',$data);
    }
   

}

?>