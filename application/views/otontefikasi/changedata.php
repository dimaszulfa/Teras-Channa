<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Form Login atau Register Teras Channa</title>
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
            
            <header>
                <h1>Form Login atau Registrasi <span>TERAS CHANNA</span></h1>
                
                <div><center><?=$this->session->flashdata('changedata')?></div>
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <a class="hiddenanchor" id="toresetpass"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="changedata" method="post"> 
                                <p> 
                                    <label for="fullnamesignup" class="" data-icon="u">Nama Lenkap</label>
                                    <input id="fullnamesignup" name="fullnamesignup" required="required" type="text" placeholder="eg. Budi Setiawan" />
                                    <div style="color: red;"><?= form_error('fullnamesignup'); ?></div>
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" >Email</label>
                                    <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                                    <div style="color: red;"><?= form_error('emailsignup'); ?></div>
                                </p>
                                <p> 
                                    <label for="address" class="" data-icon="@">Alamat</label>
                                    <input id="address" name="alamatsignup" required="required" type="" placeholder="eg. Kab. Bandung, Kec. Cimaung, RW 29 RT 22"/>
                                    <div style="color: red;"><?= form_error('alamatsignup'); ?></div>
                                </p>
                                <p> 
                                    <label for="nohpsignup" class="" data-icon="HP">Nomor Telepon </label>
                                    <input id="nohpsignup" name="nohpsignup" required="required" type="number" placeholder="eg. 082199340586"/>
                                    <div style="color: red;"><?= form_error('nohpsignup'); ?></div>
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Ubah" name="changedata"/> 
								
                            </form>
                        </div>
                        

                        
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>