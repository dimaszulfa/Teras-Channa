
<div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Detail Pemesanan<br> <div class="btn-success">No. Invoice: <?= $invoice->order_id?></div></h4>
                 
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Jumlah</th>
                          <th>Harga satuan</th>
                          <th>Sub-total</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php $total = 0; $no = 1; foreach ($pesanan as $psn): $subtotal=$psn->jumlah*$psn->harga; $total += $subtotal;?>
                        <tr>   
                        <td><?php echo $no++?></td>                    
                        <td><?php echo $psn->nama?></td>                    
                        <td><?php echo $psn->jumlah?></td>                    
                        <td><?php echo number_format($psn->harga,0,',','.')?></td>                    
                        <td><?php echo number_format($subtotal, 0,',','.')?></td>    
                        </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td colspan="4" align="right">Grand Total</td>
                            <td align="right">Rp. <?= number_format($total,0,',','.')?></td>
                        </tr>
                      </tbody>
                    </table>
                    <a href="<?=base_url().'admin/invoice/index'?>"><div class="btn btn-primary">Kembali</div></a>
                  </div>
                </div>
              </div>
              </div>
              </div>
