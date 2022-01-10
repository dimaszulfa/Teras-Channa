<?php

class Informasi extends CI_Controller{
    public function index(){
        $data['info'] = $this->Model_Informasi->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('informasi', $data);
        $this->load->view('templates/footer'); 
    }
}


?>