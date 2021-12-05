<?php 

class Model_ikan extends CI_Model {
    public function tampil_data(){
        return $this->db->get('tbl_ikan');
    }

    public function tambah_ikan($data, $table){
        $this->db->insert($table, $data);
    }
    public function read_by($id)
	{
		$this->db->where('id',$id);
		$query=$this->db->get('tbl_ikan');
		return $query->row();
	}

}

?>