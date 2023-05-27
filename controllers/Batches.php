<?php 


class Batches extends CI_Controller
  {
	public function index(){
		$this->load->model('Loginmodel');
		$data['contact']  = $this->Loginmodel->getContact();
	    $techid = $_SESSION['userid'];
	    $this->load->model('Batch_model');
	    
	    $batchs = $this->Batch_model->all($techid); 
		//  print_r(  $batchs );
	    $data['batchs'] = $batchs;
	   
	    $this->load->view('batches',$data);
	}
	
	public function addbatch(){
		$this->load->model('Loginmodel');
        $data['contact']  = $this->Loginmodel->getContact();
	    $this->load->view('add-batches',$data);
	}
	
	public function storedata(){
	        $this->load->model('Batch_model');
	         date_default_timezone_set("Asia/Calcutta");
            $date = date('Y-m-d h:i:s', time());
        
        	$this->form_validation->set_rules('totime','Time','trim|required');
    	    $this->form_validation->set_rules('fromtime','Time','trim|required');
    	    $this->form_validation->set_rules('class','Class','trim|required');
    	    $this->form_validation->set_rules('totalseat','Total Seats','trim|required');
    	    $this->form_validation->set_rules('availableseat','Available Seats','trim|required');
    	    
    	     if($this->form_validation->run()==false){
            $this->load->view('add-batches');
   
	    }else{
	            $tech_id = $_SESSION['id'];
	           // print_r($_SESSION['id']);die();
	        
	            $formArray = array();
	            $formArray['totime'] = $this->input->post('totime');
	            $formArray['fromtime'] = $this->input->post('fromtime');
	            $formArray['totalseats'] = $this->input->post('totalseat');
	            $formArray['availableseat'] = $this->input->post('availableseat');
	            $formArray['classes'] = $this->input->post('class');
	            $formArray['teach_id'] = $tech_id;
	            $formArray['message'] = $this->input->post('message');
	            $formArray['created_at'] = $date;
	            
	           $this->Batch_model->insertdata($formArray);
               $this->session->set_flashdata('success','Batch added Successfully!');
               redirect('Batches');
	        
	    }
	    
	}
	
	
		function delete($userId){
           
		$this->load->model('Batch_model');
		$user = $this->Batch_model->getUser($userId);
		if(empty($user)){

			$this->session->set_flashdata('failure','Record not found i database!');
			redirect('Batches');

		}

		$this->Batch_model->deleteUser($userId);
		$this->session->set_flashdata('success','Record Deleted Succesfully!');
		redirect('Batches');
	}
	
	
	
		function edit($userId){
		   
		$this->load->model('Batch_model');
		$batch = $this->Batch_model->getUser($userId);
		$data = array();
		$data['batch'] = $batch;
	
    	$this->form_validation->set_rules('totime','Time','trim|required');
	    $this->form_validation->set_rules('fromtime','Time','trim|required');
	    $this->form_validation->set_rules('totalseat','Total Seats','trim|required');
	    $this->form_validation->set_rules('availableseat','Available Seats','trim|required');
	    $this->form_validation->set_rules('class','Class','trim|required');
		if($this->form_validation->run()==false){
			$this->load->model('Loginmodel');
			$data['contact']  = $this->Loginmodel->getContact();
		$this->load->view('edit-batches',$data);

		}else{

		 $formArray = array();
	            $formArray['totime'] = $this->input->post('totime');
	            $formArray['fromtime'] = $this->input->post('fromtime');
	            $formArray['totalseats'] = $this->input->post('totalseat');
	            $formArray['availableseat'] = $this->input->post('availableseat');
	            $formArray['classes'] = $this->input->post('class');
	            $formArray['message'] = $this->input->post('message');
			$this->Batch_model->updateUser($userId,$formArray);
			$this->session->set_flashdata('success','Record Updated Succesfully!');
			redirect('Batches');

		}




	}

	
	

}



?>