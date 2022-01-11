<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Halaman Admin</title>
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="<?= base_url()?>assets/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/admin/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/admin/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url()?>assets/admin/css/vertical-layout-light/style.css">
</head>
<div class="col grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Checkout</h4>
                  <p><?= $this->session->flashdata('messagetransaksi');?></p>
                  <form action="<?=base_url('admin/data_checkout/cekstatus')?>" method="post">
  <div class="row my-2">
    <div class="col-4">
      <input type="text" class="form-control" placeholder="Cek status pembayaran" name="order_id">
    </div>
    <div class="col-4">
    <button class="btn btn-primary">Cari</button>
  </div>
  </div>
</form>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>No Invoice</th>
                          <th>Nama pengguna</th>
                          <th>Total Harga</th>
                          <th>Tipe Pembayaran</th>
                          <th>Bank</th>
                          <th>Nomor VA</th>
                          <th>Kode Biller</th>
                          <th>Status Transaksi</th>
                          <th>Waktu Transaksi</th>
                          <th>URL Pdf</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php $no = 1; foreach ($checkout as $inv):?>
                        <tr>   
                        <td><?php echo $no++?></td>                    
                        <td><?php echo $inv->order_id?></td>                    
                        <td><?php echo $inv->user?></td>                    
                        <td><?php echo 'Rp'.number_format($inv->gross_amount,2,'.',',')?></td>                    
                        <td><?php echo $inv->payment_type?></td>                    
                        <td><?php echo $inv->bank?></td>    
                        <td><?php echo $inv->va_number?></td>    
                        <td><?php echo $inv->biller_code?></td>    
                        <td><?php
                        if($inv->transaction_status == 'expire'){
                          echo '<label class="badge badge-danger">Expire</label>';
                        } elseif($inv->transaction_status == 'settlement'){
                          echo '<label class="badge badge-success">Settlement</label>';
                        } elseif($inv->transaction_status == 'pending'){
                          echo '<label class="badge badge-warning">Pending</label>';
                        }?>
                      </td>    
                        <td><?php echo $inv->transaction_time?></td>    
                        <td><div class="btn btn-primary"><a style="color: white;" href="<?= $inv->pdf_url?>">Download</a></div></td>          
                        </tr>
                        
                        <?php endforeach; ?>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              </div>
              </div>
