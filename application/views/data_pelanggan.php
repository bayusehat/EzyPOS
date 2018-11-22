        <div class="animated fadeIn">
                <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Pelanggan</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Nomor</th>
                        <th>Nama Pelanggan</th>
                        <th>Nomor Telepon</th>
                        <th>Store ID</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      $no = 1;
                      for($i=1;$i<=4;$i++){
                      echo '
                      <tr>
                        <td>'.$no.'</td>
                        <td>Tiger Nixon</td>
                        <td>085812764859</td>
                        <td>211</td>
                        <td>
                          <button class="btn btn-success btn-action" data-toggle="modal" data-target="#editPelanggan"><span class="fa fa-search"></span> Detail</button>
                          <button class="btn btn-danger btn-action"><span class="fa fa-trash-o"></span> Hapus</button>
                        </td>
                      </tr>';
                      $no++;}
                      ?>
                    </tbody>
                    
                  </table>
                  <div class="pagination">
                    <a href=""><</a>
                    <a href="#">1</a>
                    <a href="">2</a>
                    <a href="">3</a>
                    <a href="">4</a>
                    <a href="">></a>
                  </div>
                  <a href="#" class="float" data-toggle="modal" data-target="#tambahPelanggan">
                  <i class="fa fa-plus my-float"></i>
                  </a>
                        </div>
                    </div>
                </div>
                </div>
            </div><!-- .animated -->
<!-- modal tambah pelanggan -->
<div class="modal fade" id="tambahPelanggan" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" style="text-align: center">Tambah Pelanggan</h4>
        </div>
        <div class="modal-body">
          <form action="" method="">
            <input type="text" name="nama_pelanggan" placeholder="Nama Pelanggan" class="form-control new-form">
            <input type="text" name="nomor_telepon" placeholder="Nomor Telepon" class="form-control new-form">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          <input type="submit" name="tambah" value="Tambah" class="btn btn-info">
        </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- modal ubah pelanggan -->
<div class="modal fade" id="editPelanggan" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" style="text-align: center">Detail & Ubah Pelanggan</h4>
        </div>
        <div class="modal-body">
          <form action="" method="">
            <input type="text" name="nama_pelanggan" placeholder="Nama Pelanggan" class="form-control new-form">
            <input type="text" name="nomor_telepon" placeholder="Nomor Telepon" class="form-control new-form">
            <input type="text" name="store_id" placeholder="Store" class="form-control new-form">
            <div class="col-sm-6">
              <img class="img-responsive" alt="barcode" src="<?php echo base_url(); ?>assets/images/barcode.png">
            </div>
            <div class="col-sm-6">
              <h4>Scan Barcode</h4>
              <p style="color: red;">
                barcode untuk data pelanggan
              </p>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          <input type="submit" name="simpan" value="Simpan" class="btn btn-info">
        </form>
        </div>
      </div>
    </div>
  </div>
</div>