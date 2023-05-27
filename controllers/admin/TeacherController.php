<?php 
class TeacherController extends CI_Controller
{
        function __construct()
        {
            parent::__construct();
            $this->load->model('admin/Teachermodel');
        }
    
        public function index(){

                $data['teachers'] = $this->Teachermodel->getTeachersdata();
                $this->load->view('admin/teachers',$data);

        }

        public function delTeachers(){
                $techid = $this->uri->segment(4);
                $this->db->where('id',$techid);
                $this->db->delete('teachers');
                $this->session->set_flashdata('success','Teacher Deleted Succesfully');
                redirect('admin/TeacherController');

        }

        public function teacherStatus(){


                $id = $this->input->post('id');
                $status = $this->input->post('status');

                $this->Teachermodel->getUpdateStaus($id,$status);

        }

        public function paidStatus(){

                $id = $this->input->post('id');
                $status = $this->input->post('status');
                $formArray['paidstatus'] = $status;
                $this->db->where('id',$id);
                $this->db->update('teachers',$formArray);
        }

        public function addteacher(){

                $this->load->view('admin/addteacher');

        }
        public function saveData(){
      
               

        date_default_timezone_set("Asia/Calcutta");  
        $date = date('Y-m-d h:i:s', time());
        $newdate = date('y');
        $str_result = '0123'; 
        $teacherid = "EK".$newdate."-".substr(str_shuffle($str_result), 0, 4);  
            
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
             
             if(empty($_FILES['image']['name'])){ 
            $formArray['teacher_id'] = $teacherid; 
            $formArray['name'] = $this->input->post('names'); 
            $formArray['email'] = $this->input->post('email'); 
            $formArray['gender'] = $this->input->post('gender'); 
            $formArray['phone'] = $this->input->post('mobile'); 
            $formArray['intro'] = $this->input->post('intro'); 
            $formArray['highest_qualification'] = $this->input->post('hqualification'); 
            $formArray['otherhighest_qualification'] = $this->input->post('otherhigh'); 
            $formArray['batch'] = $this->input->post('batch'); 
            $formArray['typeinstitute'] = $this->input->post('institute'); 
            $formArray['total_techer_exp'] = $this->input->post('teacherexp'); 
            $formArray['class'] = $classess; 
            $formArray['board'] = $boardss; 
            $formArray['subject'] = $subjectsss; 
            $formArray['address'] = $this->input->post('coaching'); 
            $formArray['area'] = $this->input->post('area'); 
            $formArray['mode'] = $this->input->post('mode'); 
            $formArray['pincode'] = $this->input->post('pincode'); 
            $formArray['distrcit'] = $this->input->post('district'); 
            $formArray['state'] = $this->input->post('state'); 
            $formArray['password'] = $this->input->post('password'); 
            $formArray['landmark'] = $this->input->post('landmark'); 
            $formArray['referby'] = $this->input->post('refer'); 
            $formArray['created_at'] = $date;
        }else{
                $config['upload_path']          = 'upload/';
                $config['allowed_types']        = 'gif|jpg|png';
               

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('image'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        $errore = $error['error'];
                        $this->session->set_flashdata('failure',$errore);
                        $this->load->view('admin/addteacher');
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        $imagename = $data['upload_data']['file_name'];

                        $formArray['teacher_id'] = $teacherid; 
                        $formArray['name'] = $this->input->post('names'); 
                        $formArray['email'] = $this->input->post('email'); 
                        $formArray['gender'] = $this->input->post('gender'); 
                        $formArray['phone'] = $this->input->post('mobile'); 
                        $formArray['intro'] = $this->input->post('intro'); 
                        $formArray['highest_qualification'] = $this->input->post('hqualification'); 
                        $formArray['otherhighest_qualification'] = $this->input->post('otherhigh'); 
                        $formArray['batch'] = $this->input->post('batch'); 
                        $formArray['typeinstitute'] = $this->input->post('institute'); 
                        $formArray['total_techer_exp'] = $this->input->post('teacherexp'); 
                        $formArray['class'] = $classess; 
                        $formArray['board'] = $boardss; 
                        $formArray['subject'] = $subjectsss; 
                        $formArray['address'] = $this->input->post('coaching'); 
                        $formArray['area'] = $this->input->post('area'); 
                        $formArray['mode'] = $this->input->post('mode'); 
                        $formArray['pincode'] = $this->input->post('pincode'); 
                        $formArray['distrcit'] = $this->input->post('district'); 
                        $formArray['state'] = $this->input->post('state'); 
                        $formArray['password'] = $this->input->post('password'); 
                        $formArray['landmark'] = $this->input->post('landmark'); 
                        $formArray['referby'] = $this->input->post('refer'); 
                        $formArray['image'] = $imagename; 
                        $formArray['created_at'] = $date;
                }



        } 
            $this->db->insert('teachers',$formArray);
            $this->session->set_flashdata('success','Teacher added succesfully You id is '.$teacherid.'');
            redirect('admin/TeacherController/addteacher');
            
            
        }

