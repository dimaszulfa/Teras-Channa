


<div class="col-lg-10 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Invoice Pemesanan</h4>
             
                  <div class="flash-data" data-flashdata="<?=$this->session->flashdata('resi')?>"></div>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Invoice</th>
                          <th>Nama Pengguna</th>
                          <th>Alamat Pengiriman</th>
                          <th>Tanggal Pemesanan</th>
                          <th>Resi</th>
                          <th>Status Transaksi</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php $no = 1; foreach ($invoice as $inv):?>
                        <tr>   
                        <td><?php echo $no++?></td>                    
                        <td><?php echo $inv->order_id?></td>                    
                        <td><?php echo $inv->nama?></td>                    
                        <td><?php echo $inv->alamat?></td>                    
                        <td><?php echo $inv->tgl_pesan?></td>                    
                        <td><?php echo $inv->resi?></td>                    
                        <td><?php
                        if($inv->transaction_status == 'expire'){
                          echo '<label class="badge badge-danger">Expire</label>';
                        } elseif($inv->transaction_status == 'settlement'){
                          echo '<label class="badge badge-success">Settlement</label>';
                        } elseif($inv->transaction_status == 'pending'){
                          echo '<label class="badge badge-warning">Pending</label>';
                        }?>
                      </td>                         
                      <td><a href="<?=base_url().'admin/invoice/detail/'.$inv->order_id?>"><div class="btn btn-primary">Detail</div></td></a>            
                      <td>
                      <button type="button" class="btn btn-primary" data-id="<?php echo $inv->order_id ?>" data-toggle="modal" data-target="#tambah_ikan<?php echo $inv->order_id; ?>">Tambah Resi</button> 
                       
                    </td></a>            
                        </tr>
                        <!-- Modal -->
                    <div class="modal fade" id="tambah_ikan<?php echo $inv->order_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Tambah Resi</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close" <?=$edit="submit"?>
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <form action="<?= base_url().'admin/invoice/addresi/'.$inv->order_id?>" class="forms-sample"  method="post" enctype="multipart/form-data">
                            <div class='error_msg'>
                            </div>              
                            <div class="form-group">
                              <label for="exampleInputUsername1">Nomor Resi</label>
                              <input type="number" class="form-control" id="resi" name="resi" placeholder="Resi" >
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary"   id='submit' >Submit</button>
                            </div>
                            </form>           
                          </div>
                          </div>
                        </div>
                      </div>  
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
          
                      
