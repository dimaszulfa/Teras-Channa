<?php

    class Data_ikan extends CI_Controller{

        public function __construct() 
        {
        parent::__construct();
        $tipe = $this->session->userdata('usertype');
        if (! $this->session->userdata('username')){
            redirect('otontefikasi/login');
        }
        else if ($tipe =="pembeli")redirect('otontefikasi/login');
        $this->load->library('pagination');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation'); 

        }


        public function index(){
            $data['ikan'] = $this->Model_ikan->tampil_data()->result();
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/top_bar');
            $this->load->view('templates_admin/sidebar');

            $config['base_url'] = site_url('admin/Data_ikan/index'); //site url
            $config['total_rows'] = $this->db->count_all('tbl_ikan'); //total row
            $config['per_page'] = 2;  //show record per halaman
            $config["uri_segment"] = 4;  // uri parameter
            $choice = $config["total_rows"] / $config["per_page"];
            $config["num_links"] = floor($choice);


            $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
 
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->Model_ikan->get_ikan_list($config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links();

            $this->load->view('admin/data_ikan', $data);
            $this->load->view('templates_admin/footer');

          
        }

        public function tambah_aksi(){
            $valid=$this->validation();
            if($valid == true){
                $nama = $this->input->post('nama');
                $famili = $this->input->post('famili');
                $ukuran = $this->input->post('ukuran');
                $berat = $this->input->post('berat');
                $usia = $this->input->post('usia');
                $harga = $this->input->post('harga');
                $stok = $this->input->post('stok');
                $keterangan = $this->input->post('keterangan');
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
                    'famili' => $famili,
                    'ukuran' => $ukuran,
                    'berat' => $berat,
                    'usia' => $usia,
                    'harga' => $harga,
                    'stok' => $stok,
                    'gambar' => $gambar,
                    'keterangan' => $keterangan
                );
                $this->load->model('model_ikan');
                $this->model_ikan->tambah_ikan($data, 'tbl_ikan');
                $this->session->set_flashdata('msg','ditambahkan');

                redirect('admin/data_ikan/index');
            }
            else {
                $this->index();
            }
        }

        public function edit($id){
            $where = array('id' => $id);
            $valid = $this->validation();
            $this->load->model('model_ikan');
            $data['ikan'] = $this->model_ikan->edit_ikan($where, 'tbl_ikan')->result();
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/top_bar');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/edit_ikan', $data);
            $this->load->view('templates_admin/footer');
            if($this->input->post('submit') && $valid==true){
                $nama = $this->input->post('nama');
                $ukuran = $this->input->post('ukuran');
                $famili = $this->input->post('famili');
                $berat = $this->input->post('berat');
                $usia = $this->input->post('usia');
                $harga = $this->input->post('harga');
                $stok = $this->input->post('stok');
                $keterangan = $this->input->post('keterangan');
                $gambar = $_FILES['gambar']['name'];
                if ($gambar !== ""){
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
                    'famili' =>$famili,
                    'ukuran' => $ukuran,
                    'berat' => $berat,
                    'usia' => $usia,
                    'harga' => $harga,
                    'stok' => $stok,
                    'gambar' => $gambar,
                    'keterangan' =>$keterangan
                );
                $this->load->model('model_ikan');
                $this->model_ikan->update_ikan($id, $data);
                $this->session->set_flashdata('msg','Diubah');

                redirect('admin/data_ikan/index');
    
            }
        }

        public function delete($id){
            $this->load->model('model_ikan');
            $this->model_ikan->delete_ikan($id);
            redirect('admin/data_ikan/index');
        }


        public function validation() {
            if (empty($_FILES['gambar']['name']))$this->form_validation->set_rules('gambar', 'Foto Ikan', 'trim|required');
        
            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('famili', 'Famili', 'required');
            $this->form_validation->set_rules('berat', 'Berat', 'required');
            $this->form_validation->set_rules('ukuran', 'Ukuran', 'required');
            $this->form_validation->set_rules('usia', 'Usia ikan', 'required');
            $this->form_validation->set_rules('harga', 'Harga ikan', 'required|min_length[3]');
            $this->form_validation->set_rules('stok', 'stok ikan', 'required');
            $this->form_validation->set_rules('keterangan', 'Deskripsi ikan', 'required');
            
            
            if($this->form_validation->run())
                return TRUE;
            else 
                return FALSE;
        }

        public function graph(){
            $data['graph'] = $this->Model_checkout->data_graph();
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/top_bar');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/graph', $data);
            $this->load->view('templates_admin/footer');
        }

        public function read_by($id)
        {
            $this->db->where('id', $id);
            $query=$this->db->get('tbl_ikan');
            return $query->row();


         }
        

         
        }



?> 