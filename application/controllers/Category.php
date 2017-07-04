<?php 

class Category extends CI_Controller{
	
	public function index(){

		$this->load->model('Category_model');

		$data['list'] = $this->Category_model->getAll();

		$this->load->view('category',$data);
	}

	public function add(){

		$this->load->model('Category_model');

		$this->form_validation->set_rules('c_category','c_category','required');
        
        if($this->form_validation->run() == FALSE){
        	$data['list'] = $this->Category_model->getAll();
            $this->load->view('category',$data);
            var_dump($_POST);
        }else{
            $this->Category_model->insert();
            redirect('category');
        }
	}
	
}