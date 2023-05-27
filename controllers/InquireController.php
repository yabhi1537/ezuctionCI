<?php 

use PHPMailer\PHPMailer\PHPMailer;

 class InquireController extends CI_Controller
    {
       
            public function index(){

                $this->load->model('Inquery_model');
                date_default_timezone_set('Asia/Kolkata');
                    $datetime =  date('Y-m-d H:i');
                 $name = $this->input->post('name');
                 $message  = $this->input->post('message');
                 $emailadd = $this->input->post('recipient_mail');
                 $techname = $this->input->post('techname');
                 //print_r($techname);die();
                
                 
                 $this->form_validation->set_rules('phone', 'Phone', 'trim|required|min_length[10]|max_length[10]');
                 if ($this->form_validation->run() == FALSE)
                {
                        redirect('coaching-center');
                }else
                {
                  $techId =  $this->input->post('hiddenid');
                 $email2 = $this->input->post('hiddenemail');
               //  print_r($email2);die();

           
                // $email2 = 'palkeshvyas45@gmail.com';hiddenidds
                $formArray = array();
                $formArray['name'] = $this->input->post('name');
                $formArray['email'] = $this->input->post('recipient_mail');
                $formArray['number'] = $this->input->post('phone');
                $formArray['message'] = $this->input->post('message');
                $formArray['tech_id'] = $this->input->post('hiddenid');
                $formArray['created_at'] = $datetime;
        
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
                $mail->Subject = "Trial class requested";
               // $mail->addAddress($emailadd);
                $mail->addAddress($email2);

                $html = "<table>
                <tr>
                    <td>Name : </td>                    
                    <td> ".$name." </td>
                </tr>
                <tr>                                                                            
                    <td>Email </td>
                    <td>".$emailadd."</td>
                </tr>
                <tr>
                    <td>Message : </td>
                    <td>".$message." </td>
                </tr>
                </table>";
            
                $mail->Body =  $html;
                $mail->SMTPDebug = 1;
                $mail->isHTML(true);
                if(!$mail->send()) {
                    echo 'Message could not be sent.';
          
                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                 } 
                 //else {
                //     // echo 'Message has been sent';
                //     // redirect('MainController');
                // }   
              
                //mail studant
                $messagestu = "Your request for a trail class has been to '.$techname.'.

                For any issues or queries, contact eduKxn.com on edukxnhouse@gmail.com ."; 
                $this->load->library('phpmailer_lib');
                $mailr = $this->phpmailer_lib->load();

                $mailr->isSMTP();
                $mailr->SMTPAuth = true;
                $mailr->Host     = "smtp.gmail.com";
                $mailr->Username = "tommythomas8644@gmail.com";
                $mailr->Password = "lpjotpucncglrdog";
                $mailr->SMTPSecure = 'ssl';                                                                  
                $mailr->Port     = "465";
                $mailr->setFrom("tommythomas8644@gmail.com", "Edukxn");
                $mailr->Subject = "Trial class request sent.";
                $mailr->addAddress($emailadd);
               // $mail->addAddress($email2);

                $htmls = "<table>
                <tr>
                    <td>Message : </td>
                    <td>".$messagestu." </td>
                </tr>
                </table>";
            
                $mailr->Body =  $htmls;
                $mailr->SMTPDebug = 1;
                $mailr->isHTML(true);
                if(!$mailr->send()) {
                    echo 'Message could not be sent.';
          
                    echo 'Mailer Error: ' . $mailr->ErrorInfo;
                } else {
                    echo 'Message has been sent';
                    redirect('MainController');
                }   
              
                }
                
        }

        
            public function message(){
                 $this->load->model('Loginmodel');
                $data['contact']  = $this->Loginmodel->getContact();
                $id = $_SESSION['userid'];
                
                $this->load->model('Inquery_model');
                
                 $inqdata =   $this->Inquery_model->alldata($id);
              
                $data['inqdata'] = $inqdata;
                    
                
                $this->load->view('message',$data);
                
            }
    }
 ?>