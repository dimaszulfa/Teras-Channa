<!-- start main1 -->
<div class="main_bg1">
    <div class="wrap">
        <div class="main1">
            <h2>Produk kami</h2>
        </div>
    </div>
</div>
<!-- start main -->
<div class="main_bg">
    <div class="wrap">
        <div class="main">
            <!-- start grids_of_3 -->
            <?php foreach ($data->result()  as $ikan) : ?>
                <div class="grids_of_3">
                    <div class="grid1_of_3">
                        <a href="<?= base_url('dashboard/detail/') . $ikan->id ?>"><img src="<?= base_url() . 'uploads/' . $ikan->gambar ?>" alt="" /></a>
                        <h3><?= $ikan->nama ?></h3>
                        <div class="price">
                            <h4>Rp. <?= number_format($ikan->harga, 0, ",", ".") ?></h4>
                        </div>

                        <div class="price">
                            <h4>
                                <?php if ($ikan->stok <= 0) { ?><span style="background-color:grey"><a style="text-decoration:none; color:white"> Sold</a></span><?php } ?>
                                <?php if ($ikan->stok > 0) { ?><span style="background-color:#3CC395"><a style="text-decoration:none; color:white" href="<?= base_url('dashboard/tambah_keranjang/' . $ikan->id) ?>"> Keranjang</a></span><?php } ?>
                            </h4>
                        </div>


                        <span class="b_btm"></span>

                    </div>

                <?php endforeach; ?>
                </div>
                <div class="clear"></div>
                <?= $pagination ?>

        </div>
    </div>
</div>
</div>
</div>
</div>