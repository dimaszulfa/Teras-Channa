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
            <?php foreach ($ikans as $ikan) : ?>
                <div class="grids_of_3">
                    <div class="grid1_of_3">
                        <div class="price">
                            <br>
                            <h4 style="color:black"><?= $ikan->nama ?></h4>
                            <img src="<?= base_url() . 'uploads/' . $ikan->gambar ?>" alt="" />
                            <h4>Rp. <?= $ikan->harga ?></h4>
                            <button type="button" class="btn btn-primary">
                                <h4 style="color:white">Beli</h4>
                            </button> <button type="button" class="btn btn-success">
                                <h4 style="color:white">Tambah Ke Keranjang</h4>
                            </button>

                        </div>
                    </div>

                <?php endforeach; ?>
                <div class="clear"></div>
                </div>
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