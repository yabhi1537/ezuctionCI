<?php 

use PHPMailer\PHPMailer\PHPMailer;

class MainStuController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Loginmodel');
        $this->load->model('student/Loginstudentsmodel');
		$this->load->database();
		$this->load->library('session');
		/*load Model*/
		$this->load->helper('url');
    }
    public function StuforgerPasswor(){
        $data['contact']  = $this->Loginstudentsmodel->getStuContact();
        $this->load->view('student/forgot-password-student',$data);
        // print_r($data);
        // die();

    }
    public function chapass()
    {
        // $this->load->model('Loginmodel');
        // $data['tids']  = $this->Loginmodel->getEmails();
        
        // $this->load->view('change-password',$data);
        $this->load->view('student/change-pass-stu');
    }

    public function forgetSednmailStu(){
        $email = $this->input->post('email');
        $mailid = $this->Loginstudentsmodel->getMailid($email);
        //  print_r($mailid);
        //  die();
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
        $mail->Subject = " EduKxn account: Password reset";
        $mail->addAddress($email);
            
        $html =    'Your OTP for Password reset is '.$otp.'.
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
            $this->db->update('students',$formArry);
            echo 'Message has been sent';
        }
       // die();
        redirect('check-confirm-otp');
    }else{

        $this->session->set_flashdata('error','Please enter Valid mail id...');
        redirect('student/forgot-password-student');
     //  $this->load->view('student/forgot-password-student');
    }

    }
        public function ConfirmOtp(){
        $this->load->model('student/Loginstudentsmodel');
        $data['contact']  = $this->Loginstudentsmodel->getStuContact();
        $this->load->view('student/otp-stu',$data);
    }
        public function checkOtp(){
        $this->load->model('student/Loginstudentsmodel');
        $otp=$this->input->post('otp');
        // print_r($otp);die();
        $otucheck = $this->Loginstudentsmodel->getOtpStu($otp);
       
        $data['otps'] = $otucheck;
        // print_r($data['otps']);die();
        if(empty($otucheck)){
            $this->session->set_flashdata('error','Enter Correct Password');
             redirect('check-confirm-otp');
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
        // // print_r($mail);die();
  
        // if(!$mail->send()) {
        //     echo 'Message could not be sent.';
  
        //     echo 'Mailer Error: ' . $mail->ErrorInfo;
        // } else {
        //     echo 'Message has been sent';
        // }

        // $this->session->set_flashdata('success','Your Password Has been send to your mail id');

        // redirect('students/login');
        }
        $this->load->view('student/change-pass-stu',$data);

    }


    public function change_pass()
	{
		
		$this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
	
		if($this->form_validation->run() == FALSE){
			//Views
			$this->load->view('student/change-pass-stu');
		} else {

        $hiddId = $this->input->post('teachId');
        $stuEmail = $this->input->post('stuEmail');
		//print_r($stuEmail);die();
		
		$students = $this->Loginstudentsmodel->all();
		foreach($students as $tech);
		   $teachID = $tech['id'];
		//    print_r($teachID); die();
		 
		if($teachID = $hiddId){
		$pass = $this->input->post('password');
		$formArry['password'] = $pass;
		$this->db->where('id',$hiddId);
		$this->db->update('students',$formArry);


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
        $mail->addAddress($stuEmail);

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

    	//$this->session->set_flashdata('success','Your Password Has been change..');
			redirect('students/login');
	  }else{
		$this->session->set_flashdata('success','Your Password Has been not send');
	  }
	 }	// $this->load->view('change-password');	
	}


}