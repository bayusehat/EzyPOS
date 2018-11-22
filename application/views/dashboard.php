<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" style="text-align: center">Pilih Pelanggan</h4>
        </div>
        <div class="modal-body">
          <form action="" method="">
            <select class="form-control">
                <option>--Pilih Pelanggan--</option>
                <option>Pelanggan 1</option>
                <option>Pelanggan 2</option>
            </select>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          <button type="button" class="btn btn-info">Pilih</button>
        </div>
      </div>
    </div>
  </div>

 <div class="modal fade" id="editPesanan" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Pesanan</h4>
        </div>
        <div class="modal-body">
          <form action="" method="">
            <input type="number" name="harga" placeholder="Harga" class="form-control new-form">
            <input type="number" name="quantity" min="1" placeholder="Quantity" class="form-control new-form">
            <input type="text" name ="catatan" placeholder="Catatan" class="form-control new-form">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          <input type="submit" name="simpan" value="Simpan" class="btn btn-info">
          </form>  
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="confirmModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" style="text-align: center">Konfirmasi Pembayaran</h4>
        </div>
    <div class="modal-body">
        <div class="col-lg-12">
         <div class="col-lg-6">
        <div class="col-sm-12">
        <div class="col-sm-6">          
            <div class="confirm-top">
              <h4>Rp 42.000</h4>
              <h5 style="font-size: 16px;padding-top: 5px">
                                  <?php 
                                  $format = "%D, %d %M %Y";
                                  echo mdate($format);
                                  ?> </h5>
              <p class="harga-jual">Pelanggan: Nama</p>
        </div>
        </div>
        <div class="col-sm-6">          
            <div class="confirm-top float-right">
              <p class="harga-jual" style="text-align: right">Cara pembayaran dengan EzyPay : 
              Dengan cara menggunduh EzyPay dulu, Daftar, Bayar.</p>
        </div>
        </div>
    </div>
          <div class="confirm-body">
              <div class="confirm-title">
                  Detail Barang
              </div>
              <div class="scroll-detail">
                <?php 
                $no=1;
                for($i=1;$i<=4;$i++){
                  echo'
              <div class="col-sm-12 list-jual" id="addbrg">
                 <div class="col-sm-6">
                    <div>x1 Sate Ayam <p class="harga-jual">Rp 12.000</p></div>
                </div>
                <div class="col-sm-4">
                    <div class="total">Total <p class="harga-jual">Rp 12.000</p></div>
                </div>
            </div>';
            $no++;
          }?>
            <div class="col-sm-12 list-jual" id="addbrg">
                 <div class="col-sm-6">
                    <div>x2 Sate Padang <p class="harga-jual">Rp 15.000</p></div>
                </div>
                <div class="col-sm-4">
                    <div class="total">Total <p class="harga-jual">Rp 30.000</p></div>
                </div>
            </div>
          </div>
          </div>
          <div class="confirm-title">
              Cara Pembayaran
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
  </div>

    <div class="col-xl-6 animated fadeIn">
      <div class="card card-large" style="padding: 25px;height: 588px">
        <div class="row">
         <div class="col-sm-12">  
            <div class="input-group mb-3">
            <input type="text" id="search" class="form-control" placeholder="Search" aria-label="Serach" aria-describedby="basic-addon2">
            <div class="input-group-append">
            <span class="input-group-text" id="basic-addon2"><h4 class="fa fa-search"></h4></span>
            </div>
            </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-12">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-all" role="tab" aria-controls="pills-home" aria-selected="true">All</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-makanan" role="tab" aria-controls="pills-profile" aria-selected="false">Makanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-minuman" role="tab" aria-controls="pills-contact" aria-selected="false">Minuman</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-dessert" role="tab" aria-controls="pills-contact" aria-selected="false">Dessert</a>
                </li>
            </ul>
        </div>
        </div>
        <br>
        <div class="card scroll scroll-up" style="height: 550px;margin-top: 0px auto;" id="content">
        <div class="row" id="addBarang">
             <div class="col-sm-6 col-lg-3">
           <?php 
           for($i=1;$i<=3;$i++){
            echo'
            <button class="card text-white square card-item">
                    <div class="card-body" id="list_brg">
                        <h4>
                            <span class="card-title" id="nama_brg">Sate Ayam</span>
                        </h4>
                        <p id="harga_brg">Rp 12.000</p>
                    </div>
            </button>'; }
            ?>
        </div>
    
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
           <?php 
           for($i=1;$i<=3;$i++){
            echo'
                <input type="hidden" name="id_brg" id="id_brg">
                <button class="card text-white square card-item">
                
                    <div class="card-body">
                        <h4>
                            <span class="card-title" id="nama_brg">Sate Padang</span>
                        </h4>
                        <p id="harga_brg">Rp 15.000</p>
                    </div>
               
            </button>';}?>
       
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <?php 
           for($i=1;$i<=3;$i++){
            echo'
                <button class="card text-white square card-item">
                    <div class="card-body">
                        <h4>
                            <span class="card-title">Rawon Adoh</span>
                        </h4>
                        <p>Rp 9.000</p>

                    </div>
            </button>';}
            ?>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
               <?php 
           for($i=1;$i<=3;$i++){
            echo'
                <button class="card text-white square card-item">
               
                    <div class="card-body">
                       
                        <h4>
                            <span class="card-title">Capcin</span>
                        </h4>
                        <p>Rp 7.000</p>
                        
                        </div>
                    
                    </button>';}?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-6 animated fadeIn">
 <div class="card card-large" style="height: 510px;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <h4 class="card-title mb-0">Penjualan</h4>
                                <div class="small text-muted" id="clock"></div>
                            </div>
                            <!--/.col-->
                            <div class="col-sm-8 hidden-sm-down">
                                <button type="button" class="btn btn-primary float-right bg-flat-color-1" data-toggle="modal" data-target="#myModal"><i class="fa fa-users"></i></button>
                                <h4 class="float-right" style="padding: 5px"> Nama</h4>
                                <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups"></div>
                            </div>
                        </div>
                                <div class="row">
                                <div class="card scroll-up card-penjualan" id="isibrg">
                                   <!--isi brg -->
                                </div><!--/.col-->
                            </div>
                    </div> 
            </div>
                    <div class="card card-large">
                        <div class="card-body">
                            <div class="col-sm-8">
                              <div class="row">
                                <h3>Total : </h3> 
                                </div> 
                            </div>
                            <!--/.col-->
                            <div class="col-sm-4 hidden-sm-down">
                                <button class="btn btn-warning" id="btnReset"><i class="fa fa-refresh"></i></button>
                                <button class="btn btn-success float-right" data-toggle="modal" data-target="#confirmModal"><i class="fa fa-save"></i> Save</button>
                                <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">  
                            </div>
                        </div><!--/.col-->
                    </div>
                </div>
            </div>

<script>
    $("#addBarang").click(function(){
        var test = $("#isibrg").append("<div class='col-sm-12 list-jual' id='isi'><div class='col-sm-2'><input type='number' min='1' class='form-control form-qty' name='quantity' value='1'></div><div class='col-sm-4'><div>Sate Ayam <p class='harga-jual'>Rp 12.000</p></div></div><div class='col-sm-4'><div class='total'>Total <p class='harga-jual'>Rp 12.000</p></div></div><div class='col-sm-2'><a class='btn btn-warning btn-edit' data-toggle='modal' data-target='#editPesanan'><span class='fa fa-pencil'></span></a></div></div>");
    });

    $("#btnReset").click(function(){
      $("#isibrg").empty();
      $("#total-card").empty();
    });

    $(document).ready(function(){
        $("#search").on("keyup",function(){
            var value= $(this).val().toLowerCase();

            $("#content div").filter(function(){
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });

    $(function(){
        $.ajax({
            url : "http://pos.ezypay.test/",
            dataType : "json",
            success : function(data){
                console.log(data);
            }
        });
    });

    $(function(key){
      $.getJSON("<?php echo base_url();?>index.php/auth/get_detail_item" + key , function(data){
        console.log(key);
        $.each(data,function(i,val){
          console.log(val.name);
        })
      });
    });

     function tampilkanwaktu(){            
    var waktu = new Date();
    var th = waktu.getFullYear() + "";
    var bl = waktu.getMonth() + "";            
    var tg = waktu.getDate() + "";
    var sh = waktu.getHours() + "";    
    var sm = waktu.getMinutes() + "";    
    var ss = waktu.getSeconds() + "";
    document.getElementById("clock").innerHTML =(th.length==1?"0"+th:th) + "-" + (bl.length==1?"0"+bl:bl) + "-" + (tg.length==1?"0"+tg:tg) + " " +(sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
    }
</script>