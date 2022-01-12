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
        // $is_processed = $this->Model_invoice->index();
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
            //bagian invoicee
            date_default_timezone_set('Asia/Jakarta');
            $nama = $this->session->userdata('username');
            $alamat = $this->session->userdata('address');
            $invoice = array(
                'order_id' => $result->order_id,
                'nama' => $nama,
                'alamat' => $alamat,
                'tgl_pesan' => date('Y-m-d H:i:s'),
                'transaction_status' => $result->transaction_status
    
            );
            $this->db->insert('tbl_invoice', $invoice);

            foreach($this->cart->contents() as $item){
                $data = array(
                    'id_invoice' => $result->order_id,
                    'id' => $item['id'],
                    'nama' => $item['name'],
                    'jumlah' => $item['qty'],
                    'harga' => $item['price']
    
                );
                $this->db->insert('tbl_pesanan', $data);
            }


            $this->cart->destroy();
            $this->load->view('proses_pesanan');
            $this->load->view('templates/footer'); 
        
      
    }
    public function detail($id){
        $ikan['data'] = $this->Model_ikan->find($id);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('shop_detail', $ikan);
        $this->load->view('templates/footer'); 
    }

    public function pesanan(){
        $data['invoice'] = $this->Model_invoice->tampil_data();
        $data['checkout'] = $this->Model_checkout->tampil_data_pilihan($this->session->userdata('username'));
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pesanan_user', $data);
        $this->load->view('templates/footer'); 
        
    }

    public function detail_pesanan_user($id_invoice){
        $data['invoice'] = $this->Model_invoice->ambil_id_invoice($id_invoice);
        $data['pesanan'] = $this->Model_invoice->ambil_id_pesanan($id_invoice);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail_pesanan_user', $data);
        $this->load->view('templates/footer'); 
    }

    public function sejarah(){
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('tentang');
        $this->load->view('templates/footer'); 
    }

}

?>