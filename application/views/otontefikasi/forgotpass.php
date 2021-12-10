<!DOCTYPE html>
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Lupa Password - Ganti Password</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Form Login atau Register Teras Channa" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/stylelogin.css" />
		<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <?php 
            $key = $this->uri->segment(4);
            if(!$key) $key = $this->uri->segment(3);
            ?>
            <header>
                <h1>Reset Password Akun <span>TERAS CHANNA</span></h1>
                
                
            </header>
            <section>				
                
                <div id="container_demo" >
                    <div id="wrapper">
                        <div id="newpass" class="animate form">
                            <!-- <form  action="<?='newpass/'.$key?>" method="post"> -->
                            <form  action="" method="post"> 

                                <h1>Masukkan Password baru</h1> 
                                <div><center><?=$this->session->flashdata('newpass')?></div>
                                <p> 
                                    <label for="newpassword" class="youpasswd" data-icon="p">Password </label>
                                    <input id="newpassword" name="newpassword" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                    <div style="color: red;"><?= form_error('newpassword'); ?></div>
                                </p>
                                <p> 
                                    <label for="newpass_confirm" class="youpsswd" data-icon="p"> Konfirmasi Password </label>
                                    <input id="newpass_confirm" name="newpass_confirm" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                    <div style="color: red;"><?= form_error('newpass_confirm'); ?></div>
                                </p>
                                <p class="login button"> 
                                    <input type="submit" value="Change" name=""> 
								</p>
                            </form>
                        </div>

                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>