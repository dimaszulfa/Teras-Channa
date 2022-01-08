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
        $is_processed = $this->Model_invoice->index();
        if ($is_processed){
            $this->cart->destroy();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $result = json_decode($this->input->post('result_data'));
    
            if($result->payment_type == 'bank_transfer'){
                if(@$result->va_numbers){
                    foreach ($result->va_numbers as $row){
                        $bank = $row->bank;
                        $vaNumber = $row->va_number;
                        $billerCode = '';
                    }
                }else{
                    $bank = 'permata';
                    $vaNumber = $result->permata_va_number;
                    $billerCode = $result->biller_code;
                }
            } elseif($result->payment_type == 'echannel'){
                $bank = 'mandiri';
                $vaNumber = $result->bill_key;
                $billerCode = $result->biller_code;		
            } else{
                    $bank = 'alfamart/indomart';
                    $vaNumber = $result->payment_code;
                    $billerCode = '';
                }
        $gross = str_replace('.00','',$result->gross_amount);
        $dataInput = [
            'order_id' => $result->order_id,
            'user' => $this->session->userdata('username'),
            'gross_amount' => $gross,
            'payment_type' => $result->payment_type,
            'bank' => $bank,
            'va_number' => $vaNumber,
            'biller_code' => $billerCode,
            'transaction_status' =>$result->transaction_status,
            'transaction_time' =>$result->transaction_time,
            'pdf_url' => $result->pdf_url,
            'date_created' => time(),
            'date_modified' => time()
        ];
            $this->db->insert('tbl_checkout', $dataInput);
            $this->cart->destroy();
            $this->load->view('proses_pesanan');
            $this->load->view('templates/footer'); 
        } else {
            echo " Maaf, Pesanan Anda Gagal diproses!";
        }
      
    }
    public function detail($id){
        $ikan['data'] = $this->Model_ikan->find($id);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('shop_detail', $ikan);
        $this->load->view('templates/footer'); 
    }

    public function pesanan(){
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pesanan_user');
        $this->load->view('templates/footer'); 
    }

}

?>