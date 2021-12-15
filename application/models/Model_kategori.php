<?php 

class Model_kategori extends CI_Model {

    public function data_famili(){
       return $this->db->get_where('tbl_ikan', array('famili' => 'asdf'));

    }

}


?>