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
                "nohp"=>$login->nohp,
                "address"=>$login->address,
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
        // $this->destroy->cart();
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
        else if($type == 'resetpass'){
            $this->form_validation->set_rules('username', 'Username', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        
        }
        else if($type == "newpass"){
            $this->form_validation->set_rules('newpassword', 'Password', 'trim|required|min_length[8]');
            $this->form_validation->set_rules('newpass_confirm', 'Password Confirmation', 'trim|required|matches[newpassword]');
        }
        else if($type == 'changedata'){
            $this->form_validation->set_rules('fullnamesignup', 'Fullname', 'required');
            $this->form_validation->set_rules('emailsignup', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('alamatsignup', 'Alamat', 'required|min_length[20]');
            $this->form_validation->set_rules('nohpsignup', 'P.Number', 'trim|required|exact_length[12]|numeric');    
        }	
        if($this->form_validation->run())
            return TRUE;
        else 
            return FALSE;
    }

    public function changedata(){
        if(!$this->session->userdata('username')){
            redirect ('Otontefikasi/login');
        }
        else {
            if($this->input->post('changedata') && $this->validation('changedata')){
                $data = array (
                    'fullname' => $this->input->post('fullnamesignup'),
                    'email' => $this->input->post('emailsignup'),
                    'address' => $this->input->post('alamatsignup'),
                    'nohp' => $this->input->post('nohpsignup')
                );
                $this->load->model('Model_otontefikasi');
                $this->Model_otontefikasi->changedata($data, $this->session->userdata('username'));
                $this->session->set_flashdata('changedata','<p  style="color:green"; text-align:center; font-size:24px;>Data telah diubah </p>');
                
            }
            $this->load->view('otontefikasi/changedata');    
        }
    }

    public function changepassnokey(){
        if(!$this->session->userdata('username')){
            redirect ('Otontefikasi/login');
        }
        else {
            if($this->input->post('changepass') && $this->validation('newpass')){
                $this->load->model('Model_otontefikasi');
                $this->Model_otontefikasi->changepassnokey($this->input->post('newpass_confirm'), $this->session->userdata('username'));
                $this->session->set_flashdata('newpass','<p  style="color:green"; text-align:center; font-size:24px;>Password telah diubah </p>');
                
            }
            $this->load->view('otontefikasi/changepass');    
        }
    }

    public function changepass(){
        if($this->validation('newpass')){
            $reset_key = $this->uri->segment(4);
            $newpass = $this->input->post('newpassword');
            $newpass_confirm  = $this->input->post('newpass_confirm');
            
            $this->session->set_flashdata('newpass',"silahkan cek email <b>".$reset_key.'</b> untuk melakukan reset password');
            $this->load->model('Model_otontefikasi');
            if(!$reset_key){
                $this->session->set_flashdata('newpass','<p  style="color:red"; text-align:center; font-size:24px;>Sesi sudah habis, buka ulang Link dari email </p>');
            }
            if ($this->Model_otontefikasi->check_key($reset_key) == 1){
                $this->Model_otontefikasi->changepass($newpass_confirm, $reset_key);
                redirect('ototenfikasi/login');
            } 
            else {
                echo $reset_key;
                $this->load->view('otontefikasi/forgotpass');
                $this->session->set_flashdata('newpass',"silahkan cek email <b>".$reset_key.'</b> untuk melakukan reset password');
            }
        }
        $this->load->view('otontefikasi/forgotpass');

    }


	public function resetpass(){
		$this->load->view('Otontefikasi/resetpass');
        
        if($this->validation('resetpass') && $this->input->post('resetpass')){
            $reset_key = random_string('alnum','50');
            $email = $this->input->post('email');
            $username = $this->input->post('username');
            $this->load->model('Model_otontefikasi');
            if($this->Model_otontefikasi->resetpass($username,$email,$reset_key)) {
                $this->load->library('email');
				$config = array();
				$config['charset'] = 'utf-8';
				$config['useragent'] = 'Codeigniter';
				$config['protocol']= "smtp";
				$config['mailtype']= "html";
				$config['smtp_host']= "ssl://smtp.gmail.com";//pengaturan smtp
				$config['smtp_port']= "465";
				$config['smtp_timeout']= "7";
				$config['smtp_user']= "TerassChanna@gmail.com"; // isi dengan email kamu
				$config['smtp_pass']= "ikangabus69"; // isi dengan password kamu
				$config['crlf']="\r\n"; 
				$config['newline']="\r\n"; 
				$config['wordwrap'] = TRUE;
				//memanggil library email dan set konfigurasi untuk pengiriman email
					
				$this->email->initialize($config);
				//konfigurasi pengiriman
				$this->email->from($config['smtp_user'], "Do not Reply");
				$this->email->to($email);
				$this->email->subject("Reset your password");
 
				$message = "<p>Anda melakukan permintaan reset password</p>";
				$message .= "<a href='".site_url('otontefikasi/changepass/newpass'.$reset_key)."'>klik reset password</a>";
				$this->email->message($message);
				
				if($this->email->send())
				{
                    $this->session->set_flashdata('reset',"silahkan cek email <b>".$this->input->post('email').'</b> untuk melakukan reset password');
                
				}else
				{
					echo $this->email->print_debugger();
				}
			
            }
                else $this->session->set_flashdata('reset','<p  style="color:red"; text-align:center; font-size:24px;>Username atau Email tidak cocok</p>');
        }
        else $this->session->set_flashdata('reset','<p  style="color:red"; text-align:center; font-size:24px;>Username atau Email tidak cocok</p>');
	}

    }
?>