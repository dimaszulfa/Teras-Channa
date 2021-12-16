<body>
<!-- start header -->
<div class="header_bg">

 <?php if($this->session->userdata('usertype') == 'pembeli'){ ?>
<a class="active-icon c2 float-right" style="text-decoration:none;" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"></a>  <?php }else{?>
    <?php }?>             
<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" style="background-color:#4CCFC1; " href="<?= site_url('otontefikasi/changedata')?>">Ubah Data</a>
    <a class="dropdown-item" style="background-color:#4CCFC1; " href="<?= site_url('otontefikasi/changepassnokey')?>">Ubah Password</a>
    <a class="dropdown-item" style="background-color:#4CCFC1;" href="<?=base_url().'dashboard/pesanan'?>">Pesanan Saya</a>
    <a class="dropdown-item" style="background-color:#4CCFC1;" href="<?=base_url().'otontefikasi/logout'?>">Logout</a>
  </div>
<div class="wrap">

    <div class="header">

        <div class="logo">
            <a href="<?= base_url()?>"><img src="<?php echo base_url()?>assets/images/logoss.png" alt=""/> </a>
        </div>
        <div class="h_icon">
        <!-- <ul class="icon1 sub-icon1"> -->
        <a class="active-icon c1" style="text-decoration:none;" href="<?= base_url().'dashboard/detail_keranjang'?>"><i><?php echo $this->cart->total_items()?></i></a>                
       <br><br>


        <!-- <ul class="sub-icon1 list"> -->
                    <!-- <li><h3>shopping cart empty</h3><a href=""></a></li>
                    <li><p>if items in your wishlit are missing, <a href="contact.html">contact us</a> to view them</p></li> -->
                <!-- </ul>
            </li> -->
        <!-- </ul> -->
        </div>

        <div class="h_search">
            <form>
                <input type="text" value="">
                <input type="submit" value="">
            </form>
        </div>
        <div class="clear"></div>
    </div>
</div>
</div>
<div class="header_btm">
<div class="wrap">
    <div class="header_sub">
        <div class="h_menu">
            <ul>
                <li class="active"><a href="<?= base_url()?>">Home</a></li> |
                <li><a href="#">Perawatan Ikan</a></li> |
                <li><a href="#">Kontak Kami</a></li> |
                <li><a href="#">Sejarah Kami</a></li> |
                <li><a href="<?= base_url().'otontefikasi/login'?>">Masuk</a></li> |
                <li><a href="<?= base_url().'otontefikasi/register'?>">Daftar</a></li> |
                
            </ul>
        </div>
        <div class="top-nav">
              <nav class="nav">             
                <a href="#" id="w3-menu-trigger"> </a>
                      <ul class="nav-list" style="">
                            <li class="nav-item"><a class="active" href="index.html">Home</a></li>
                            <li class="nav-item"><a href="sale.html">Sale</a></li>
                            <li class="nav-item"><a href="handbags.html">Handbags</a></li>
                            <li class="nav-item"><a href="accessories.html">Accessories</a></li>
                            <li class="nav-item"><a href="shoes.html">Shoes</a></li>
                            <li class="nav-item"><a href="service.html">Services</a></li>
                            <li class="nav-item"><a href="contact.html">Contact</a></li>
                     </ul>
               </nav>
                 <div class="search_box">
                <form>
                   <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
                </form>
            </div>
              <div class="clear"> </div>
              <script src="<?php echo base_url()?>assets/js/responsive.menu.js"></script>
         </div>       
    <div class="clear"></div>
</div>
</div>
</div>