<div class="main-panel">
<div class="content-wrapper">
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah_ikan">Tambah Data Ikan</button>
<?php
	$edit="submit";
  $nama="";
  $ukuran="";
  $berat="";
  $usia="";
  $harga="";
  $stok="";
  $gambar="";
?>
<!-- Modal -->
<div class="modal fade" id="tambah_ikan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Ikan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" <?=$edit="submit"?>
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= base_url().'admin/data_ikan/tambah_aksi'?>" class="forms-sample"  method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Nama</label>
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Ikan" value="<?=$nama?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Famili</label>
                      <input type="text" class="form-control" id="Famili" name="Famili" placeholder="Famili" value="<?=$nama?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Ukuran</label>
                      <input type="number" class="form-control" id="ukuran" name="ukuran" placeholder="Ukuran(CM)">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Berat</label>
                      <input type="number" class="form-control" id="berat" name="berat" placeholder="Berat(Gr)">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Usia</label>
                      <input type="number" class="form-control" id="usia" name="usia" placeholder="Usia(Bln)">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Harga</label>
                      <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga(IDR)">
                    </div>   
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Stok</label>
                      <input type="number" class="form-control" id="stok" name="stok" placeholder="Stock">
                    </div>                    
                    <div>
                    <label class="form-label" for="customFile">Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="gambar" />   
                    </div>    
                    <div class="form-group">
                      <label for="exampleKeterangan1">Keterangan</label>
                      <textarea name ="Keterangan" class="form-control" id="exampleKeterangan1" rows="4"></textarea>
                    </div>
                    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id=<?=$edit?>'><?=$edit?></button>
      </div>
      </form>           
    </div>
    </div>
  </div>
</div>


          <div class="mt-4 row">
            
          <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">

                  <h4 class="card-title">Data Ikan Channa</h4>
                  <p class="card-description">
                  </p>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Famili</th>
                          <th>Ukuran</th>
                          <th>Berat</th>
                          <th>Usia</th>
                          <th>Harga</th>
                          <th>Stok</th>
                          <th>Gambar</th>
                          <th>Keterangan</th>
                          <th colspan="2"><center>Action</center></th>
                        </tr>
                      </thead>
                      <tbody>
                          
                          <?php $no=1; foreach ($ikan as $fish) :?>
                        <tr>
                          <td><?= $no++?></td>
                          <td><?=$fish->nama?></td>
                          <td><!--<?=$fish->nama?>--></td>
                          <td><?=$fish->ukuran?></td>
                          <td><?=$fish->berat?></td>
                          <td><?=$fish->usia?></td>
                          <td><?=$fish->harga?></td>
                          <td><?=$fish->stok?></td>
                          <td><img src="<?=base_url('uploads/'.$fish->gambar)?>"width="720" height="480" /></td>
                          <td><!--<?=$fish->nama?>--></td>
                          <td><center>
                          <button type="button" class="btn btn-inverse-info btn-fw" data-toggle="modal" data-target="#update_ikan" ><a href="<?= site_url('admin/data_ikan/edit/'.$fish->id)?>">Update Data Ikan</a></button>
                <button type="button" class="btn btn-inverse-danger btn-fw">Delete</button></center>
              </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div> 
</div>
</div>
<!-- content-wrapper ends -->
      

