<?php 


class Category_model extends CI_Model {

	public function insert(){

		$data = array(
			'category_name' => $this->input->post('c_category')
		);

		$insert = $this->db->insert('tb_category',$data);

	}

	public function getAll(){
        $read = $this->db->get('tb_category');
        return $read->result();
    }	

}