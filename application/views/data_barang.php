            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Barang</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Nomor</th>
                        <th>Nama Barang</th>
                        <th>Harga Beli</th>
                        <th>Harga Jual</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      $no = 1;
                      for($i=1;$i<=4;$i++){
                      echo'
                      <tr>
                        <td>'.$no.'</td>
                        <td>Sate Ayam</td>
                        <td>11.000</td>
                        <td>12.000</td>
                        <td>Jual</td>
                        <td>
                          <button class="btn btn-success btn-action" data-toggle="modal" data-target="#editBarang"><span class="fa fa-search"></span> Detail & Ubah</button>
                          <button class="btn btn-danger btn-action"><span class="fa fa-trash-o"></span> Hapus</button>
                        </td>
                      </tr>';
                      $no++;
                    }
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
                  <a href="#" class="float" data-toggle="modal" data-target="#tambahBarang"">
                  <i class="fa fa-plus my-float"></i>
                  </a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- .animated -->
<!-- Tambah barang --> 
<div class="modal fade" id="tambahBarang" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" style="text-align: center">Tambah Barang</h4>
        </div>
        <div class="modal-body">
          <form action="" method="">
            <input type="text" name="nama_barang" placeholder="Nama Barang" class="form-control new-form">
            <input type="text" name="harga_beli" placeholder="Harga Beli" class="form-control new-form">
            <input type="text" name="harga_jual" placeholder="Harga Jual" class="form-control new-form">
            <input type="text" name="status" placeholder="Status" class="form-control new-form">
            <input type="text" name="kategori" placeholder="Kategori" class="form-control new-form">
            <input type="text" name="store_id" placeholder="Store" class="form-control new-form">
            <input type="text" name="detail_brg" placeholder="Detail" class="form-control new-form">
            <input type="file" name="img_brg" placeholder="Gambar Barang" class="form-control new-form">
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          <input type="submit" name="simpan" value="Simpan" class="btn btn-info">
        </form>
        
      </div>
      </div>
    </div>
  </div>
</div>
<!-- end modal tambah barang -->
<!-- Detail ubah barang -->
<div class="modal fade" id="editBarang" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" style="text-align: center">Detail & Ubah Barang</h4>
        </div>
        <div class="modal-body">
          <div class="col-xl-12">
          <form action="" method="">
            <div class="col-xl-6">
            <img class="img-responsive" alt="barcode" src="<?php echo base_url(); ?>assets/images/dummy.jpg">
            <!-- <img class="img-responsive" alt="barcode" src="<?php echo base_url(); ?>assets/images/barcode.png"> -->
          </div>
          <div class="col-xl-6">
            <input type="text" name="nama_barang" placeholder="Nama Barang" class="form-control new-form">
            <input type="text" name="harga_beli" placeholder="Harga Beli" class="form-control new-form">
            <input type="text" name="harga_jual" placeholder="Harga Jual" class="form-control new-form">
            <input type="text" name="status" placeholder="Status" class="form-control new-form">
            <input type="text" name="kategori" placeholder="Kategori" class="form-control new-form">
            <input type="text" name="store_id" placeholder="Store" class="form-control new-form">
            <input type="text" name="detail_brg" placeholder="Detail" class="form-control new-form">
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