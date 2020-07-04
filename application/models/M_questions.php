<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
class M_questions extends CI_Model{

	public function load_questions(){
		$this->db->select('*');
		// $this->db->join('tbl_paket','tbl_paket.id_paket = tbl_questions.id_paket'); //join tbl_paket
		// $this->db`->join('tbl_questions','tbl_questions.id_question = tbl_questions.id_question'); //join tbl_questions
		// $this->db->join('tbl_tipe_questions','tbl_tipe_questions.id_tipe_question = tbl_questions.id_question'); //join tbl_tipe_questions
		$this->db->order_by('created_at','asc');
		return $this->db->get('tbl_questions');
	}

	public function checking($data){
		$this->db->order_by('created_at','asc');
		return $this->db->get_where('tbl_questions',$data);
	}

	public function add($data){
		return $this->db->insert('tbl_questions',$data);
	}

	public function delete($where){
		return $this->db->delete('tbl_questions',$where);
	}

	public function update($where,$data){
		$this->db->where($where);	
		return $this->db->update('tbl_questions',$data);
	}

}
?>