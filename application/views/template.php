<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <base href="<?php echo base_url(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EzyPos-Web</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/scss/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/new_style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <style type="text/css">
        .bg-img{
            background-image: url('<?php echo base_url(); ?>assets/images/BG-R.png');
        }
        .card-item{
            background-image: url('<?php echo base_url(); ?>assets/images/dummy.jpg');
        }

    </style>
</head>
<body class="bg-img" onload="tampilkanwaktu();setInterval('tampilkanwaktu()', 1000);">
        <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?php echo base_url();?>index.php/admin/home"><img src="<?php echo base_url(); ?>assets/images/EzyPOS-logo.png" alt="EzyPos"></a>
               
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?php echo base_url();?>index.php/admin/home"> <i class="menu-icon fa fa-dashboard"></i>Penjualan </a>
                    </li>
                    <h3 class="menu-title">Inventory</h3><!-- /.menu-title -->
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/admin/laporan_penjualan"> <i class="menu-icon fa fa-file-text"></i>Laporan Penjualan</a>
                        
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/admin/data_barang"> <i class="menu-icon fa fa-table"></i>Data Barang</a>
                        
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/admin/data_kategori"> <i class="menu-icon fa fa-tags"></i>Data Kategori</a>
                        
                    </li>

                    <h3 class="menu-title">Pelanggan</h3><!-- /.menu-title -->

                    <li>
                        <a href="<?php echo base_url(); ?>index.php/admin/data_pelanggan"> <i class="menu-icon fa fa-users"></i>Data Pelanggan</a>
                       
                    </li>

                    <h3 class="menu-title">Tentang EzyPos</h3><!-- /.menu-title -->
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/admin/pengaturan"> <i class="menu-icon fa fa-gear"></i>Pengaturan</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/admin/"> <i class="menu-icon fa fa-sign-out"></i>Logout</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel" >

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                   <!--  <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a> -->
                    <div class="header-left">
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <p>Admin Ezypos</p>
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                                <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                                <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language" >
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
        <div class="content mt-3">

            <?php 
            $this->load->view($main_view);
            ?>

        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="<?php echo base_url(); ?>assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>


    <script src="<?php echo base_url(); ?>assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/dashboard.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/widgets.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script> -->

</body>
</html>
