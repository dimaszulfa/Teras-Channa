<?php

class Dashboard extends CI_Controller{

    public function index(){
        $data['ikan'] = $this->Model_ikan->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/slider');
        $this->load->view('templates/cursual');
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');

    }

}

?>