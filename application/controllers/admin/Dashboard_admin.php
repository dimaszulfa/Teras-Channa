<?php

    class Dashboard_admin extends CI_Controller{


        public function __construct(){
            parent::__construct();
            $tipe = $this->session->userdata('usertype');
            if (! $this->session->userdata('username')){
                redirect('otontefikasi/login');
            }
            else if ($tipe =="pembeli")redirect('otontefikasi/login');
        }

        public function index(){
            $data['graph'] = $this->Model_checkout->data_graph();
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/top_bar');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/dashboard', $data);
            $this->load->view('templates_admin/footer');
        }
        
        
   
    }

    

?>