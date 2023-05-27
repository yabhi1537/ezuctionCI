<?php 


class LoginController extends CI_Controller
{
	public function __construct() {
		
		parent::__construct();
		$this->load->model('Common_model');
		$this->load->model('Loginmodel');

		
	}

	
	public function index(){
		$data['contact']  = $this->Loginmodel->getContact();

		$this->load->view('login',$data);
	}

	public function process_login(){

		


		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$checklogin = $this->Loginmodel->getTeacherlogin($email,$password);
		
		if(!empty($checklogin)){


			if($checklogin[0]['status']=='0'){

				$this->session->set_flashdata("error",'Your profile is not approved please contact admin');

			    redirect('login');


			}else{


						$userid =  $checklogin[0]['id'];
						$uechid = $this->Loginmodel->getTeacherid($userid);
						if($uechid[0]['teacher_id']==""){
							date_default_timezone_set("Asia/Calcutta");
							$newdate = date('y');
							$str_result = '0123'; 
							$teacherid = "EK".$newdate."-".substr(str_shuffle($str_result), 0, 4); 

							$formArray['teacher_id'] = $teacherid;
							$this->db->where('id',$userid);
							$this->db->update('teachers',$formArray);

						}
						$this->session->set_userdata('userid',$userid);
						redirect('home');
			}



		}else{


			
			$this->session->set_flashdata("error",'Wrong Username & Password');
			redirect('login');

			
		}

	    // 		if($this->input->post() == true){
		    
		// 	$clause =  array('email' => $this->input->post('email'), 'password' => $this->input->post('password'));

		// 	$check = $this->Common_model->getData('teachers',$clause);


		// 	$userid =  $check[0]->id;


		// 	if(!empty($check)){ 
		// 		$this->session->set_userdata('id',$userid);
    
		// 	    redirect('home');
		// 	}else{
		// 		$this->session->set_flashdata("error",'Wrong Username & Password');
		// 		redirect('login');
		// 	}
			
		// }


	
		// $this->load->view('index');
	    
	}


	public function logout()
		{
			$this->session->sess_destroy();
			redirect('login');
		}
}

?>