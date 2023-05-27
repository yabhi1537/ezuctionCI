<?php 
use PHPMailer\PHPMailer\PHPMailer;

class SignupController extends CI_Controller
{
	    public function __construct() {
        
        parent::__construct();
        $this->load->model('common_model');
		$this->load->model('Loginmodel');

        
    }

	public function index(){
		$data['contact']  = $this->Loginmodel->getContact();

		$this->load->view('signup',$data);
	}

	 function store(){
//print_r($_POST);die();
        date_default_timezone_set("Asia/Calcutta");
        $date = date('Y-m-d h:i:s', time());
        $newdate = date('y');
        $str_result = '0123'; 
        $teacherid = "EK".$newdate."-".substr(str_shuffle($str_result), 0, 4); 
       
        //  $gender =  $this->input->post('customRadioInline2');
        
        

            $config['upload_path']='upload/';
            $config['allowed_types']='gif|jpg|png|jpeg';
            $config['encrypt_name'] = 'true';

            $this->load->library('upload',$config);

		$this->form_validation->set_rules('fname','Full Name','trim|required');
		$this->form_validation->set_rules('email','Email','trim|required');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required|min_length[10]|max_length[10]');
		//$this->form_validation->set_rules('phone','Phone','trim|required');
		//$this->form_validation->set_rules('otherhqualificaion','otherhqualtion','trim|required');
        $this->form_validation->set_rules('contact_message','Introduction','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');
        $this->form_validation->set_rules('coachingadr','Address','trim|required');
        $this->form_validation->set_rules('area','Area','trim|required');
		$this->form_validation->set_rules('pincode','Pin Code','trim|required');
        $this->form_validation->set_rules('district','District','trim|required');
        $this->form_validation->set_rules('state','State','trim|required');
        // $this->form_validation->set_rules('landmark','Landmark','trim|required');
        
        

        if($this->form_validation->run()==false){
		$data['contact']  = $this->Loginmodel->getContact();

            $this->load->view('signup',$data);
   
	    }else{
           
            
            if ($this->upload->do_upload('image')){

//             $this->upload->display_errors();
            
//             $this->session->set_flashdata('error','Please Select file');
            
// 			$this->load->view('signup');

            

            $data = $this->upload->data();
               
            $img_name = $data['file_name'];  
            // $sub = $this->input->post('subhighq');
            // $mysub = "";
            //  foreach($sub as $key => $value){
            //      $mysub .= $value.",";
            //  }
            //  $subjecthigh =  rtrim($mysub,",");
             
             
            // $hqualtion = $this->input->post('hqualificaion');
            //              $myhq = "";
            //  foreach($hqualtion as $key => $highqu){
            //      $myhq .= $highqu.",";
            //  }
            //  $highqual =  rtrim($myhq,",");
             
             
            //  $otherhqualtion = $this->input->post('otherhqualificaion');
            //              $myhq = "";
            //  foreach($otherhqualtion as $key => $otherhqualtion){
            //      $myhq .= $highqu.",";
            //  }
            //  $otherhqualtion =  rtrim($myhq,",");
             
            // $achivement = $this->input->post('achievement');
            //  $myachieve = "";
            //  foreach($achivement as $key => $achieve){
            //      $myachieve .= $achieve.",";
            //  }
            //  $achievement =  rtrim($myachieve,",");
             
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
             
             
            //  $encpass = md5($this->input->post('password'));
             
            $emailids = $this->input->post('email');
            $data= array(
                'name' => $this->input->post('fname'),
                'teacher_id' => $teacherid,
                'email' => $this->input->post('email'),
                'gender' => $this->input->post('customRadioInline2'),
                'phone' => $this->input->post('phone'),
                'intro' => $this->input->post('contact_message'),
                'highest_qualification' => $this->input->post('hqualificaion'),
                'otherhighest_qualification' => $this->input->post('otherhqualificaion'),
                //'otherhighest_qualification' => $otherhqualtion,
                // 'subjecthigh' => $subjecthigh,
                // 'achievement' => $achievement,
                'batch' => $this->input->post('customRadioInline1'),
                'referby' => $this->input->post('referby'),
                'typeinstitute' => $this->input->post('customRadioInline33'),
                'total_techer_exp' => $this->input->post('totalexprnc'),
                'mode' => $this->input->post('mode'),
                'class' => $classess,
                'board' =>$boardss,
                'subject' => $subjectsss,
                'address' => $this->input->post('coachingadr'),
                'area' => $this->input->post('area'),
                'pincode' => $this->input->post('pincode'),
                'distrcit' => $this->input->post('district'),
                'state' => $this->input->post('state'),
                'password' => $this->input->post('password'),
                'landmark' => $this->input->post('landmark'),
                'image' => $img_name,
                'created_at' => $date,  
            );

            // print_r($data);
            // die();
            $check = array(
                'email' => $this->input->post('email'),
            );
            $status =  $this->common_model->isUserExit('teachers',$check);
            if($status == "1"){
                $this->session->set_flashdata('error','Duplicate email found!');
                            $this->load->view('signup');

            }else{

               if($data==true){
               $this->common_model->addRecord('teachers',$data);
               $this->load->library('phpmailer_lib');
               
               $mail = $this->phpmailer_lib->load();
               
               $mail->isSMTP();
               $mail->SMTPAuth = true;
               $mail->Host     = "smtp.gmail.com";
               $mail->Username = "tommythomas8644@gmail.com";
			$mail->Password = "lpjotpucncglrdog";
			$mail->SMTPSecure = 'ssl';                                                                  
			$mail->Port     = "465";
			$mail->setFrom("tommythomas8644@gmail.com", "Edukxn");
			$mail->Subject = "Edukxn";
			$mail->addAddress($emailids);
				
			//$html = 'Your ID is '.$teacherid.'';
            $html = 'Hello,
            You have successfully completed the registration process.
            Edukxn Registration  ID is :' .$teacherid.'Note: Please save the edukxn ID for future references.
            Reach out to us for support on:
            edukxnhouse@gmail.com 
            Or WhatsApp @ 7572-000-720 ';
			
			$mail->Body =  $html;
			$mail->SMTPDebug = 0;
			$mail->isHTML(true);
			//  print_r($mail);die();
	  
			if(!$mail->send()) {
				echo 'Message could not be sent.';
                
				echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {

				echo 'Message has been sent';
			}
            
                $this->session->set_flashdata('success','Successfully registered your registration id is '. $teacherid .' ');
               redirect('LoginController');

               }else{
                 
               $this->session->set_flashdata('error','Some data is missing!');
               $this->load->view('signup'); 
                   
               }
            
            } }else{
                //             $this->upload->display_errors();
            
//             $this->session->set_flashdata('error','Please Select file');
            
// 			$this->load->view('signup');

            

            $data = $this->upload->data();
               
            $img_name = $data['file_name'];  
            // $sub = $this->input->post('subhighq');
            // $mysub = "";
            //  foreach($sub as $key => $value){
            //      $mysub .= $value.",";
            //  }
            //  $subjecthigh =  rtrim($mysub,",");
             
             
            // $hqualtion = $this->input->post('hqualificaion');
            //              $myhq = "";
            //  foreach($hqualtion as $key => $highqu){
            //      $myhq .= $highqu.",";
            //  }
            //  $highqual =  rtrim($myhq,",");
             
             
            //  $otherhqualtion = $this->input->post('otherhqualificaion');
            //              $myhq = "";
            //  foreach($otherhqualtion as $key => $otherhqualtion){
            //      $myhq .= $highqu.",";
            //  }
            //  $otherhqualtion =  rtrim($myhq,",");
             
            // $achivement = $this->input->post('achievement');
            //  $myachieve = "";
            //  foreach($achivement as $key => $achieve){
            //      $myachieve .= $achieve.",";
            //  }
            //  $achievement =  rtrim($myachieve,",");
             
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



             $subjectsss =  rtrim($mysubject,",");
             
             
            //  $encpass = md5($this->input->post('password'));
             
            
                // if ($this->input->post('customRadioInline2')!='') {
                //     $this->load->view('signup');
                // }
            $data= array(
                'name' => $this->input->post('fname'),
                'teacher_id' => $teacherid,
                'email' => $this->input->post('email'),
                'gender' => $this->input->post('customRadioInline2'),
                'phone' => $this->input->post('phone'),
                'intro' => $this->input->post('contact_message'),
                'highest_qualification' => $this->input->post('hqualificaion'),
                'otherhighest_qualification' => $this->input->post('otherhqualificaion'),
                //'otherhighest_qualification' => $otherhqualtion,
                // 'subjecthigh' => $subjecthigh,
                // 'achievement' => $achievement,
                'batch' => $this->input->post('customRadioInline1'),
                'referby' => $this->input->post('referby'),
                'typeinstitute' => $this->input->post('customRadioInline33'),
                'total_techer_exp' => $this->input->post('totalexprnc'),
                'mode' => $this->input->post('mode'),
                'class' => $classess,
                'board' =>$boardss,
                'subject' => $subjectsss,
                'address' => $this->input->post('coachingadr'),
                'area' => $this->input->post('area'),
                'pincode' => $this->input->post('pincode'),
                'distrcit' => $this->input->post('district'),
                'state' => $this->input->post('state'),
                'password' => $this->input->post('password'),
                'landmark' => $this->input->post('landmark'),
                'image' => $img_name,
                'created_at' => $date,  
            );

            // print_r($data);
            // die();
            $check = array(
                'email' => $this->input->post('email'),
            );
            $status =  $this->common_model->isUserExit('teachers',$check);
            if($status == "1"){
		$data['contact']  = $this->Loginmodel->getContact();

                $this->session->set_flashdata('error','Duplicate email found!');
                            $this->load->view('signup',$data);

            }else{

               if($data==true){
               $this->common_model->addRecord('teachers',$data);
               $this->session->set_flashdata('success','Signup Successfully!');
               redirect('LoginController');
               }else{
                 
               $this->session->set_flashdata('error','Some data is missing!');
               $this->load->view('signup'); 
                   
               }
                
                
        }
            } 
	    }

     }

}


?>