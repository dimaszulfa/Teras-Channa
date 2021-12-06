<?php 

class Model_ikan extends CI_Model {
    public function tampil_data(){
        return $this->db->get('tbl_ikan');
    }

    public function tambah_ikan($data, $table){
        $this->db->insert($table, $data);
    }

    public function edit_ikan($where, $table){
        return $this->db->get_where($table, $where);
    }



    public function read_by($id)
	{
		$this->db->where('id',$id);
		$query=$this->db->get('tbl_ikan');
		return $query->row();
	}

}

?>