        public function checkEmail(){
              
                $email = $this->input->post('email');
                $emailis = $this->Teachermodel->getEmailid($email);
               
                if($emailis > 0){
                  echo "failed";
                }else{
                  echo "success";
                }

        }

        public function editTeacher(){
                $techid = $this->uri->segment(4);
               
                $this->db->where('id',$techid);
                $techrs = $this->db->get('teachers');
                $data['tecahers'] = $techrs->result_array();


                $this->load->view('admin/editteacher',$data);
        }

        public function techUpdate(){

                $techid = $this->uri->segment(4);



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
                
                if(empty($_FILES['image']['name'])){ 

        //        $formArray['teacher_id'] = $teacherid; 
               $formArray['name'] = $this->input->post('names'); 
               $formArray['email'] = $this->input->post('email'); 
               $formArray['gender'] = $this->input->post('gender'); 
               $formArray['phone'] = $this->input->post('mobile'); 
               $formArray['intro'] = $this->input->post('intro'); 
               $formArray['highest_qualification'] = $this->input->post('hqualification'); 
               $formArray['otherhighest_qualification'] = $this->input->post('otherhigh'); 
               $formArray['batch'] = $this->input->post('batch'); 
               $formArray['typeinstitute'] = $this->input->post('institute'); 
               $formArray['total_techer_exp'] = $this->input->post('teacherexp'); 
               $formArray['class'] = $classess; 
               $formArray['board'] = $boardss; 
               $formArray['subject'] = $subjectsss; 
               $formArray['address'] = $this->input->post('coaching'); 
               $formArray['area'] = $this->input->post('area'); 
               $formArray['mode'] = $this->input->post('mode'); 
               $formArray['pincode'] = $this->input->post('pincode'); 
               $formArray['distrcit'] = $this->input->post('district'); 
               $formArray['state'] = $this->input->post('state'); 
               $formArray['password'] = $this->input->post('password'); 
               $formArray['landmark'] = $this->input->post('landmark'); 
               $formArray['referby'] = $this->input->post('refer'); 
        //        $formArray['created_at'] = $date;
           }else{

                if($_FILES['image']!=""){

                   $config['upload_path']          = 'upload/';
                   $config['allowed_types']        = 'gif|jpg|png';
                  
   
                   $this->load->library('upload', $config);
   
                   if ( ! $this->upload->do_upload('image'))
                   {
                           $error = array('error' => $this->upload->display_errors());
                           $errore = $error['error'];
                           $this->session->set_flashdata('failure',$errore);
                           $this->load->view('admin/editteacher');
                   }
                   else
                   {
                        
                           $data = array('upload_data' => $this->upload->data());
                           $imagename = $data['upload_data']['file_name'];
   
                   } }else{

                        $imagename = $this->input->post('hdnimage'); 

                       
                   }
                        
                        $formArray['name'] = $this->input->post('names'); 
                        $formArray['email'] = $this->input->post('email'); 
                        $formArray['gender'] = $this->input->post('gender'); 
                        $formArray['phone'] = $this->input->post('mobile'); 
                        $formArray['intro'] = $this->input->post('intro'); 
                        $formArray['highest_qualification'] = $this->input->post('hqualification'); 
                        $formArray['otherhighest_qualification'] = $this->input->post('otherhigh'); 
                        $formArray['batch'] = $this->input->post('batch'); 
                        $formArray['typeinstitute'] = $this->input->post('institute'); 
                        $formArray['total_techer_exp'] = $this->input->post('teacherexp'); 
                        $formArray['class'] = $classess; 
                        $formArray['board'] = $boardss; 
                        $formArray['subject'] = $subjectsss; 
                        $formArray['address'] = $this->input->post('coaching'); 
                        $formArray['area'] = $this->input->post('area'); 
                        $formArray['mode'] = $this->input->post('mode'); 
                        $formArray['pincode'] = $this->input->post('pincode'); 
                        $formArray['distrcit'] = $this->input->post('district'); 
                        $formArray['state'] = $this->input->post('state'); 
                        $formArray['password'] = $this->input->post('password'); 
                        $formArray['landmark'] = $this->input->post('landmark'); 
                        $formArray['referby'] = $this->input->post('refer'); 
                        $formArray['image'] = $imagename; 
   
   
           } 
                $this->db->where('id',$techid);
               $this->db->update('teachers',$formArray);
               $this->session->set_flashdata('success','Teacher Updated succesfully ');
               redirect('admin/TeacherController');



        }
}


?>