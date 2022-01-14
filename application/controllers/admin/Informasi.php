<?php

class informasi extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $tipe = $this->session->userdata('usertype');
        if (! $this->session->userdata('username')){
            redirect('otontefikasi/login');
        }
        else if ($tipe =="pembeli")redirect('otontefikasi/login');
    }
    
    public function index(){
        $data['info'] = $this->Model_Informasi->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/top_bar');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_informasi', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi(){
            $nama = $this->input->post('nama');
            $gambar = $_FILES['gambar']['name'];
            if ($gambar = ''){
            } else {
                $config['upload_path'] = './uploads';
                $config['allowed_types'] = 'jpeg|png|gif|jpg';

                $this->load->library('upload', $config);
                    if(!$this->upload->do_upload('gambar')){
                        echo "Gambar gagal diupload";
                    } else {
                        $gambar =$this->upload->data('file_name');
                    }
            }

            $data = array (
                'nama' => $nama,
                'gambar' => $gambar
            );
            $this->Model_Informasi->tambah_info($data, "tbl_info");
            $this->session->set_flashdata('msg','ditambahkan');

            redirect('admin/Informasi/index');
    }

    public function delete($id){
        $this->Model_Informasi->delete_info($id);
        redirect('admin/Informasi/index');
    }
}

?>