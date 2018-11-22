<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EzyPos - Pilih Toko</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/themify-icons.css">
   <!--  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/flag-icon.min.css"> -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/new_style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <style type="text/css">
         .img-tko{
            background-image: url("<?php echo base_url(); ?>assets/images/dummy1.jpg");
        }
        .bg-img{
            background-image: url("<?php echo base_url(); ?>/assets/images/BG-R.png");
        }
        .btn{
            border-radius: 5px;
        }
    </style>
</head>
<body class="bg-img">
<div class="row">
    <div class="col-lg-12">
        <div class="head-store">
            <div class="col-sm-6">
            <img src="<?php echo base_url(); ?>assets/images/icon.png" alt="login-logo" style="width:30px;float: left;margin-right: 10px">
            <h5 class="text-white">Pilih Toko - {Nama User Login}</h5>
            </div>
        </div>
    </div>
</div>
<div class="contain">
<div class="row">
<div class="card card-store" style="border-radius:10px;">
    <div class="card-body img-tko top-border">
        <h3 class="text-white">Nama Toko </h3>
        <h5 class="text-white">Owner</h5>
        <p>Alamat Toko</p>
    </div>
    <div class="card-footer" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;">
        <a href="<?php echo base_url(); ?>index.php/admin/home/" class="btn btn-info btn-pilih" style="border-radius:5px;"><i class="fa fa-sign-in"></i></a>
        <a href="#" class="btn btn-warning btn-pilih" style="border-radius:5px;"><i class="fa fa-list-alt"></i></a>
    </div>
</div>
</div>
<a href="#" class="float" data-toggle="modal" data-target="#tambahToko">
<i class="fa fa-plus my-float"></i>
</a>
</div>

<!-- modal tambah toko-->
<div class="modal fade" id="tambahToko" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" style="text-align: center">Tambah Toko</h4>
        </div>
        <div class="modal-body">
          <form action="" method="">
            <input type="text" name="nama_toko" placeholder="Nama Toko" class="form-control new-form">
            <input type="text" name="alamat" placeholder="Alamat" class="form-control new-form">
            <input type="file" name="img_toko" placeholder="Gambar Barang" class="form-control new-form">
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          <input type="submit" name="simpan" value="Simpan" class="btn btn-info">
        </form>
        
      </div>
      </div>
    </div>
  </div>
<!-- end -->

    <script src="<?php echo base_url(); ?>assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>

</body>
</html>
