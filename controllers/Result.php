

<?php 

    class Result extends CI_Controller
{

            public function index(){
            $techid = $_SESSION['userid'];  
            if($techid == ""){
                redirect('login');
            }
            $this->load->model('Result_model');
            
           $results =  $this->Result_model->showResults($techid);
           
           $data['results'] = $results;
           $this->load->model('Loginmodel');
           $data['contact']  = $this->Loginmodel->getContact();
            $this->load->view('results',$data);
            }
            
            
            
        public function saveimage(){
            $techid = $_SESSION['userid'];
            
            $this->load->model('Result_model');
            
            $config['upload_path']='upload/results/';
			$config['allowed_types']='gif|jpg|png';
			$config['encrypt_name'] = 'true';

			$this->load->library('upload',$config);
			
					
			if (!$this->upload->do_upload('image')){

			$this->upload->display_errors();
			redirect('Result');

			}else{

			$data = $this->upload->data();
		
			
			$img_name = $data['file_name'];	 
			
			
            $formArray = array();
            $formArray['image'] = $img_name;
            $formArray['tech_id'] = $techid;
            
            $this->Result_model->saveRecord($formArray);
            
            $this->session->set_flashdata('success','Record Added Succesfully!');
            
			redirect('Result');
            
			}
        }
        
        
        
        function delete($userId){
        
		$this->load->model('Result_model');
		$result = $this->Result_model->getUser($userId);
		if(empty($result)){

			$this->session->set_flashdata('failure','Record not found i database!');
			redirect('Result');

		}

		$this->Result_model->deleteUser($userId);
		$this->session->set_flashdata('success','Record Deleted Succesfully!');
		redirect('Result');
	}
            
            

}

?>