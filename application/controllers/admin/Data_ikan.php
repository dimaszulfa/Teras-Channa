<?php

    class Data_ikan extends CI_Controller{
        public function index(){
            $data['ikan'] = $this->Model_ikan->tampil_data()->result();
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/top_bar');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/data_ikan', $data);
            $this->load->view('templates_admin/footer');
        }

        public function tambah_aksi(){
            $nama = $this->input->post('nama');
            $ukuran = $this->input->post('ukuran');
            $berat = $this->input->post('berat');
            $usia = $this->input->post('usia');
            $harga = $this->input->post('harga');
            $stok = $this->input->post('stok');
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
                'ukuran' => $ukuran,
                'berat' => $berat,
                'usia' => $usia,
                'harga' => $harga,
                'stok' => $stok,
                'gambar' => $gambar
            );
            $this->load->model('model_ikan');
            $this->model_ikan->tambah_ikan($data, 'tbl_ikan');
            
            redirect('admin/data_ikan/index');
        }

        public function edit($id){
            $where = array('id' => $id);
            $this->load->model('model_ikan');
            $data['ikan'] = $this->model_ikan->edit_ikan($where, 'tbl_ikan')->result();
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/top_bar');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/edit_ikan', $data);
            $this->load->view('templates_admin/footer');
        }

        public function update($where,$data, $table){
        $this->db->where($where);
        $this->db->update($table,$data);
        }

        // public function update()
        // {
        //     $data=array(
        //         'id' => $this->input->post('id'),
        //         'nama' => $this->input->post('nama'),
        //         'ukuran' => $this->input->post('ukuran'),
        //         'berat' => $this->input->post('berat'),
        //         'usia' => $this->input->post('usia'),
        //         'harga' => $this->input->post('harga'),
        //         'stok' => $this->input->post('stok')
        //         'gambar' => $this->input->post('gambar')
        //     );
        //     $this->model_ikan->update_data($where,$data, 'tbl_ikan');
        //     redirect('admin/data_ikan/index');

        //     $this->db->where('id',$id);
        //     $this->db->update('tbl_ikan',$data);
        // }

    }

?> 