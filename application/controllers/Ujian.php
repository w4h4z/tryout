<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ujian extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		$this->load->view('v_test');
	}

}

/* End of file Ujian.php */
/* Location: ./application/controllers/Ujian.php */