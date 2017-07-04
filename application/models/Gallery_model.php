<?php

class Gallery_model extends CI_Model{

    public function getAll(){
		$view=$this->db->get('gallery');
		return $view->result();
	}

    public function getById($id){
		$this->db->from('gallery');
		$this->db->where('id',$id);
		$getById = $this->db->get();

		if($getById->num_rows() == 1){
			return $getById->result();
		}else{
			return false;
		}
	}

    public function insert($photo){
        $data = array(
            'title' => $this->input->post('title'),
            'image' => $photo
        );

        $insert = $this->db->insert('gallery',$data);
    }

    public function update($id,$photo){
		$object = array(
            'title' => $this->input->post('title'),
			'image' => $photo
		);
		$this->db->where('id',$id);
		$this->db->update('gallery',$object);
	}

}