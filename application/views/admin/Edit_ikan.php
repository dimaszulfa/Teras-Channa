<?php
	$nama="";$famili="";$ukuran="";$berat="";$usia="";$harga="";
  $stok="";$gambar="";$keterangan="";
  $id=$this->uri->segment(4)
	?>
<<<<<<< Updated upstream
  <div class="main-panel">        
=======
   <link rel="stylesheet" href="<?= base_url()?>assets/css/styleform.css">
   <div class="main-panel">        
>>>>>>> Stashed changes
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Ubah Data</h4>
                  <?php foreach($ikan as $ikn) :?>
                  <form method="post" class="forms-sample" enctype="multipart/form-data">
                    <div class="form-group">
<<<<<<< Updated upstream
                      <label for="exampleInputNama1">Nama</label>
                      <input type="text" value="<?=$ikn->nama?>" name="nama" class="form-control" id="nama" placeholder="Nama">
=======
                      <label for="exampleInputNama1">Nama</span></label>
                      <input type="text" value="<?=$ikn->nama?>" name="nama" class="<?= form_error('nama') ? 'invalid' : '' ?>" id="nama" placeholder="Nama">
                      <div style="color: red;"><?= form_error('nama'); ?></div>
>>>>>>> Stashed changes
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFamili1">Famili</label>
                      <input type="text" value="<?=$ikn->famili?>" name="famili" class="form-control" id="exampleInputFamili1" placeholder="Famili">
<<<<<<< Updated upstream
=======
                      <div style="color: red;"><?= form_error('famili'); ?></div>
>>>>>>> Stashed changes
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUkuran1">Ukuran</label>
                      <input type="number" value="<?=$ikn->ukuran?>" name="ukuran" class="form-control" id="exampleInputUkuran1" placeholder="Ukuran">
<<<<<<< Updated upstream
=======
                      <div style="color: red;"><?= form_error('ukuran'); ?></div>
>>>>>>> Stashed changes
                    </div>
                    <div class="form-group">
                      <label for="exampleInputBerat1">Berat</label>
                      <input type="number" value="<?=$ikn->berat?>" name="berat" class="form-control" id="exampleInputBerat1" placeholder="Berat">
<<<<<<< Updated upstream
=======
                      <div style="color: red;"><?= form_error('berat'); ?></div>
>>>>>>> Stashed changes
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsia1">Usia</label>
                      <input type="number" value="<?=$ikn->usia?>" name="usia" class="form-control" id="exampleInputUsia1" placeholder="Usia">
<<<<<<< Updated upstream
=======
                      <div style="color: red;"><?= form_error('usia'); ?></div>
>>>>>>> Stashed changes
                    </div>
                    <div class="form-group">
                      <label for="exampleInputHarga1">Harga</label>
                      <input type="number" value="<?=$ikn->harga?>" name="harga" class="form-control" id="exampleInputHarga1" placeholder="Harga">
<<<<<<< Updated upstream
=======
                      <div style="color: red;"><?= form_error('harga'); ?></div>
>>>>>>> Stashed changes
                    </div>
                    <div class="form-group">
                      <label for="exampleInputStok1">Stok</label>
                      <input type="number" value="<?=$ikn->stok?>" name="stok" class="form-control" id="exampleInputStok1" placeholder="Stok">
<<<<<<< Updated upstream
=======
                      <div style="color: red;"><?= form_error('stok'); ?></div>
>>>>>>> Stashed changes
                    </div>
                    <div>
                    <label class="form-label" for="customFile">Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="gambar" value="<?=$ikn->gambar?>"/>   
<<<<<<< Updated upstream
                    </div>    
                    <div class="form-group">
                      <label for="exampleKeterangan1">Keterangan</label>
                      <textarea name ="keterangan" value="<?=$ikn->keterangan?>" class="form-control" id="exampleKeterangan1" rows="4"></textarea>
                    </div>
                    <input type="submit" class="btn btn-primary mr-2" name="submit">
                    <button class="btn btn-light">Batal</button>
=======
                    <div style="color: red;"><?= form_error('gambar'); ?></div>
                  </div>    
                    <div class="form-group">
                      <label for="exampleKeterangan1">Keterangan</label>
                      <textarea name ="keterangan" class="form-control" id="exampleKeterangan1" rows="4"><?=$ikn->keterangan?></textarea>
                      <div style="color: red;"><?= form_error('keterangan'); ?></div>
                    </div>
                    <center><input type="submit" class="btn btn-primary mr-2" name="submit">
>>>>>>> Stashed changes
                  </form>
                  <?php endforeach;?>
                </div>
              </div>
            </div>
          </div>
        </div> 
      </div>      
    </div>      
  </div>      