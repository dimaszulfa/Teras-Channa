<?php 

class Model_ikan extends CI_Model {
    public function tampil_data(){
        return $this->db->get('ikan');
    }
}

?>