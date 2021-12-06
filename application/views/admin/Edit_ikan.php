<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Ubah Data</h4>
                  <?php foreach($ikan as $ikn) :?>
                  <form method="post" action="<?= base_url().'admin/data_ikan/update'?>" class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputNama1">Nama</label>
                      <input type="text" name="Nama" class="form-control" id="exampleInputNama1" placeholder="Nama">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFamili1">Famili</label>
                      <input type="text" name="Famili" class="form-control" id="exampleInputFamili1" placeholder="Famili">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUkuran1">Ukuran</label>
                      <input type="text" name="Ukuran" class="form-control" id="exampleInputUkuran1" placeholder="Ukuran">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputBerat1">Berat</label>
                      <input type="text" name="Berat" class="form-control" id="exampleInputBerat1" placeholder="Berat">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsia1">Usia</label>
                      <input type="text" name="Usia" class="form-control" id="exampleInputUsia1" placeholder="Usia">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputHarga1">Harga</label>
                      <input type="text" name="Harga" class="form-control" id="exampleInputHarga1" placeholder="Harga">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputStok1">Stok</label>
                      <input type="text" name="Stok" class="form-control" id="exampleInputStok1" placeholder="Stok">
                    </div>
                    <div>
                    <label class="form-label" for="customFile">Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="gambar" />   
                    </div>    
                    <div class="form-group">
                      <label for="exampleKeterangan1">Keterangan</label>
                      <textarea name ="Keterangan" class="form-control" id="exampleKeterangan1" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2" name="ubah">Ubah</button>
                    <button class="btn btn-light">Batal</button>
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