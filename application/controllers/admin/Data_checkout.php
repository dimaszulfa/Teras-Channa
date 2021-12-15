<?php

class Data_checkout extends CI_Controller{


    public function __construct(){
        parent::__construct();
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
            'date_modified' => time()
        ];


        $update = $this->Model_checkout->update($dataupdate,$orderid);


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

    
}


?>