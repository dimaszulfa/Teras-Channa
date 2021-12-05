
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
                <a href="details.html">
                    <img src="<?=base_url().'uploads/'.$ikan->gambar?>" alt=""/>
                    <h3><?= $ikan->nama?></h3>
                    <div class="price">
                        <h4>Rp. <?= $ikan->harga?><span>BELI</span></h4>
                    </div>
                    <span class="b_btm"></span>
                </a>
            </div>
            <?php endforeach; ?>
            <div class="clear"></div>
        </div>  
        <!-- end grids_of_3 -->
<div class="demo">
    <nav class="pagination-outer" aria-label="Page navigation">
        <ul class="pagination">
            <li class="page-item">
                <a href="#" class="page-link" aria-label="Previous">
                    <span aria-hidden="true">«</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item active"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item">
                <a href="#" class="page-link" aria-label="Next">
                    <span aria-hidden="true">»</span>
                </a>
            </li>
        </ul>
    </nav>
</div>
    </div>
</div>
</div>
</div>  
