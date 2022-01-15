  <!-- partial:partials/_sidebar.html -->
  <div class="modal fade" id="tambah_ikan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Pilih Tanggal</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" <?=$edit="submit"?>
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="<?= base_url().'admin/Data_checkout/pdf'?>" class="forms-sample"  method="post" enctype="multipart/form-data">
            <div class='error_msg'>
            </div>              
            <div class="form-group">
              <label for="exampleInputUsername1">Tanggal Mulai</label>
              <input type="date" class="form-control" id="date" name="date" placeholder="Date" >
            </div>
            <div class="form-group">
              <label for="exampleInputUsername1">Sampai</label>
              <input type="date" class="form-control" id="date1" name="date1" placeholder="Date" >
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary"   id='submit' >Submit</button>
            </div>
            </form>           
          </div>
          </div>
        </div>
      </div>  
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('admin/dashboard_admin') ?>">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <!-- <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin/data_ikan') ?>">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Data Ikan</span>
            </a>
          </li> -->
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="icon-layout menu-icon"></i>
          <span class="menu-title">Data</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="<?php echo site_url('admin/data_ikan') ?>"><span class="menu-title">Data Ikan</span></a>
            <li class="nav-item"><a class="nav-link" href="<?php echo site_url('admin/Data_checkout') ?>"><span class="menu-title">Data Checkout</span></a>
            <li class="nav-item"><a class="nav-link" href="<?php echo site_url('admin/invoice') ?>"><span class="menu-title">Data Penjualan</span></a>
            <li class="nav-item"><a class="nav-link" href="<?php echo site_url('admin/Informasi') ?>"><span class="menu-title">Data Informasi</span></a>

          </ul>
        </div>
      </li>
      
      <!-- <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('admin/data_ikan')?>">
          <i class="icon-layout menu-icon"></i>
          <span class="menu-title">Data Ikan</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('admin/Data_checkout')?>">
          <i class="icon-layout menu-icon"></i>
          <span class="menu-title">Data Checkout</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('admin/invoice') ?>">
          <i class="icon-layout menu-icon"></i>
          <span class="menu-title">Data Penjualan</span>
        </a>
      </li>-->
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#tambah_ikan">
          <i class="icon-layout menu-icon"></i>
          <span class="menu-title">Download Transaksi</span>

        </a>
      </li>
    </ul>
  </nav>
  <!-- partial -->