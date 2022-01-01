
<div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Invoice Pemesanan</h4>
                  <p class="card-description">
                    Add class <code>.table-hover</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Nama Pengguna</th>
                          <th>Alamat Pengiriman</th>
                          <th>Tanggal Pemesanan</th>
                          <th>Batas Pembayaran</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php foreach ($invoice as $inv):?>
                        <tr>   
                        <td><?php echo $inv->id?></td>                    
                        <td><?php echo $inv->nama?></td>                    
                        <td><?php echo $inv->alamat?></td>                    
                        <td><?php echo $inv->tgl_pesan?></td>                    
                        <td><?php echo $inv->batas_bayar?></td>    
                        <td><a href="<?=base_url().'admin/invoice/detail/'.$inv->id?>"><div class="btn btn-primary">Detail</div></td></a>            
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
