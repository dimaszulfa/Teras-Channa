<?php

class Dashboard extends CI_Controller{

    public function index(){
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/slider');
        $this->load->view('templates/cursual');
        $this->load->view('dashboard');
        $this->load->view('templates/footer');

    }

}

?>