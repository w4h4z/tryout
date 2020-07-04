<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$m_test = $this->load->model('m_test');
	}

	public function index(){	

	}

	public function new_test(){
		$test_name = $this->input->post('test_name');
		$token = $this->input->post('token');
		$data = array(
					'test_name'=>$test_name,
					'token'=>$token,
				);


		if($this->m_test->add($data)){
			$insert_id = $this->db->insert_id();
			$this->flasher->setFlash('Menambahkan test berhasil','','success','');
			redirect('admin/edit_test_page/'.$insert_id);			

		}else{
			$this->flasher->setFlash('Menambahkan test gagal, coba periksa jaringan anda','','danger','');
			redirect('admin/test_page');

		}
	}

	public function delete_test($id_test){
		$where = array('id_test'=>$id_test);

		if ($this->m_test->delete($where)) {
			$this->flasher->setFlash('Menghapus test berhasil','','success','');
			redirect('admin/test_page/');			

		}else{
			$this->flasher->setFlash('Menghapus test gagal, coba periksa jaringan anda','','danger','');
			redirect('admin/edit_test_page/'.$id_test);
		
		}
	}

	


}

/* End of file Ujian.php */
/* Location: ./application/controllers/Ujian.php */