<?php

class Blog extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Blog_model');
        $this->load->library('form_validation');

        // if ($this->session->userdata('logged_in')) {
        //     $session_data = $this->session->userdata('logged_in');
        //     $data['username'] = $session_data['username'];
        // }else{
        //     redirect('login','refresh');
        // }
    }

    public function viewAll(){
        $data['list'] = $this->Blog_model->getAll();
        $this->load->view('adm_blog',$data);
    }

    public function index(){
        $data['blog'] = $this->Blog_model->getAll();
        $this->load->view('blog_tabela',$data);
    }

    public function store(){
        $this->load->view('partials/header');
        $this->form_validation->set_rules('title','title','required');
        $this->form_validation->set_rules('content','content','required');
        $this->form_validation->set_rules('date','date','required');
        $this->form_validation->set_rules('posted_by','posted_by','required');

        if($this->form_validation->run() == FALSE){
            $this->load->model('Category_model');
            $data['category'] = $this->Category_model->getAll();
            $this->load->view('post',$data);
        }else{
            $this->Blog_model->insert();
            redirect('blog');
        }
        $this->load->view('partials/footer');
    }

    public function delete($id){
        $id = array('id' => $id);
        $this->Blog_model->delete($id);
        redirect('blog');
    }

    public function edit($id){
        $id = array('id' => $id);
        $data['emp'] = $this->Blog_model->getById($id);
        $this->load->view('edit_post',$data);
    }

    public function update(){
        $id = $this->input->post('id');
        $this->Blog_model->update($id);
        redirect('blog');
    }

    public function details($id){
        $id = array('id' => $id);
        $data['emp'] = $this->Blog_model->getById($id);
        $this->load->view('blog_detail',$data);
    }

    public function datatable_ajax(){
        $this->load->view('datatable_ajax');
    }

    public function data_server(){
        $this->load->library('Datatables');
        $this->datatables->select('id,title,content,date,posted_by')->from('tb_blog');
        echo $this->datatables->generate();
    }


}