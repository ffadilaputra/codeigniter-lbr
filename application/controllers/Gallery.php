<?php

class Gallery extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('Gallery_model');
	}

    public function index(){
         $data['get'] = $this->Gallery_model->getAll();
         $this->load->view('gallery', $data);   
    }

    public function add(){
        $this->load->view('add_gallery');
    }

    public function store(){
        $config['upload_path'] = 'assets/upload';
		$config['allowed_types'] = 'gif|jpg|png';
		
		$this->load->library('upload', $config);

        if(!$this->upload->do_upload('image')){

        }else{
            $image_data = $this->upload->data();

            $config['image_library'] = 'gd2';
  			$config['source_image'] = $image_data['full_path']; //get original image
  			$config['maintain_ratio'] = TRUE;
 			$config['width']         = 300;
			$config['height']       = 300;

            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            
			$data = array('upload_data' => $this->upload->data());
			$photo = $this->upload->data('file_name');	
			$this->Gallery_model->insert($photo);
			$this->session->set_flashdata('msg_success', 'Data berhasil disimpan');
			redirect('gallery');

        }

    }

    public function edit($id){
		$data['get'] = $this->Gallery_model->getById($id);
		$this->load->view('e_gallery',$data);
	}

    public function update(){
        $id = $this->input->post('id');
        $config['upload_path'] = 'assets/upload';
		$config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '1000000000';

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('image')){

        }else{
            $data = array('upload_data' => $this->upload->data());
            $path = "assets/upload/";
            $get_record = $this->Gallery_model->getById($id);
            $file = $get_record[0]->image;
            unlink($path . $file);
            $image = $this->upload->data('file_name');

            $this->Gallery_model->update($id,$image);
            $this->session->set_flashdata('msg_success', 'Data data berhasil diubah');
            redirect('gallery');
        }
    }

}