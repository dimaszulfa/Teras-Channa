<!-- start main -->
<div class="main_bg">
<div class="wrap">	
	<div class="main">
	<!-- start content -->
	<div class="single">
			<!-- start span1_of_1 -->
			<div class="left_content">
			<div class="span1_of_1">
				<!-- start product_slider -->
				<div class="product-view">
				    <div class="product-essential">
				        <div class="product-img-box">
				    <div class="more-views" style="float:left;">
				        <div class="more-views-container">
				        <ul>
				            <li>
				            	<a class="cs-fancybox-thumbs" data-fancybox-group="thumb" style="width:64px;height:85px;" href=""  title="" alt="">
				            	<img src="" src_main=""  title="" alt="" /></a>            
				            </li>
				            <li>
				            	<a class="cs-fancybox-thumbs" data-fancybox-group="thumb" style="width:64px;height:85px;" href=""  title="" alt="">
				            	<img src="" src_main=""  title="" alt="" /></a>
				            </li>
				            <li>
				            	<a class="cs-fancybox-thumbs" data-fancybox-group="thumb" style="width:64px;height:85px;" href=""  title="" alt="">
				            	<img src="" src_main=""  title="" alt="" /></a> 
				            </li>
				            <li>
				            	<a class="cs-fancybox-thumbs" data-fancybox-group="thumb" style="width:64px;height:85px;" href=""  title="" alt="">
				            	<img src="" src_main="" title="" alt="" /></a>  
				            </li>
				            <li>
				            	<a class="cs-fancybox-thumbs" data-fancybox-group="thumb" style="width:64px;height:85px;" href=""  title="" alt="">
				            	<img src="" src_main="" title="" alt="" /></a>
				            </li>
				          </ul>
				        </div>
				    </div>
				    <div class="product-image"> 
				        <a class="cs-fancybox-thumbs cloud-zoom" rel="adjustX:30,adjustY:0,position:'right',tint:'#202020',tintOpacity:0.5,smoothMove:2,showTitle:true,titleOpacity:0.5" data-fancybox-group="thumb" href="<?=base_url()?>assets/images/<?=$data->gambar?>" title="<?=$data->nama?>" alt="<?=$data->nama?>">
				           	<img src="	<?=base_url()?>uploads/<?=$data->gambar?>" alt="<?=$data->nama?>" title="<?=$data->nama?>" />
				        </a>
				   </div>
				
				</div>
				</div>
				</div>
				<!-- end product_slider -->
			</div>
			<!-- start span1_of_1 -->
			<div class="span1_of_1_des">
				  <div class="desc1">
					<h3><?=$data->nama?></h3>
					<p><?=$data->keterangan?></p>
					<h5>Rp. <?=number_format($data->harga,0,",",".")?></h5>
					<div class="available">
				
						<div class="btn_form">
							<form method="post" action="<?= base_url('dashboard/tambah_keranjang/' . $data->id) ?>">
								<input type="submit" value="Tambah ke keranjang" title="" />
							</form>
						</div>

						<div class="clear"></div>
					</div>
					<div class="share-desc">
						<div class="share">
							<h4>Bagikan :</h4>
							<ul class="share_nav">
								<li><a href="#"><img src="<?=base_url()?>assets/images/facebook.png" title="facebook"></a></li>
								<li><a href="#"><img src="<?=base_url()?>assets/images/twitter.png" title="Twiiter"></a></li>
								<li><a href="#"><img src="<?=base_url()?>assets/images/rss.png" title="Rss"></a></li>
								<li><a href="#"><img src="<?=base_url()?>assets/images/gpluse.png" title="Google+"></a></li>
				    		</ul>
						</div>
						<div class="clear"></div>
					</div>
			   	 </div>
			   	</div>
			   	<div class="clear"></div>
			   	<!-- start tabs -->
				   	<section class="tabs">
		            <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked">
			        <label for="tab-1" class="tab-label-1">Keterangan</label>
					
		            
	          
				    <div class="clear-shadow"></div>
					
			        <div class="content">
				        <div class="content-1">
				        	<p class="para top"><?=$data->keterangan?></p>
							<ul>
							<li>Jenis : <?=$data->famili?></li>
							<li>Ukuran : <?=$data->ukuran?> cm</li>
							<li>Berat : <?=$data->berat?> kg</li>
							<li>Usia : <?=$data->usia?> bulan</li>
							<li>Stok : <?=$data->stok?></li>
							</ul>
							<div class="clear"></div>
						</div>
				      
			        </div>
			        </section>
		         	<!-- end tabs -->
			   	</div>
				   <div class="clear"></div>
	       </div>	
	<!-- end content -->
	</div>
</div>