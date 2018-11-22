 <div class="animated fadeIn">
                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Laporan Penjualan</strong>
                        </div>
                        <div class="card-body">
                          <div class="row tgl-pjl" id="tgl">
                          <form>
                            <label style="font-weight: bolder">Penjualan Tanggal : </label>
                            <input class="form-control tgl-form" type="date" name="tanggal_laporan" placeholder="date" id="tgl_penjualan">
                          </form>
                      <button class="btn btn-danger float-right btn-print" id="pBtn" type="button" onclick="window.print();"><span class="fa fa-print"></span> Print</button>
                    </div>
                  <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Nomor</th>
                        <th>Jam Transaksi</th>
                        <th>Nama Pelanggan</th>
                        <th>Status</th>
                        <th>Jumlah</th>
                        <th>Total</th>
                        <th id="action">Action</th>
                      </tr>
                    </thead>
                    <tbody id="content"> 
                      
                      <?php
                      $no = 1; 
                      for($i=1;$i<=4;$i++){
                     echo '
                     <tr>
                        <td>'.$no.'</td>
                        <td>04/28/2018</td>
                        <td>Suprapto</td>
                        <td>Verified</td>
                        <td>4</td>
                        <td>300000</td>
                        <td>
                          <button class="btn btn-success btn-action" data-toggle="modal" data-target="#detailTransaksi"><span class="fa fa-search"></span> Detail</button>
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
                    <a href="">1</a>
                    <a href="">2</a>
                    <a href="">3</a>
                    <a href="">4</a>
                    <a href="">></a>
                  </div>
                        </div>
                    </div>
                </div>
                </div>
            </div><!-- .animated -->

  <!-- Modal Detail Transaksi -->          
  <div class="modal fade" id="detailTransaksi" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" style="text-align: center">Detail Transaksi</h4>
        </div>
    <div class="modal-body">
        <div class="col-lg-12">
         <div class="col-lg-6">
          <div class="confirm-body">
              <div class="confirm-title">
                  Detail Barang
              </div> 
              <div class="scroll-detail">
                <?php
                $no = 1;
                for($i=1;$i<=4;$i++){
                  echo'
              <div class="col-sm-12 list-jual" id="addbrg">
                 <div class="col-sm-6">
                    <div>x1 Sate Ayam <p class="harga-jual">Rp 12.000</p></div>
                </div>
                <div class="col-sm-6">
                    <div class="total">Total <p class="harga-jual">Rp 12.000</p></div>
                </div>
            </div>';
          }?>
            <div class="col-sm-12 list-jual" id="addbrg">
                 <div class="col-sm-6">
                    <div>x2 Sate Padang <p class="harga-jual">Rp 15.000</p></div>
                </div>
                <div class="col-sm-6">
                    <div class="total">Total <p class="harga-jual">Rp 30.000</p></div>
                </div>
            </div>
          </div>
          </div>
          <div class="confirm-title">
                  Detail Pembayaran
          </div>
          <div class="confirm-top total-byr">
             <table style="margin-left: 10px;">
              <tr>
                <td><strong>Total : </strong></td>
                <td class="float-right"><strong>Rp 42.000</strong></td>
              </tr>
              <tr>
                <td><i>Bayar : </i></td>
                <td class="float-right"><i>Rp 50.000</i></td>
              </tr>
              <tr>
                <td><i>Kembali:</i></td>
                <td class="float-right"><i>Rp 8.000</i></td>
              </tr>
             </table>
          </div>
        </div>

<!-- Right modal -->
    <div class="col-lg-6">
        <div class="col-sm-12">        
            <div class="confirm-top-right">
              <h4>Nama</h4>
              <h6>Umum</h6> 
              <p class="harga-jual">085814264287</p> 
        </div>         
    </div>
          <div class="confirm-body-right">
             <img src="<?php echo base_url(); ?>assets/images/barcode.png" class="img-responsive confirm-body-right" alt="qrcode">
          </div>
        </div>
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <input type="submit" class="btn btn-info" name="submitPembayaran" value="Lanjutkan">
        </div>
    </div>
      </div>
    </div>

<script>
  $(document).ready(function(){
    $("#tgl_penjualan").on("keyup",function(){
      var value= $(this).val().toLowerCase();

            $("#content tr").filter(function(){
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
</script>