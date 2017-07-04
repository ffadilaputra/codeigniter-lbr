<?php 

class Login extends CI_Controller
{

	public function index()
	{
		$this->load->view('login');
	}
	
	public function register()
	{
		
		$this->load->model('User');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('register');
		}else{
			$this->User->register();
			redirect('Login','refresh');
		}

	}

	public function cekLogin(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required|callback_cekDb');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login');
			//var_dump($_POST);
		}else{
			redirect('Blog','refresh');
		}

	}

	public function cekDb($password)
	{
		$this->load->model('User');

		$username = $this->input->post('username');
		$result = $this->User->login($username,$password);

		if ($result) {
			foreach ($result as $row) {
				$sess = array(
					'id' => $row->id,
					'username' => $row->username
				 );
				$this->session->set_userdata('logged_in',$sess);
			}
			return true;
		}
		else{
			$this->form_validation->set_message('cekDb','Login Gagal');
			return false;
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect('Login','refresh');
	}


}

?>