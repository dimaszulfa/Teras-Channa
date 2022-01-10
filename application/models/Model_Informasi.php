<?php

class Model_Informasi extends CI_Model{
    public function tampil_data(){
        return $this->db->get('tbl_info');
    }

    public function tambah_info($data, $table){
        $this->db->insert($table, $data);
    }


    public function read_by($id)
	{
		$this->db->where('id',$id);
		$query=$this->db->get('tbl_info');
		return $query->row();
	}

    public function delete_info($id){
        $verify=$this->read_by($id);
        if($verify->id == $id){
        unlink('./uploads/'.$verify->gambar);
        $this->db->where('id',$id);
        $this->db->delete('tbl_info');
        }
        else {
        $this->db->where('id',$id);
        $this->db->delete('tbl_ikan');    
        }
     
    }

}
?>