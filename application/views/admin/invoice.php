
<div class="col-lg-10 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Invoice Pemesanan</h4>
             
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Invoice</th>
                          <th>Nama Pengguna</th>
                          <th>Alamat Pengiriman</th>
                          <th>Tanggal Pemesanan</th>
                          <th>Status Transaksi</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php $no = 1; foreach ($invoice as $inv):?>
                        <tr>   
                        <td><?php echo $no++?></td>                    
                        <td><?php echo $inv->order_id?></td>                    
                        <td><?php echo $inv->nama?></td>                    
                        <td><?php echo $inv->alamat?></td>                    
                        <td><?php echo $inv->tgl_pesan?></td>                    
                        <td><?php
                        if($inv->transaction_status == 'expire'){
                          echo '<label class="badge badge-danger">Expire</label>';
                        } elseif($inv->transaction_status == 'settlement'){
                          echo '<label class="badge badge-success">Settlement</label>';
                        } elseif($inv->transaction_status == 'pending'){
                          echo '<label class="badge badge-warning">Pending</label>';
                        }?>
                      </td>                         <td><a href="<?=base_url().'admin/invoice/detail/'.$inv->order_id?>"><div class="btn btn-primary">Detail</div></td></a>            
                        </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            </div>
              </div>
