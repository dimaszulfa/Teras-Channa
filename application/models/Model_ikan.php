<?php 

class Model_ikan extends CI_Model {
    public function tampil_data(){
        return $this->db->get('tbl_ikan');
    }
    public function tampil_cart($id){
		$this->db->where('id_user',$id);
		$query=$this->db->get('tbl_keranjang');
		return $query;
    }

    public function hapus_cart($id){
        $this->db->where('id_user',$id);
        $this->db->delete('tbl_keranjang');
    }

    public function tambah_ikan($data, $table){
        $this->db->insert($table, $data);
    }

    public function edit_ikan($where, $table){
        return $this->db->get_where($table, $where);
    }

    public function update_ikan($id, $data){
        $verify=$this->read_by($id);
        if($verify->id == $id){
            unlink('./uploads/'.$verify->gambar);
            $this->db->where('id',$id);
            $this->db->update('tbl_ikan', $data);    
        }
        else {
            $this->db->where('id',$id);
            $this->db->update('tbl_ikan', $data);    
        }
    }

    public function delete_ikan($id){
        $verify=$this->read_by($id);
        if($verify->id == $id){
        unlink('./uploads/'.$verify->gambar);
        $this->db->where('id',$id);
        $this->db->delete('tbl_ikan');
        }
        else {
        $this->db->where('id',$id);
        $this->db->delete('tbl_ikan');    
        }
     
    }

    public function read_by($id)
	{
		$this->db->where('id',$id);
		$query=$this->db->get('tbl_ikan');
		return $query->row();
	}

    public function find($id){
        $result = $this->db->where('id',$id)
        ->limit(1)
        ->get('tbl_ikan');
        if($result->num_rows()>0){
            return $result->row();
        } else{
            return array();
        }
    }

    public function addcart($data, $ikanid, $cartid){
        if($ikanid){
		$multiClause = array('id_ikan' => $ikanid, 'id_user' => $this->session->userdata('username'), 'id_keranjang' => $cartid);
        $this->db->where($multiClause);
        $this->db->update('tbl_keranjang', $data);  
        }
        else $this->db->insert('tbl_keranjang', $data);
    }

    public function getcartinfo($iduser, $idikan){
        $multiClause = array('id_ikan' => $idikan, 'id_user' => $iduser);
        $this->db->where($multiClause);
		return $this->db->get('tbl_keranjang')->row();
    }

}

?>