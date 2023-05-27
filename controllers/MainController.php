<?php 

use PHPMailer\PHPMailer\PHPMailer;


class MainController extends CI_Controller
{
	public function __construct()
	{
		/*call CodeIgniter's default Constructor*/
		parent::__construct();
		/*load database libray manually*/
		$this->load->database();
		$this->load->library('session');
		/*load Model*/
		$this->load->helper('url');
		$this->load->model('Teacher_model');
	}  
	
		public function index(){
			

			$this->load->model('Teacher_model');
			$this->load->model('Loginmodel');
			$data['contact']  = $this->Loginmodel->getContact();
			$class = $this->Teacher_model->classdata();
			$data['class'] = $class;
			$subject = $this->Teacher_model->subjectdata();
			$data['subject'] = $subject;
		    $board = $this->Teacher_model->boarddata();
			$data['board'] = $board;
			$experience = $this->Teacher_model->experdata();
			$data['experience'] = $experience;
			$location = $this->Teacher_model->locationdata();
			$data['location'] = $location;
			$limit = $this->Teacher_model->teacherlimit();
			$data['limit'] = $limit;
			$teachers = $this->Teacher_model->all();
			//$data = array();
			$data['teachers'] = $teachers;
			$data['review'] = $this->Loginmodel->getReviews();
			$query = $this->db->get('banners');
			$data['banner'] = $query->result_array();
			$query1 = $this->db->get('aboutportal');
			$data['aboutportal'] = $query1->result_array();
			$data['blogs'] =  $this->db->get('blogs')->result();
			$data['profile'] =  $this->db->get('teachers')->result();
			$this->db->order_by('id','desc');
    		$this->db->limit(3, 0); 
			$data['events'] =  $this->db->get('events')->result();
			$photo = $this->Teacher_model->ourimage();
			$data['photo'] = $photo;
			
			
			$this->load->view('index',$data);
		}
		
	    public function listing(){
			$this->load->view('all-listing');
	    }
		
		function singleBlock(){
			$id = $this->uri->segment(3);
			$this->db->where('id',$id);
			$data['blog'] = $this->db->get('blogs')->result();
			$this->load->model('Loginmodel');
			$data['contact']  = $this->Loginmodel->getContact();
			$this->load->view('singleBlog',$data);
			// print_r($id);die();
		}

		public function ourimages(){
			$this->load->model('Teacher_model');
			$image = $this->Teacher_model->ourimage();
			$data['image'] = $image;
		}
		
		
		public function filterData(){
		            $this->load->model('Loginmodel');
		            $data['contact']  = $this->Loginmodel->getContact();
                	$this->load->model('Teacher_model');
                	
		        	$class = $this->Teacher_model->classdata();
			        $data['class'] = $class;
			        
			        $subject = $this->Teacher_model->subjectdata();
			        $data['subject'] = $subject;
			        
			        $board = $this->Teacher_model->boarddata();
			        $data['board'] = $board;
		        
		       
		            $exper = $this->Teacher_model->experdata();
			        $data['exper'] = $exper;
			        
			        $location = $this->Teacher_model->locationdata();
			       $data['location'] = $location;
		              
		       
		        $clasees = $this->input->post('clasees');
		        $courses = $this->input->post('courses');
		        $location = $this->input->post('location');
		        
		        $experience = $this->input->post('experience');
		        
		      //    print_r($courses);die();
		    
			    $this->load->model('Teacher_model');
			
			    $searchdata = $this->Teacher_model->filter($clasees,$courses,$location,$experience);

				// $product_id = $this->uri->segment(3);
				// print_r($searchdata[0]->id);
				// die();
		       
		     
		      //  $data =array();
		        $data['searchdata'] = $searchdata;
		        
		    
			$this->load->view('all-listing',$data);

		}
		
		
		public function instituteview(){
		     //  print_r($_POST);die();
                //	$this->load->model('Teacher_model');
                	
		      //  	$class = $this->Teacher_model->classdata();
			     //   $data['class'] = $class;
			        
			     //   $subject = $this->Teacher_model->subjectdata();
			     //   $data['subject'] = $subject;
			        
		        $Maths = $this->input->post('Maths');
		        $Chemistry = $this->input->post('Chemistry');
		        $Physics = $this->input->post('Physics');
		        $Biology = $this->input->post('Biology');
		        $Accounts = $this->input->post('Accounts');
		        $Buisness = $this->input->post('Buisness');
		        $Economis = $this->input->post('Economis');
		        $English = $this->input->post('English');
		        $Sociology = $this->input->post('Sociology');
		        $Geography = $this->input->post('Geography');
		        $Philosophy = $this->input->post('Philosophy');
		        //print_r($Maths);die();
		        
		        //print_r($this->input->post());die();
		    
			    $this->load->model('Teacher_model');
			
			    $searchdata = $this->Teacher_model->filter($Maths,$Chemistry,$Physics,$Biology,$Accounts,$Buisness,$Economis,$English,$Sociology,$Geography,$Philosophy);
		       
		     //print_r($searchdata);die();
		      //  $data =array();
		        $data['searchdata'] = $searchdata;
		        
		    
			$this->load->view('all-listing',$data);

		}

		public function forgerPassword(){
			$this->load->model('Loginmodel');
			$data['contact']  = $this->Loginmodel->getContact();
			$this->load->view('forget-password',$data);
		}

		public function chapass()
		{
			$this->load->model('Loginmodel');
			$data['tids']  = $this->Loginmodel->getEmails();
			
			$this->load->view('change-password',$data);
		}


