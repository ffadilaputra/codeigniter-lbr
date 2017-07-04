<?php 

class User extends CI_Model
{

	public function login($username,$password)
	{
		$this->db->select('id','username','password');
		$this->db->from('tb_user');
		$this->db->where('username',$username);
		$this->db->where('password',md5($password));

		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return $query->result();
		}else{
			return false;
		}

	}

	public function register()
	{
		$p = md5($this->input->post('username'));

		$object = array(
			'username' => $this->input->post('username'),
			'password' => $p,
		);

		$this->db->insert('tb_user',$object);

	}
	
}


?>