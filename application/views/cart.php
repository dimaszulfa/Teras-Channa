
<!-- start main1 -->
<div class="main_bg1">
<div class="wrap">  
    <div class="main1">
        <h2>Keranjang Belanja</h2>
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

    </div>
</div>
</div>
</div>  
