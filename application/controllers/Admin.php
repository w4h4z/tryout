<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('role') != "admin"){
			redirect('auth');
		}	
		$m_test = $this->load->model('m_test');
		$m_questions = $this->load->model('m_questions');


	}

	public function index()
	{	
		$data['title'] = 'Admin Dashboard';
		$data['email'] = $this->session->userdata('email');

		$data['jumlah_test'] = $this->m_test->load_test()->num_rows();

		$this->load->view('admin/layouts/master.php',$data); 
		$this->load->view('admin/v_dashboard',$data);
	}


	public function test_page()
	{	
		$data['title'] = 'Test Page';
		$data['email'] = $this->session->userdata('email');
		
		$data['test'] = $this->m_test->load_test()->result();
		$data['jumlah_test'] = $this->m_test->load_test()->num_rows();

		$this->load->view('admin/layouts/master.php',$data); 
		$this->load->view('admin/v_test',$data);
	}

	public function edit_test_page($id_test)
	{	
		$data['title'] = 'Edit Test Page';
		$data['email'] = $this->session->userdata('email');

		$where = array('id_test'=>$id_test);
		$data['test'] = $this->m_test->checking($where)->row_array();
		$data['jumlah_test'] = $this->m_test->load_test()->num_rows();
		
		$where_token = array('token'=>$data['test']['token']);
		$data['questions'] = $this->m_questions->checking($where_token)->result();

		// var_dump($data['questions']) or die;

		$this->load->view('admin/layouts/master.php',$data); 
		$this->load->view('admin/v_edit_test',$data);
	}

	public function questions_page($id_test)
	{	
		$data['title'] = 'Questions Page';
		$data['email'] = $this->session->userdata('email');
		
		$data['test'] = $this->m_test->load_test()->result();
		$data['jumlah_test'] = $this->m_test->load_test()->num_rows();

		$where = array('id_test'=>$id_test);
		$data['test'] = $this->m_test->checking($where)->row_array();

		$this->load->view('admin/layouts/master.php',$data); 
		$this->load->view('admin/v_questions',$data);
	}




}
