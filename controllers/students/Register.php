<?php  
class Register extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        
        $this->load->model('Loginmodel');
        $this->load->model('common_model');
        $this->load->model('student/Loginstudentsmodel');
        date_default_timezone_set('Asia/Kolkata');


    }

    function index(){
        $data['contact']  = $this->Loginmodel->getContact();
        $this->load->view('student/signup',$data);
    }

    function saveRecord(){
        $date =  date('Y-m-d H:i:s');
        $newdate = date('y');
        $str_result = '0123456789'; 
        $stdid = "ST".$newdate."-".substr(str_shuffle($str_result), 0, 4); 
      
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $number = $this->input->post('number');
        $gender = $this->input->post('gender');
        $dob = $this->input->post('dob');
        $schoolname = $this->input->post('schoolname');
        $class = $this->input->post('class');
        $address = $this->input->post('address');
        $area = $this->input->post('area');
        $pincode = $this->input->post('pincode');
        $district = $this->input->post('district');
        $state = $this->input->post('state');
        $password = $this->input->post('password');
        $tution = $this->input->post('tution');



        $formArray['name'] = $name;
        $formArray['email'] = $email;
        $formArray['number'] = $number;
        $formArray['gender'] = $gender;
        $formArray['dob'] = $dob;
        $formArray['schoolname'] = $schoolname;
        $formArray['class'] = $class;
        $formArray['address'] = $address;
        $formArray['area'] = $area;
        $formArray['pincode'] = $pincode;
        $formArray['district'] = $district;
        $formArray['state'] = $state;
        $formArray['password'] = $password;
        $formArray['studnetid'] = $stdid;
        $formArray['tutionsubject'] = $tution;
        $formArray['created_at'] = $date;
        
         $emailids = $this->input->post('email');
        $check = array(
            'email' => $this->input->post('email'),
        );
        $status =  $this->common_model->isStuExit('students',$check);
        //    print_r($status);
        //      die();
        if($status == "1"){
            $this->session->set_flashdata('error','Duplicate email found!');
             $this->load->view('student/signup');

        }else{

            if($formArray == true){
                $this->db->insert('students',$formArray);
                $this->session->set_flashdata('success','Successfully registered your registration id is '.$stdid.'');

                // $this->session->set_flashdata('success','You have successfully completed the registration process.
                // Your Edukxn Registration  ID is :' .$stdid.'Note: Please save the edukxn ID for future references.
                //  Reach out to us for support on:
                //  edukxnhouse@gmail.com 
                //  Or WhatsApp @ 7572-000-720 ' );
                
               // redirect('students/LoginController');
           $this->load->library('phpmailer_lib');
           
           $mail = $this->phpmailer_lib->load();
          // deoignqlbqtvnhno
   
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
            
       // $html = 'Your ID is '.$stdid.'';
        $html = 'Hello,
                 You have successfully completed the registration process.
                 Edukxn Registration  ID is :' .$stdid.'Note: Please save the edukxn ID for future references.
                 Reach out to us for support on:
                 edukxnhouse@gmail.com 
                 Or WhatsApp @ 7572-000-720 ';
        
        $mail->Body =  $html;
        $mail->SMTPDebug = 0;
        $mail->isHTML(true);
        //   print_r($mail);die();
  
        if(!$mail->send()) {
            echo 'Message could not be sent.';
            
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {

            echo 'Message has been sent';
        }
        
            $this->session->set_flashdata('success','Successfully registered your registration id is '. $stdid .' ');
            redirect('students/LoginController');

           }else{
             
           $this->session->set_flashdata('error','Some data is missing!');
           $this->load->view('student/signup'); 
               
           }
        
        }

    }


    function checkPhone(){

        $phone = $this->input->post('number');
        $mobile = $this->Loginstudentsmodel->getPhonenumber($phone);
        if($mobile > 0){
			echo "failed";
		}else{
			echo "success";
		}

    }
}


?>