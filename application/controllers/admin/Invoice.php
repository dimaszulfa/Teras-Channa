<?php

class Invoice extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $tipe = $this->session->userdata('usertype');
        if (! $this->session->userdata('username')){
            redirect('otontefikasi/login');
        }
        else if ($tipe =="pembeli")redirect('otontefikasi/login');
    }

    public function index(){
        $data['invoice'] = $this->Model_Invoice->tampil_data();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/top_bar');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/invoice', $data);
        $this->load->view('templates_admin/footer');
    }

    public function detail($id_invoice){
        $data['invoice'] = $this->Model_Invoice->ambil_id_invoice($id_invoice);
        $data['pesanan'] = $this->Model_Invoice->ambil_id_pesanan($id_invoice);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/top_bar');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/detail_invoice', $data);
        $this->load->view('templates_admin/footer');
    }

    public function addresi($order_id){
        $resi = $this->input->post('resi');
        $data = array (
            'resi' => $resi
        );
        $this->load->model('Model_Invoice');
        $this->Model_Invoice->addresi($order_id, $data);
        $this->session->set_flashdata('resi','Resi Ditambahkan');
        redirect('admin/invoice');
    }

    function print($id_invoice)
    {
        $this->load->library('pdf');
        $data['invoice'] = $this->Model_Invoice->ambil_id_invoice($id_invoice);
        $data['pesanan'] = $this->Model_Invoice->ambil_id_pesanan($id_invoice);
        $html = $this->load->view('admin/invoicepdf', $data, true);
        $this->pdf->createPDF($html, 'Invoice', false);
    }


    


}


?>