
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
                    <th>No. Invoice</th>
                    <th>Waktu Transaksi</th>
                    <th>Status Transaksi</th>
                    <th>No Resi</th>
                    <th>Harga</th>
                    <th>Detail Barang</th>
                </tr>
                <!-- <?php
                $no=0;
                foreach ($this->cart->contents() as $items) : ?>
                <tr>
                    <td><?= $no++?></td>
                    <td><?=  $items['name']?></td>
                    <td><?=  $items['qty']?></td>
                    <td align="right">Rp. <?=number_format($items['price'], 0, ',','.')?></td>
                    <td align="right">Rp. <?= number_format($items['subtotal'], 0, ',','.')?></td>
                </tr>
                <?php endforeach; ?>
                <tr><td colspan="4"></td>
                    <td align="right">Rp. <?= number_format($this->cart->total()), 0, ',','.'?></td>
                </tr> -->
            </table>
            <div align="right">
            <a href="<?= base_url('dashboard/hapus_keranjang')?>"><div class="btn btn-danger text-center">Hapus Keranjang</div></a>
            <a href="<?= base_url('dashboard/index')?>"><div class="btn btn-primary text-center">Lanjutkan belanja</div></a>
            <a href="<?= base_url('dashboard/pembayaran')?>"><div class="btn btn-success text-center">Pembayaran</div></a>
            </div>
        </div>

    </div>
</div>
</div>
</div>  
