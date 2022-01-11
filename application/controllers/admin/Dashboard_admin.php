<?php

    class Dashboard_admin extends CI_Controller{


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