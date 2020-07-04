<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		$m_users = $this->load->model('m_users');
	}

	public function index(){
		$this->load->view('v_login');
	}

	// Auth admin atau user
	public function login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$data = array('email' => $email, 'password' => $password);

		$jumlah_user = $this->m_users->checking($data)->num_rows();
		$check_user = $this->m_users->checking($data)->row_array();

		if ($jumlah_user > 0) {

			$data_session = array(
				'id_user' => $check_user['id_user'],
				'role' => $check_user['role'],
				'email' => $check_user['email'],
				'status' => "login" 
			);
			
			$this->session->set_userdata($data_session);

			if($check_user['id_role'] == 1){ //jika role admin
				redirect('admin');
				var_dump($data_session);
			}else if($check_user['id_role'] == 2){ //jika role user
			
			}

		}else{
			echo "password salah";
		}
	}


	public function logout(){
		$this->session->sess_destroy();
		redirect('/');
	}
}
?>