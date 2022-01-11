<?php 

class Model_ikan extends CI_Model {
    public function tampil_data(){
        return $this->db->get('tbl_ikan');
    }

    public function search($keyword){
        $this->db->like('nama', $keyword);
        $this->db->or_like('famili', $keyword);
        $this->db->or_like('usia', $keyword);
        $this->db->or_like('harga', $keyword);
        $this->db->or_like('ukuran', $keyword);
        
        $result = $this->db->get('tbl_ikan')->result(); // Tampilkan data siswa berdasarkan keyword
        
        return $result; 
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

    function get_ikan_list($limit, $start){
        $query = $this->db->get('tbl_ikan', $limit, $start);
        return $query;
    }

    public function delete_ikan($id){
        $verify=$this->read_by($id);
        if($verify->id == $id){
        unlink('./uploads/'.$verify->gambar);
        $this->db->where('id',$id);
        $this->db->delete('tbl_ikan');
        $this->db->where('id_ikan',$id);
        $this->db->delete('tbl_graph');
        }
        else {
        $this->db->where('id',$id);
        $this->db->delete('tbl_ikan');    
        $this->db->where('id_ikan',$id);
        $this->db->delete('tbl_graph');
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

}

?>