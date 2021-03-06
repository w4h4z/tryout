<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Questions extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$m_test = $this->load->model('m_test');
		$m_questions = $this->load->model('m_questions');
	}

	public function index(){	

	}

	public function add_question($id_test){
		$question = $this->input->post('question');
		$answer_a = $this->input->post('answer_a');
		$answer_b = $this->input->post('answer_b');
		$answer_c = $this->input->post('answer_c');
		$answer_d = $this->input->post('answer_d');
		$answer_e = $this->input->post('answer_e');
		$tipe_question = $this->input->post('tipe_question');
		$kunci_jawaban = $this->input->post('kunci_jawaban');

		$where = array('id_test'=>$id_test);
		$check = $this->m_test->checking($where)->row_array();

		$data = array(
			'question' => $question,
			'pilihan_a' => $answer_a,
			'pilihan_b' => $answer_b,
			'pilihan_c' => $answer_c,
			'pilihan_d' => $answer_d,
			'pilihan_e' => $answer_e,
			'id_tipe_question' => $tipe_question,
			'kunci_jawaban' => $kunci_jawaban,
			'token' => $check['token'],
		);

		if($this->m_questions->add($data)){
			$this->flasher->setFlash('Menambahkan question berhasil','','success','');			
			redirect('admin/edit_test_page/'.$id_test);
		}else{
			$this->flasher->setFlash('Menambahkan question gagal, coba periksa jaringan anda','','danger','');
			redirect('admin/question_page/'.$id_test);
		}
	}


	public function update_question($id_question){
		$id_test = $this->input->post('id_test');
		$question = $this->input->post('question');
		$answer_a = $this->input->post('answer_a');
		$answer_b = $this->input->post('answer_b');
		$answer_c = $this->input->post('answer_c');
		$answer_d = $this->input->post('answer_d');
		$answer_e = $this->input->post('answer_e');
		$tipe_question = $this->input->post('tipe_question');
		$kunci_jawaban = $this->input->post('kunci_jawaban');

		$where = array('id_question'=>$id_question);

		$data = array(
			'question' => $question,
			'pilihan_a' => $answer_a,
			'pilihan_b' => $answer_b,
			'pilihan_c' => $answer_c,
			'pilihan_d' => $answer_d,
			'pilihan_e' => $answer_e,
			'id_tipe_question' => $tipe_question,
			'kunci_jawaban' => $kunci_jawaban,
		);

		if($this->m_questions->update($where,$data)){
			$this->flasher->setFlash('Mengupdate question berhasil','','success','');			
			redirect('admin/edit_test_page/'.$id_test);
		}else{
			$this->flasher->setFlash('Mengupdate question gagal, coba periksa jaringan anda','','danger','');
			redirect('admin/question_page/'.$id_test);
		}
	}

	public function delete_question($id_question){
		$where = array('id_question'=>$id_question);
		$questions = $this->m_questions->checking($where)->row_array();
		$where_token = array('token'=>$questions['token']);
		$test = $this->m_test->checking($where_token)->row_array();

		if ($this->m_questions->delete($where)) {
			$this->flasher->setFlash('Menghapus question berhasil','','success','');
			redirect('admin/edit_test_page/'.$test['id_test']);			
		}else{
			$this->flasher->setFlash('Menghapus question gagal, coba periksa jaringan anda','','danger','');
			redirect('admin/question_page/'.$test['id_test']);
		}
		
	}


}