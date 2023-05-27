<?php 



class ProfileController extends CI_Controller
{
		public function __construct() {
		
		parent::__construct();
		$this->load->model('Common_model');
		
	}
 

	public function index(){
	    //print_r($_POST);die();
       
		$this->load->model('Profile_model');

			$userId=$_SESSION['userid'];
			if(empty($userId)){
			    redirect('Login');
			}
			
			$teachers = $this->Profile_model->getUser($userId);

			$data = array();
			$data['teachers'] = $teachers;
		
	
			 date_default_timezone_set("Asia/Calcutta");
	       	 $date = date('Y-m-d h:i:s', time());


            $config['upload_path']='upload/';
            $config['allowed_types']='gif|jpg|png';
            $config['encrypt_name'] = 'true';

            $this->load->library('upload',$config);

            // print_r($_POST['time']);
            // die();
		$this->form_validation->set_rules('fname','Full Name','trim|required');
		$this->form_validation->set_rules('email','Email','trim|required');
		//$this->form_validation->set_rules('phone','Phone','trim|required');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required|min_length[10]|max_length[10]');
		//$this->form_validation->set_rules('otherhighest_qualification','Otherhighest_qualification','trim|required');
        $this->form_validation->set_rules('contact_message','Introduction','trim|required');
	
        $this->form_validation->set_rules('coachingadr','Address','trim|required');
        $this->form_validation->set_rules('area','Area','trim|required');
		$this->form_validation->set_rules('pincode','Pin Code','trim|required');
        $this->form_validation->set_rules('district','District','trim|required');
        $this->form_validation->set_rules('state','State','trim|required');
        // $this->form_validation->set_rules('price','Price','trim|required');
        	if($this->form_validation->run()==false){
                $this->load->model('Loginmodel');
                $data['contact']  = $this->Loginmodel->getContact();

			$this->load->view('profile',$data);

        	}else{
        	    if($_FILES['image']['name']!=""){

				$this->upload->do_upload('image');


				$data = $this->upload->data();

				$img_name = $data['file_name']; 
				
				
				// $hqualtion = $this->input->post('hqualificaion');
             //             $myhq = "";
             // foreach($hqualtion as $key => $highqu){
             //     $myhq .= $highqu.",";
             // }
             // $highqual =  rtrim($myhq,",");
				
				$class = $this->input->post('class');
             
            $myclass = "";
             foreach($class as $key => $classes){
                 $myclass .= $classes.",";
             }
             $classess =  rtrim($myclass,",");
             
             
             $board = $this->input->post('board');
                         $mycboard = "";
             foreach($board as $key => $boards){
                 $mycboard .= $boards.",";
             }
             $boardss =  rtrim($mycboard,",");
             
             $subject = $this->input->post('subject');
                         $mysubject = "";
             foreach($subject as $key => $subjects){
                 $mysubject .= $subjects.",";
             }
             $subjectsss =  rtrim($mysubject,",");

        		   $formArray= array();
                $formArray['name'] = $this->input->post('fname');
                $formArray['email'] = $this->input->post('email');
                $formArray['gender'] = $this->input->post('customRadioInline2');
                $formArray['phone'] = $this->input->post('phone');
                $formArray['intro'] = $this->input->post('contact_message');
                $formArray['highest_qualification'] =  $this->input->post('hqualificaion');;
                $formArray['otherhighest_qualification'] = $this->input->post('otherhighest_qualification');
                // $formArray['achievement'] = $this->input->post('achievement');
                $formArray['batch'] = $this->input->post('customRadioInline1');
                // $formArray['coachingtim'] = $this->input->post('time');
                $formArray['typeinstitute'] = $this->input->post('customRadioInline33');
                $formArray['mode'] = $this->input->post('mode');
                $formArray['total_techer_exp'] = $this->input->post('totalexprnc');
                $formArray['class'] = $classess;
                $formArray['board'] = $boardss;
                $formArray['subject'] = $subjectsss;
                $formArray['address'] = $this->input->post('coachingadr');
                $formArray['area' ]= $this->input->post('area');
                $formArray['pincode'] = $this->input->post('pincode');
                $formArray['distrcit'] = $this->input->post('district');
                $formArray['state'] = $this->input->post('state');
                $formArray['landmark'] = $this->input->post('landmark');
                $formArray['price'] = $this->input->post('price');
                $formArray['image'] = $img_name;
                $this->Profile_model->updateUser($userId,$formArray);
				$this->session->set_flashdata('success','Profile Updated Succesfully!');
				redirect('ProfileController');
        	    }else{
        	        
        	    //   $hqualtion = $this->input->post('hqualificaion');
             //             $myhq = "";
             // foreach($hqualtion as $key => $highqu){
             //     $myhq .= $highqu.",";
             // }
            //  $highqual =  rtrim($myhq,",");  
        	        
        	   $class = $this->input->post('class');
        	        $myclass = "";
             foreach($class as $key => $classes){
                 $myclass .= $classes.",";
             }
             $classess =  rtrim($myclass,",");
             
             $board = $this->input->post('board');
                         $mycboard = "";
             foreach($board as $key => $boards){
                 $mycboard .= $boards.",";
             }
             $boardss =  rtrim($mycboard,",");
             
             $subject = $this->input->post('subject');
                         $mysubject = "";
             foreach($subject as $key => $subjects){
                 $mysubject .= $subjects.",";
             }
             $subjectsss =  rtrim($mysubject,",");
             
             
        	        $formArray= array();
                $formArray['name'] = $this->input->post('fname');
                $formArray['email'] = $this->input->post('email');
                $formArray['gender'] = $this->input->post('customRadioInline2');
                $formArray['phone'] = $this->input->post('phone');
                $formArray['intro'] = $this->input->post('contact_message');
                $formArray['highest_qualification'] =  $hqualtion = $this->input->post('hqualificaion');;
                $formArray['otherhighest_qualification'] = $this->input->post('otherhighest_qualification');
                $formArray['subjecthigh'] = $this->input->post('subhighq');
                $formArray['achievement'] = $this->input->post('achievement');
                $formArray['batch'] = $this->input->post('customRadioInline1');
                // $formArray['coachingtim'] = $this->input->post('time');
                $formArray['typeinstitute'] = $this->input->post('customRadioInline33');
                $formArray['mode'] = $this->input->post('mode');
                $formArray['total_techer_exp'] = $this->input->post('totalexprnc');
                $formArray['class'] = $classess;
                $formArray['board'] = $boardss;
                $formArray['subject'] = $subjectsss;
                $formArray['address'] = $this->input->post('coachingadr');
                $formArray['area' ]= $this->input->post('area');
                $formArray['pincode'] = $this->input->post('pincode');
                $formArray['distrcit'] = $this->input->post('district');
                $formArray['state'] = $this->input->post('state');
                $formArray['landmark'] = $this->input->post('landmark');
                $formArray['price'] = $this->input->post('price');
                $formArray['image'] = $this->input->post('oldimage');
                 
            
            	$this->Profile_model->updateUser($userId,$formArray);
				$this->session->set_flashdata('success','Profile Updated Succesfully!');
				redirect('ProfileController');
        	    }

				}
        	
	}
	


}


?>