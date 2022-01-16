<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Halaman Admin</title>
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/admin/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/css/vertical-layout-light/style.css">
</head>
<div class="col grid-margin stretch-card">
  <div class="card">
    <div class="card-body">

      <h4 class="card-title">Informasi</h4>

      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Tambah Informasi
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Data Informasi</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="<?= base_url() . 'admin/Informasi/tambah_aksi' ?>" class="forms-sample" method="post" enctype="multipart/form-data">
                <div class='error_msg'>
                </div>
                <div class="form-group">
                  <label for="exampleInputUsername1">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Informasi">
                </div>
                <div>
                  <label class="form-label" for="customFile">Gambar</label>
                  <input type="file" class="form-control" id="gambar" name="gambar" />
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" id='submit'>Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>

      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Waktu Postingan</th>
              <th>Gambar</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1;
            foreach ($info as $inf) : ?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $inf->nama ?></td>
                <td><?php echo $inf->waktu_posting  ?></td>
                <th><a href="#" class="pop"><img src="<?= base_url('uploads/' . $inf->gambar) ?>" style="width:200px;height:400px;" /></a>

                  <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-body">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                          <img src="" class="imagepreview" style="width: 100%;">
                        </div>
                      </div>
                    </div>
                  </div>

                </th>
                <td>
                  <button type="button" class="btn btn-danger"><b><a style="color:white" class="tombol-hapus" href="<?= site_url('admin/informasi/delete/' . $inf->id) ?>">Delete</a></b></button>
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