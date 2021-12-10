<!DOCTYPE html>
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
                <h1>Reset Password Akun <span>TERAS CHANNA</span></h1>
                
                
            </header>
            <section>				
            <div id="container_demo" >
                    <div id="wrapper">
                        <div id="resetpass" class="animate form">
                            <form  action="resetpass" method="post"> 
                                <h1>Reset Password</h1> 
                                <div><center><?=$this->session->flashdata('rst')?></div>
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="myusername"/>
                                    <div style="color: red;"><?= form_error('username'); ?></div>
                                </p>
                                <p> 
                                    <label for="email" class="youmail" data-icon="e"> Email </label>
                                    <input id="email" name="email" required="required" type="email" placeholder="mysupermail@gmail.com" /> 
                                    <div style="color: red;"><?= form_error('email'); ?></div>
                                </p>
                                <p class="login button"> 
                                    <input type="submit" value="Reset" name="resetpass"/> 
								</p>
                            </form>
                        </div>

                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>