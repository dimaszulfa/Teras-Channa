<?php

class Dashboard extends CI_Controller{

    public function index(){
        $data['ikans'] = $this->Model_ikan->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/slider');
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
    }

    public function add(){
        if($this->input->post('submit')){
            $this->Model_ikan->create();
        }
    }

    public function tambah_keranjang($id){
        $ikan = $this->Model_ikan->find($id);
        $data = array(
            'id'      => $ikan->id,
            'qty'     => 1,
            'price'   => $ikan->harga,
            'name'    => $ikan->nama,
    );
    
    $this->cart->insert($data);
    redirect('dashboard');
    }
    public function detail_keranjang(){
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('cart');
        $this->load->view('templates/footer'); 
    }

    public function hapus_keranjang(){
        $this->cart->destroy();
        redirect ('dashboard/index');
    }

    public function pembayaran(){
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pembayaran');
        $this->load->view('templates/footer'); 
    }

    public function proses_pesanan(){
        $this->cart->destroy();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('proses_pesanan');
        $this->load->view('templates/footer'); 
    }
    public function detail(){
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('shop_detail');
        $this->load->view('templates/footer'); 
    }

}

?>