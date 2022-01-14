<?php

class Data_checkout extends CI_Controller{


    public function __construct(){
        parent::__construct();
        $tipe = $this->session->userdata('usertype');
        if (! $this->session->userdata('username')){
            redirect('otontefikasi/login');
        }
        else if ($tipe =="pembeli")redirect('otontefikasi/login');
        $this->load->library('pagination');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation'); 

        $params = array('server_key' => 'SB-Mid-server-PebvCjOCK9aBjk9S-NLL6duM', 'production' => false);
		$this->load->library('veritrans');
		$this->veritrans->config($params);
		$this->load->helper('url');
    }

    public function index(){
        $data['checkout'] = $this->Model_checkout->tampil_data();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/top_bar');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_checkout', $data);
        $this->load->view('templates_admin/footer');
    }

    public function cekstatus(){
        $orderid = $this->input->post('order_id');

        if($orderid){
            $this->status($orderid);
        }else{
            $this->session->set_flashdata('messagetransaksi', 'Data yang anda cari tidak ada');
        }
        redirect('admin/data_checkout');
    }

    private function status($orderid){
       $result = $this->veritrans->status($orderid) ;
       if($result->status_message == 'Success, transaction is found'){
        $dataupdate = [
            'transaction_status' => $result->transaction_status,
            // 'date_modified' => time()
        ];


        $update = $this->Model_checkout->update($dataupdate,$orderid);
        $update = $this->Model_checkout->update_invoice($dataupdate,$orderid);


        if($update>0){
            $this->session->set_flashdata('messagetransaksi', 'Data transaksi berhasil diupdate');

        }else{
            $this->session->set_flashdata('messagetransaksi', 'Server sedang sibuk, silahkan coba beberapa saat lagi');

        }
    }else{
        $this->session->set_flashdata('messagetransaksi', 'Server sedang sibuk, silahkan coba beberapa saat lagi');
  
    }

        redirect('admin/data_checkout');
    }
    function pdf()
    {
        // $this->load->view('admin/pdf');
        $date = $this->input->post('date');
        $date1 = $this->input->post('date1');
        $this->load->library('pdf');
        $data['transaksi'] = $this->Model_checkout->transaksiberhasil($date, $date1);
        $html = $this->load->view('admin/pdf', $data, true);
        $this->pdf->createPDF($html, 'laporan_penjualan', false);
    }
    
    

    
}


?>