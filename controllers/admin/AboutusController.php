<?php 
class AboutusController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Reviewmodel');
        date_default_timezone_set('Asia/Kolkata');

    }

    public function index(){

        $data['about'] = $this->Reviewmodel->getAboutus();
        $this->load->view('admin/about',$data);

    }
    
    public function saveData(){
        $ediotes = $_POST['editor1'];
        $remve = '">';
        
        

        $date =  date('Y-m-d H:i:s');
        $title = $this->input->post('title');
        $editor1 = $this->input->post('editor1');
        $formArray['title'] = $title;
        $formArray['editor'] = $editor1;
        $formArray['updated_at'] = $date;


        $this->db->where('id','1');
        $this->db->update('aboutus',$formArray);
        $this->session->set_flashdata('success','About us Content Updated Succesfully');
        redirect('admin/AboutusController');



    }
    
}



?>