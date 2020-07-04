<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
class M_users extends CI_Model{

	public function load_privillage(){
		$this->db->select('*');
		$this->db->join('tbl_role','tbl_role.id_role = tbl_users.id_role'); //join tbl_role
		$this->db->order_by('id_user','asc');
		return $this->db->get('tbl_user');
	}

	public function checking($data){
		$this->db->join('tbl_role','tbl_role.id_role = tbl_users.id_role'); // join tbl_role
		return $this->db->get_where('tbl_users',$data);
	}

	public function add($data){
		return $this->db->insert('tbl_users',$data);
	}

	public function delete($where){
		return $this->db->delete('tbl_users',$where);
	}

	public function update($where,$data){
		$this->db->where($where);	
		return $this->db->update('tbl_users',$data);
	}

}
?>