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
                <table class="table table-bordered table-striped table-hover">

                    <tr>
                        <th>No</th>
                        <th>No. Invoice</th>
                        <th>Waktu Transaksi</th>
                        <th>Status Transaksi</th>
                        <th>Harga</th>
                        <th>Kode Pembayaran</th>
                        <th>No Resi</th>
                        <th>Detail Barang</th>
                    </tr>
                    <?php if ($checkout) {
                        $no = 1;
                        $res = 0;
                        foreach ($checkout as $chk) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $chk->order_id ?></td>
                                <td><?= $chk->transaction_time ?></td>
                                <td><?php
                                    if ($chk->transaction_status == 'expire') {
                                        echo '<label class="badge badge-danger">Expire</label>';
                                    } elseif ($chk->transaction_status == 'settlement') {
                                        echo '<label class="badge badge-success">Berhasil</label>';
                                    } elseif ($chk->transaction_status == 'pending') {
                                        echo '<label class="badge badge-warning">Pending</label>';
                                    } ?></td>
                                <td><?= 'Rp' . ' ' . number_format($chk->gross_amount, 2, '.', ',') ?></td>
                                <td><?= $chk->bank.'-'.$chk->va_number ?></td>
                                <td><?= $invoice[$res++]->resi ?></td>
                                <td><a href="<?= base_url() . 'dashboard/detail_pesanan_user/' . $chk->order_id ?>">
                                        <div class="btn btn-primary">Detail</div>
                                </td></a>

                        <?php   }
                    } ?>
                            </tr>

                </table>
            </div>

        </div>
    </div>
</div>
</div>