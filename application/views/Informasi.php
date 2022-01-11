<link rel="stylesheet" href="<?= base_url()?>assets/css/info.css">

<!------ Include the above in your HEAD tag ---------->
<br>
        <div class="container mt-5" >
          <div class="row blog">
            <div class="col-md-12">
              <div id="blogCarousel" class="carousel slide container-blog" data-ride="carousel">    
                <!-- Carousel items -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row">
                        <?php foreach($info as $inf) :?>
                      <div class="col-md-4" >
                        <div class="item-box-blog">
                          <div class="item-box-blog-image">
                            <!--Date-->
                            <div class="item-box-blog-date bg-blue-ui white"> <span class="mon"><?= $inf->waktu_posting?></span> </div>
                            <!--Image-->
                            <figure><a href="#" class="pop"><img alt="" src="<?=base_url().'uploads/'.$inf->gambar?>"></a></figure>


                            
                          </div>
                          <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                                <h5><?= $inf->nama?></h5>
                            </div>
                          
                            <!--Read More Button-->
                          </div>
                        </div>
                      </div>
                      <?php endforeach;?>
                    </div>
                    <!--.row-->
                  </div>
                  <!--.item-->
                </div>
                <!--.carousel-inner-->
              </div>
              <!--.Carousel-->
            </div>
          </div>
        </div>
   
        <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">              
      <div class="modal-body">
      	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <img src="" class="imagepreview" style="width: 100%;" >
      </div>
    </div>
  </div>
</div>
