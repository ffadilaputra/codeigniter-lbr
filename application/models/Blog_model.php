<?php 

class Blog_model extends CI_Model {

    public function getAll(){
        
        $this->db->select('*');
        $this->db->from('tb_blog');
        $this->db->join('tb_category','tb_category.id = tb_blog.fk_category','left');
        $query = $this->db->get();

        return $query->result();
    }

    public function getById($id){
        $getbyId = $this->db->get_where('tb_blog',$id);
        return $getbyId->result();
    }

    public function insert(){
        
        $data = array(
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'date' => $this->input->post('date'),
            'fk_category' => $this->input->post('fk_category'),
            'posted_by' => $this->input->post('posted_by')
        );

        $insert = $this->db->insert('tb_blog',$data);
    }

    public function delete($id){ 
        $delete = $this->db->delete('tb_blog',$id);
    }

    public function update($id){
         $data = array(
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'date' => $this->input->post('date'),
            'posted_by' => $this->input->post('posted_by')
        );

        $this->db->where('id',$id);
        $this->db->update('tb_blog',$data);
    }

}