
<!-- start main1 -->
<div class="main_bg1">
<div class="wrap">  
    <div class="main1">
        <h2>Pesanan Saya</h2>
    </div>
</div>
</div>
<!-- start main -->
<div class="main_bg">
<div class="wrap">  
    <div class="main">
        <div class="container-fluid">
            <h4>Keranjang Belanja</h4>
            <table class="table table-bordered table-striped table-hover">

                <tr>
                <th>No</th>
                          <th>Nama Ikan</th>
                          <th>Jumlah</th>
                          <th>Harga satuan</th>
                          <th>Sub-total</th>
                </tr>
                <?php $total = 0; $no = 1; foreach ($pesanan as $psn): $subtotal=$psn->jumlah*$psn->harga; $total += $subtotal;?>
                <tr>
                        <td><?php echo $no++?></td>                    
                        <td><?php echo $psn->nama?></td>                    
                        <td><?php echo $psn->jumlah?></td>                    
                        <td align="right"><?php echo 'Rp.'.number_format($psn->harga,2,',','.')?></td>                    
                        <td align="right"><?php echo 'Rp.'.number_format($subtotal, 2,',','.')?></td>   

                    <?php endforeach; ?>
                    <tr>
                            <td align="right" colspan="4" align="left">Grand Total</td>
                            <td align="right">Rp. <?= number_format($total,0,',','.')?></td>
                        </tr>

                </tr>

            </table>
            <div align="right">
            <a href="<?= base_url('dashboard/pesanan')?>"><div class="btn btn-primary text-center">Kembali ke pesanan saya</div></a>
            </div>
        </div>

    </div>
</div>
</div>
</div>  
