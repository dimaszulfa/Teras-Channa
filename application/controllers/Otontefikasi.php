<?php

    class Otontefikasi extends CI_Controller {
   
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Model_otontefikasi');
            $this->load->library('form_validation');
            
        }
        
        public function index(){
        //     {
        //         $vals = [
        //             'word'          => substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 8),
        //             'img_path'      => './assets/images/captcha/',
        //             'img_url'       => base_url('assets/images/captcha/'),
        //             'img_width'     => '150',
        //             'img_height'    => 30,
        //             'expiration'    => 7200,
        //             'word_length'   => 8,
        //             'font_size'     => 16,
        //             'img_id'        => 'Imageid',
        //             'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
            
        //             'colors'        => [
        //                     'background'=> [255, 255, 255],
        //                     'border'    => [255, 255, 255],
        //                     'text'      => [0, 0, 0],
        //                     'grid'      => [255, 40, 40]
        //                 ]
        //             ];
                
        //         $captcha = create_captcha($vals);
        //         echo $captcha;
        //         $this->session->set_userdata('captcha', $captcha['word']);
        //         $this->load->view('otontefikasi/login', ['captcha' => $captcha['image']]);
        //         //    $this->load->view('otontefikasi/login', $data);
        //         // $this->load->view('otontefikasi/login', ['captcha' => $captcha['image']]);
        //     }
        // }
        // public function check_captcha() 
        // {
        // $post_code  = $this->input->post('captcha');
        // $captcha    = $this->session->userdata('captcha');
        
        // if ($post_code && ($post_code == $captcha)) 
        //     $this->session->set_flashdata('pesan_form', '<font style="color: green"><b>Berhasil memverifikasi captcha.</b></font><br/><br/>');
        // else
        //     $this->session->set_flashdata('pesan_form', '<font style="color: red"><b>Captcha yang Anda ketik salah!</b></font><br/><br/>');

        // // redirect('captcha');
        // } 
        $this->logout();
        redirect('otontefikasi/login');
    }

    public function login()
    {
 	     if($this->input->post('login') && $this->validation('login')){
        $login=$this->Model_otontefikasi->getuser($this->input->post('username'));
        if ($login != NULL){
        	if(password_verify($this->input->post('password'), $login->password)){
        	$data=array(
        		"username"=>$login->username,
        		"usertype"=>$login->usertype,
        		"fullname"=>$login->fullname,
                "email"=>$login->email
        	);
        	$this->session->set_userdata($data);
        	if($login->usertype=="admin")redirect('admin/data_ikan'); 
        	else if($login->usertype=="pembeli")redirect('Dashboard'); 
        	}
        }
        
        $this->session->set_flashdata('msg','<p  style="color:red"; text-align:center; font-size:24px;>Data yang diinput tidak Valid</p>');
        }
    	$this->load->view('otontefikasi/login');
      
    }

    public function register()
    {
        if($this->validation('register') && $this->input->post('register')){
            $data = array (
                'username' => $this->input->post('usernamesignup'),
                'usertype' => "pembeli",
                'fullname' => $this->input->post('fullnamesignup'),
                'password' => password_hash($this->input->post('passwordsignup'),PASSWORD_DEFAULT),
                'email' => $this->input->post('emailsignup'),
                'address' => $this->input->post('alamatsignup'),
                'nohp' => $this->input->post('nohpsignup')
            );
            $this->load->model('Model_otontefikasi');
            $this->Model_otontefikasi->register($data, 'tbl_user');
            $this->session->set_flashdata('msg','<p  style="color:green"; text-align:center; font-size:24px;>Register Berhasil</p>');
            $this->load->view('otontefikasi/login');
        }
        else $this->load->view('otontefikasi/login');
    }
    
    public function logout()
    {
    	$this->session->sess_destroy();
    	redirect('Otontefikasi/login');
    }
    

    public function validation($type){
        if($type =='login'){
            
            $this->form_validation->set_rules('username', 'Username', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
        }
            
        else if($type =='register'){
            $this->form_validation->set_rules(
                'usernamesignup', 'Username',
                'required|min_length[5]|max_length[12]|is_unique[tbl_user.username]',
                array(
                        'required'      => 'You have not provided %s.',
                        'is_unique'     => 'This %s already exists.'
                )
            );            
            $this->form_validation->set_rules('passwordsignup', 'Password', 'trim|required|min_length[8]');
            $this->form_validation->set_rules('fullnamesignup', 'Fullname', 'required');
            $this->form_validation->set_rules('passwordsignup_confirm', 'Password Confirmation', 'trim|required|matches[passwordsignup]');
            $this->form_validation->set_rules('emailsignup', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('alamatsignup', 'Alamat', 'required|min_length[20]');
            $this->form_validation->set_rules('nohpsignup', 'P.Number', 'trim|required|exact_length[12]|numeric');
        }
        else{
            $this->form_validation->set_rules('oldpass', 'Username', 'required');
            $this->form_validation->set_rules('newpass', 'Password', 'required');
        
        }	
        if($this->form_validation->run())
            return TRUE;
        else 
            return FALSE;
    }
    }
?>