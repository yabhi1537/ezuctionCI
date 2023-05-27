<?php 
class BlogController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/BlogModel');

    }

    function index(){

        $data['blogs'] = $this->BlogModel->getBlogs();
        $this->load->view('admin/blogview',$data);

    }

    function add(){
        $this->load->view('admin/blogadd');
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
            redirect('admin/blogs/add');
       }
       else
       {
            $image = array('upload_data' => $this->upload->data());
            $imagename = $image['upload_data']['file_name'];

            $data['title'] = $this->input->post('title');
            $data['heading'] = $this->input->post('heading');
            $data['description'] = $this->input->post('editor1');
            $data['meta_title'] = $this->input->post('metaTitle');
            $data['meta_description'] = $this->input->post('metaDesc');
            $data['images'] = $imagename;

            $result =$this->db->insert('blogs',$data);
            if($result){
                $this->session->set_flashdata('msg',"Blog insert successfully...!");
                redirect('admin/blogs');
            }else{
                $this->session->set_flashdata('error',"Blog insert error");
                redirect('admin/blogs/add');
            }
       }

    }

    public function delBlog(){
        $ratingid = $this->uri->segment(4);

        $this->db->where('id',$ratingid);
        $this->db->delete('blogs');

        $this->session->set_flashdata('success','blog Deleted Succesfully');

        redirect('admin/blogs');


    }

    public function edit(){

        $blogid = $this->uri->segment(4);

        $this->db->where('id',$blogid);
        $blogs = $this->db->get('blogs');
        $data['blogsData'] =$blogs->result_array(); 
        // print_r($data['blogsData']);die();
        $this->load->view('admin/blogedit',$data);
    }

    public function updateBlog(){
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
                redirect('admin/blog/edit/'.$blogid);
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
        $data['heading'] = $this->input->post('heading');
        $data['description'] = $this->input->post('editor1');
        $data['meta_title'] = $this->input->post('metaTitle');
        $data['meta_description'] = $this->input->post('metaDesc');
        $data['images'] = $imagename;
        
        $this->db->where('id',$blogid);
        $result =  $this->db->update('blogs',$data);
           
            if($result){
                $this->session->set_flashdata('msg',"Blog update successfully...!");
                redirect('admin/blogs');
            }else{
                $this->session->set_flashdata('error',"Blog update error");
                redirect('admin/blog/edit/'.$blogid);
            }

    }
    
}



?>