	public function change_pass()
	{
		
		$this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
	
		if($this->form_validation->run() == FALSE){
			//Views
			// $this->session->set_flashdata('success','Enter Valid Confirm Password ');
			// redirect('confirm-otp');
			
			$this->load->view('change-password');
		} else {

        $hiddId = $this->input->post('teachId');
		$hiddemail = $this->input->post('teachEmail');
		//print_r($hiddemail);die();
		
		$teachers = $this->Teacher_model->all();
		foreach($teachers as $tech);
		   $teachID = $tech['id'];
		 
		if($teachID = $hiddId){
		$pass = $this->input->post('password');
		// $str_result = '0123456789'; 
		// $newpass = substr(str_shuffle($str_result), 0, 6);
		$formArry['password'] = $pass;
		$message = $pass;
		$this->db->where('id',$hiddId);
		$this->db->update('teachers',$formArry);

		//	print_r($teachEm); die();
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
                $mail->Subject = "Account updated";
                $mail->addAddress($hiddemail);

				$html = 'Hello,
				Password has been updated.
				Reach out to us for support on:
				edukxnhouse@gmail.com 
				Or WhatsApp @ 7572-000-720 ';
            
               $mail->Body =  $html;
                $mail->SMTPDebug = 1;
                $mail->isHTML(true);
                if(!$mail->send()) {
                    echo 'Message could not be sent.';
          
                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                } else {
                    echo 'Message has been sent';
                     
                } 
				$this->session->set_flashdata('success','Your Password Has been change successfully check your email.');

			redirect('login');
	  }else{
		$this->session->set_flashdata('success','Your Password Has been not send');
	  }
	 }	// $this->load->view('change-password');	
	}
		
		public function forgetSednmail(){
			$this->load->model('Loginmodel');
			$email = $this->input->post('email');
			$mailid = $this->Loginmodel->getMailid($email);
			if($mailid=='1'){
			$str_result = '0123456789'; 
            $otp = substr(str_shuffle($str_result), 0, 6);

			$formArry['otp'] = $otp;
			$this->load->library('phpmailer_lib');
        
			// PHPMailer object
			$mail = $this->phpmailer_lib->load();
			$mail->isSMTP();
			$mail->SMTPAuth = true;
			$mail->Host     = "mail.atzean.com";
			$mail->Username = "sonusharma@atzean.com";
			$mail->Password = "x%r_NLXp3?Aj";
			$mail->SMTPSecure = 'ssl';                                                                  
			$mail->Port     = "465";
			$mail->setFrom("sonusharma@atzean.com", "edukxn portal");
			$mail->Subject = "edukxn account varification otp";
			$mail->addAddress($email);
				
			//$html = 'Your OTP is '.$otp.'';
			$html = 'Your OTP for Password reset is '.$otp.'.
					Please do not share your OTP with anyone.

					Reach out to us for support on:
					Edukxnhouse@gmail.com 
					Or WhatsApp @ 7572-000-720 ';
			
			$mail->Body =  $html;
			$mail->SMTPDebug = 0;
			$mail->isHTML(true);
			//   print_r($mail);die();
	  
			if(!$mail->send()) {
				echo 'Message could not be sent.';
	  
				echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {

				$this->db->where('email',$email);
				$this->db->update('teachers',$formArry);
				echo 'Message has been sent';
			}
			//die();
			redirect('confirm-otp');
		}else{

			$this->session->set_flashdata('error','Please enter Valid mail id...');
			redirect('forget-password');
		}

		}

		public function ConfirmOtp(){
			$this->load->model('Loginmodel');
			$data['contact']  = $this->Loginmodel->getContact();
			$this->load->view('otp',$data);
		}

		public function checlOtp(){
			$this->load->model('Loginmodel');
			$otp=$this->input->post('otp');
			$otucheck = $this->Loginmodel->getOtp($otp);
			$data['otps']  = $otucheck;
			if(empty($otucheck)){
				$this->session->set_flashdata('error','Enter Correct Password');
				redirect('confirm-otp');
			}else{ 

			// $this->load->library('phpmailer_lib');
        
			// // PHPMailer object
			// $mail = $this->phpmailer_lib->load();
	  
			// $mail->isSMTP();
			// $mail->SMTPAuth = true;
		    // $mail->Host     = "mail.atzean.com";
			// $mail->Username = "sonusharma@atzean.com";
			// $mail->Password = "x%r_NLXp3?Aj";
			// $mail->SMTPSecure = 'ssl';                                                                  
			// $mail->Port     = "465";
			// $mail->setFrom("sonusharma@atzean.com", "edukxn portal");
			// $mail->Subject = "edukxn account password";
			// $mail->addAddress($otucheck[0]['email']);
				
			// $html = 'Dear '.$otucheck[0]['name'].' Your Password is '.$otucheck[0]['password'].'';
			
			// $mail->Body =  $html;
			// $mail->SMTPDebug = 0;
			// $mail->isHTML(true);
			// //   print_r($mail);die();
	  
			// if(!$mail->send()) {
			// 	echo 'Message could not be sent.';
	  
			// 	echo 'Mailer Error: ' . $mail->ErrorInfo;
			// } else {
			// 	echo 'Message has been sent';
			// }

			// $this->session->set_flashdata('success','Your Password Has been send to your mail id');

			// redirect('change-password');
			
 
			}
			$this->load->view('change-password',$data);

		}

	


}



?>

