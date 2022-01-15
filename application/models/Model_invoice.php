<?php 

class Model_invoice extends CI_Model{
    public function index(){
        date_default_timezone_set('Asia/Jakarta');
        $nama = $this->session->userdata('username');
        $alamat = $this->session->userdata('address');
        

        $invoice = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'tgl_pesan' => date('Y-m-d H:i:s')

        );
        $this->db->insert('tbl_invoice', $invoice);
        $id_invoice = $this->db->insert_id();

        foreach($this->cart->contents() as $item){
            $data = array(
                'id_invoice' => $id_invoice,
                'id' => $item['id'],
                'nama' => $item['name'],
                'jumlah' => $item['qty'],
                'harga' => $item['price']

            );
            $this->db->insert('tbl_pesanan', $data);
        }
return TRUE;
        }

        public function tampil_data(){
            $result = $this->db->get('tbl_invoice');
            if($result->num_rows()>0){
                return $result->result();
            }else{
                return false;
            }
        }

        public function tampil_dataresi($user){
            $result = $this->db->where('nama', $user)->get('tbl_invoice');
            if($result->num_rows()>0){
                return $result->result();
            }else{
                return false;
            }
        }


        public function ambil_id_invoice($id_invoice){
            $result = $this->db->where('order_id', $id_invoice)->limit(1)->get('tbl_invoice');
            if($result->num_rows()>0){
                return $result->row();
            } else {
                return false;
            }
        }

        public function ambil_id_pesanan($id_invoice){
            $result = $this->db->where('id_invoice', $id_invoice)->get('tbl_pesanan');
            if($result->num_rows()>0){
                return $result->result();
            } else {
                return false;
            }
        }

        public function addresi($order_id, $data){
            $this->db->where('order_id',$order_id);
            $this->db->update('tbl_invoice', $data);    
        }
    

        // public function invoice(){
        //     $this->db->select('tbl_invoice.*,tbl_pesanan.*')->from('tbl_invoice');
        // $this->db->join('tbl_pesanan','tbl_pesanan.id_invoice=tbl_invoice.id');
        // return $this->db->get()->result();
        // }
}

?>