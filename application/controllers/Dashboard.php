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
        if (! $this->session->userdata('username')){
            redirect('otontefikasi/login');
			}
        else {    
        $ikan = $this->Model_ikan->find($id);
        $exist_data = $this->Model_ikan->getcartinfo($this->session->userdata('username'), $ikan->id);
        $data = array(
            'id_ikan' => $ikan->id,
            'qty'     => $exist_data->qty + 1,
            'price'   => $ikan->harga,
            'name'    => $ikan->nama,
            'id_user'    => $this->session->userdata('username')
        );
    // $this->cart->insert($data);
    $this->Model_ikan->addcart($data, $exist_data->id_ikan, $exist_data->id_keranjang);
     redirect('dashboard');
        }    
    }
    
    public function detail_keranjang(){
        if (! $this->session->userdata('username')){
            redirect('otontefikasi/login');
			}
        else {
        $data['cart'] = $this->Model_ikan->tampil_cart($this->session->userdata('username'))->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('cart', $data);
        $this->load->view('templates/footer'); 
        }
    }

    public function hapus_keranjang(){
        // $this->cart->destroy();
        $this->Model_ikan->hapus_cart($this->session->userdata('username'));
        redirect ('dashboard/index');
    }

    public function pembayaran(){
        $data['cart'] = $this->Model_ikan->tampil_cart($this->session->userdata('username'))->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pembayaran', $data);
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