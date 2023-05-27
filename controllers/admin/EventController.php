<?php 
class EventController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/EventModel');

    }

    function index(){

        $data['events'] = $this->EventModel->getBlogs();
        $this->load->view('admin/eventview',$data);

    }

    function add(){
        $this->load->view('admin/eventadd');
    }

    function saveData(){
       // print_r($_POST);die();
       $config['upload_path']          = 'upload/blog/';
       $config['allowed_types']        = 'gif|jpg|png|jpeg|png';
       // $config['max_size']             = '';
       $this->load->library('upload', $config);

       if ( ! $this->upload->do_upload('userfile'))
       {
            $error = array('error' => $this->upload->display_errors());
            $errore = $error['error'];
            $this->session->set_flashdata('error',$errore);

           // print_r($errore);die();
            redirect('admin/events/add');
       }
       else
       {
            $image = array('upload_data' => $this->upload->data());
            $imagename = $image['upload_data']['file_name'];

            $data['title'] = $this->input->post('title');
            $data['dates'] = $this->input->post('date');
            $data['time'] = $this->input->post('time');
            $data['price'] = $this->input->post('price');
            $data['location'] = $this->input->post('location');
            $data['description'] = $this->input->post('description');
            $data['links'] = $this->input->post('linkadd');
            $data['images'] = $imagename;

            $result =$this->db->insert('events',$data);
            if($result){
                $this->session->set_flashdata('msg',"Blog insert successfully...!");
                redirect('admin/events');
            }else{
                $this->session->set_flashdata('error',"Blog insert error");
                redirect('admin/events/add');
            }
       }

    }

    public function delBlog(){
        $ratingid = $this->uri->segment(4);

        $this->db->where('id',$ratingid);
        $this->db->delete('events');

        $this->session->set_flashdata('success','event Deleted Succesfully');

        redirect('admin/events');


    }

    public function edit(){

        $blogid = $this->uri->segment(4);

        $this->db->where('id',$blogid);
        $blogs = $this->db->get('events');
        $data['eventData'] =$blogs->result_array(); 
        // print_r($data['blogsData']);die();
        $this->load->view('admin/eventedit',$data);
    }

    public function updateEvent(){
        $blogid = $this->uri->segment(4);
        // print_r($_POST);die();
        $config['upload_path']          = 'upload/blog/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|png';
        // $config['max_size']             = '';
        $this->load->library('upload', $config);
        if($_FILES['userfile']['name'] != ""){

            if (! $this->upload->do_upload('userfile'))
            {
                $error = array('error' => $this->upload->display_errors());
                $errore = $error['error'];
                $this->session->set_flashdata('error',$errore);
                //  print_r($errore);die();
                redirect('admin/event/edit/'.$blogid);
            }
            else
            {
                $image = array('upload_data' => $this->upload->data());
                $imagename = $image['upload_data']['file_name'];
            }
        }else{
            $imagename = $this->input->post('hdnImgName');
        }
        
        $data['title'] = $this->input->post('title');
        $data['dates'] = $this->input->post('date');
        $data['time'] = $this->input->post('time');
        $data['price'] = $this->input->post('price');
        $data['location'] = $this->input->post('location');
        $data['description'] = $this->input->post('description');
        $data['links'] = $this->input->post('linkadd');
        $data['images'] = $imagename;
        
        $this->db->where('id',$blogid);
        $result =  $this->db->update('events',$data);
           
            if($result){
                $this->session->set_flashdata('msg',"Event update successfully...!");
                redirect('admin/events');
            }else{
                $this->session->set_flashdata('error',"Event update error");
                redirect('admin/event/edit/'.$blogid);
            }

    }
    
}



?>