<body>
    <div class="header_bg">

        <?php if ($this->session->userdata('usertype') == 'pembeli') { ?>
            <a class="active-icon c2 float-right" style="text-decoration:none;" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"></a> <?php } else { ?>
        <?php } ?>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" style="background-color:#4CCFC1; " href="<?= site_url('otontefikasi/changedata') ?>">Ubah Data</a>
            <a class="dropdown-item" style="background-color:#4CCFC1; " href="<?= site_url('otontefikasi/changepassnokey') ?>">Ubah Password</a>
            <a class="dropdown-item" style="background-color:#4CCFC1;" href="<?= base_url() . 'dashboard/pesanan' ?>">Pesanan Saya</a>
            <a class="dropdown-item" style="background-color:#4CCFC1;" href="<?= base_url() . 'otontefikasi/logout' ?>">Logout</a>
        </div>
        <div class="wrap">

            <div class="header">

                <div class="logo">
                    <a href="<?= base_url() ?>"><img src="<?php echo base_url() ?>assets/images/logoss.png" alt="" /> </a>
                </div>
                <div class="h_icon">
                    <a class="active-icon c1" style="text-decoration:none;" href="<?= base_url() . 'dashboard/detail_keranjang' ?>"><i><?php echo $this->cart->total_items() ?></i></a>
                    <br><br>

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
                        <li class="active"><a href="<?= base_url() ?>">Home</a></li> |
                        <li><a href="<?= base_url() . 'Informasi/index' ?>">Informasi Ikan Channa</a></li> |
                        <li><a href="<?= base_url('dashboard/tentang') ?>">Tentang Kami</a></li> |
                        <?php if (!$this->session->userdata('usertype')) { ?>
                            <li><a href="<?= base_url() . 'otontefikasi/login' ?>">Masuk</a></li> |
                            <li><a href="<?= base_url() . 'otontefikasi/register' ?>">Daftar</a></li> |
                        <?php } ?>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>