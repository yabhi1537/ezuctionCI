<?php 
use PHPMailer\PHPMailer\PHPMailer;
class Contactus extends CI_Controller
{

   function __construct()
   {
      parent::__construct();
      // include APPPATH . 'third_party/PHPMailer\PHPMailer\PHPMailer';
      // include APPPATH . 'third_party/PHPMailer/PHPMailer.php';
      // include APPPATH . 'third_party/PHPMailer/SMTP.php';
      // include APPPATH . 'third_party/PHPMailer/Exception.php';
   }
    





   public function index(){
   $this->load->model('Loginmodel');
   $data['contact']  = $this->Loginmodel->getContact();
   $this->load->view('contactus',$data);
   
   }


public function saveData(){
 //$email2 = 'palkeshvyas45@gmail.com';
 $emailadd = $this->input->post('email');

      date_default_timezone_set('Asia/Kolkata');
      $date =  date('Y-m-d H:i:s');
      $name = $this->input->post('name');
      $email = $this->input->post('email');
      $message = $this->input->post('message');

      $this->load->library('phpmailer_lib');
        
      // PHPMailer object
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
      $mail->addAddress($emailadd);
      //$mail->addAddress($email2);
          
      $html = "<table>
          <tr>
              <td>Name : </td>                    
              <td> ".$name." </td>
          </tr>
          <tr>                                                                            
              <td>Email </td>
              <td>".$email."</td>
          </tr>
          <tr>
              <td>Message : </td>
              <td>".$message." </td>
          </tr>
          </table>";
      
      $mail->Body =  $html;
      $mail->SMTPDebug = 1;
      $mail->isHTML(true);
      //   print_r($mail);die();

      if(!$mail->send()) {
          echo 'Message could not be sent.';

          echo 'Mailer Error: ' . $mail->ErrorInfo;
      } else {
          echo 'Message has been sent';
      }   


      $formArray['name'] = $name;
      $formArray['email'] = $email;
      $formArray['message'] = $message;
      $formArray['created_at'] = $date;

      $this->db->insert('contactus',$formArray);





   }
   
  
}

?>