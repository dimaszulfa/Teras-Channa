<?php
defined ('BASEPATH') OR exit('No direct access script is allowed');

class Model_otontefikasi extends CI_Model {
	
	public function getuser($username){
		$this->db->where('username', $username);
		return $this->db->get('tbl_user')->row();
	}
	
	public function changedata($data, $username){
		$this->db->where('username',$username);
		$this->db->update('tbl_user', $data);
		$res = $this->db->affected_rows() > 0;
		if($res){
			return true;
		}
		else return false;
	}

	public function changepass($newpass, $key){
		$this->db->where('resetpass',$key);
		$data = array('password' => password_hash($newpass,PASSWORD_DEFAULT));
		$this->db->update('tbl_user', $data);
		$res = $this->db->affected_rows() > 0;
		if($res){
			return true;
		}
		else return false;
	}

	public function changepassnokey($newpass, $username){
		$this->db->where('username', $username);
		$data = array('password' => password_hash($newpass,PASSWORD_DEFAULT));
		$this->db->update('tbl_user', $data);
		$res = $this->db->affected_rows() > 0;
		if($res){
			return true;
		}
		else return false;
	}

	public function check_key($key){
		$this->db->where('resetpass',$key);
		$this->db->from('tbl_user');
		return $this->db->count_all_results();
	}

	public function register($data, $table){
		$this->db->insert($table, $data);
	}


	public function resetpass($username, $email, $reset_key){
		$multiClause = array('username' => $username, 'email' => $email);
		$data = array('resetpass'=>$reset_key);
		$this->db->where($multiClause);
		$this->db->update("tbl_user", $data);
		$stat =  $this->db->affected_rows() > 0;
		if($stat){
			return true;
		}
		else return false;
		// return $this->db->get('tbl_user')->row();
	}

}
	
?>