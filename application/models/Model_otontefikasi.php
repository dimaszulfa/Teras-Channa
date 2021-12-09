<?php
defined ('BASEPATH') OR exit('No direct access script is allowed');

class Model_otontefikasi extends CI_Model {
	
	public function getuser($username){
		$this->db->where('username', $username);
		return $this->db->get('tbl_user')->row();
	}
	
	public function changepass(){
		$this->db->set('password', password_hash($this->input->post('newpass'),PASSWORD_DEFAULT));
		$this->db->where('nama',$this->session->userdata('username'));
		return $this->db->update('users');
	}

	public function register($data, $table){
		$this->db->insert($table, $data);
	}
}
	
?>