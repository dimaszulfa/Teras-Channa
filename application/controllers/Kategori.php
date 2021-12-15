<?php 

class Kategori extends CI_Controller{

    public function famili(){
        $data['famili'] = $this->Model_kategori->data_famili()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('famili', $data);
        $this->load->view('templates/footer');
    }

}

?>