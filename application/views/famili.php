<!-- start main1 -->
<div class="main_bg1">
    <div class="wrap">
        <div class="main1">
            <h2>featured products</h2>
        </div>
    </div>
</div>
<!-- start main -->
<div class="main_bg">
    <div class="wrap">
        <div class="main">
            <!-- start grids_of_3 -->
            <?php foreach ($famili as $ikan) : ?>
                <div class="grids_of_3">
                    <div class="grid1_of_3">
                        <a href="<?= base_url('dashboard/detail/') . $ikan->id ?>"><img src="<?= base_url() . 'uploads/' . $ikan->gambar ?>" alt="" /></a>
                        <h3><?= $ikan->nama ?></h3>
                        <div class="price">
                            <h4>Rp. <?= number_format($ikan->harga, 0, ",", ".") ?></h4>
                        </div>

                        <!-- <button type="button" class="btn btn-primary">
                            <h4 style="color:white">Beli</h4>
                        </button> -->
                        <div class="price">
                            <h4>
                                <span style="background-color: #007BFF;">Beli</span>
                                <span style="background-color:#3CC395"><a style="text-decoration:none; color:white" href="<?= base_url('dashboard/tambah_keranjang/' . $ikan->id) ?>"> Keranjang</a></span>
                            </h4>
                        </div>
                        <!-- <button type="button" class="btn btn-success">
                            <h4 style="color:white"><a style="color:white" href="<?= base_url('dashboard/tambah_keranjang/' . $ikan->id) ?>">Tambah Ke Keranjang</a></h4>
                            </button> -->

                        <span class="b_btm"></span>

                    </div>

                <?php endforeach; ?>
                </div>
                <div class="clear"></div>

                <!-- end grids_of_3 -->
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center pagination-lg">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
        </div>
    </div>
</div>
</div>
</div>
</div>