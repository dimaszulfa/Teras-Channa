
<div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Detail Pemesanan <div class="btn-success">No. Invoice: <?= $invoice->id?></div></h4>
                  <p class="card-description">
                    Add class <code>.table-hover</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>id</th>
                          <th>Nama</th>
                          <th>Jumlah</th>
                          <th>Harga satuan</th>
                          <th>Sub-total</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?= var_dump($pesanan)?>
                          <?php $total = 0; foreach ($pesanan as $psn): $subtotal=$psn->jumlah*$psn->harga; $total += $subtotal;?>
                        <tr>   
                        <td><?php echo $psn->id?></td>                    
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
