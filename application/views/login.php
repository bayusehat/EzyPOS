<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EzyPos - Login Admin</title>
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
        .title_view{
            font-size: 20px;
            font-family: Open Sans;
            color: #ffffff;
        }
        .center{
            margin: 0px auto;
            display: block;
            align-content: center;
        }
        .card-login{
            border-radius: 10px;
            margin-top: 160px;
        }
        .btn{
            border-radius: 5px;
        }
    </style>
</head>
<body style="background-image: url(<?php echo base_url();?>assets/images/BG-L.png);">

<div class="center">
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-form card-login">
                    <div class="login-logo">
                       <img src="<?php echo base_url();?>assets/images/EzyPos-logo1.png" alt="login-logo" style="width: 400px"> 
                </div>
                    <?php
                    $notif = $this->session->flashdata('notif');
                    if($notif != NULL){
                        echo
                        '<div class="alert alert-danger">'.$notif.'</div>';
                         }
                    ?>
                    <form id="login_form" role="form" method="post" action="<?php echo base_url();?>index.php/admin/pilih_toko">
                        <div class="alert alert-danger text-center" id="empty" style="display: none;"><i class="fa fa-times"></i> Failed,
                        There are empty field
                        </div>
                        <div class="alert alert-danger text-center" id="failed" style="display: none;"><i class="fa fa-times"></i> Failed,
                        Wrong Username/Password
                        </div>
                        <div class="alert alert-success text-center" id="success" style="display: none;"><i class="fa fa-check"></i> Success,
                        Waiting for redirect ...
                        </div>
                        <div class="form-group">
                            <!-- <label>Nomor HP</label> -->
                            <input id="username" name="nomor_hp" type="number" min="0" class="form-control" placeholder="Nomor HP" value="">
                        </div>
                        <div class="form-group">
                            <!-- <label>Password</label> -->
                            <input id="password" name="password" type="password" class="form-control" placeholder="Password" value="">
                        </div>
                        <!-- <div class="checkbox">
                            <label class="pull-right">
                                <a href="#">Lupa Password?</a>
                            </label>

                        </div> -->
                        <input type="submit" name="submit" class="btn btn-success btn-flat m-b-30 m-t-30" style="background: #d5001c;margin-bottom: 5px">
                </div>
            </div>
            </div>
        </div>
    </div>


    <script src="<?php echo base_url(); ?>assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>

    <script>
        function login(){
            var data = $("#form_login").serialize();
            $("#empty").hide('slow');
            $("#failed").hide('slow');
            $("#success").hide('slow');
        $.ajax({
            url : 'auth/login_admin',
            type : 'POST',
            dataType : 'json',
            data : data,
            success : function(r){
                if(r.message == 'empty'){
                    $("#loader").hide('slow');
                    $("#empty").show('slow');
                }else if(r.message == 'failed'){
                    $("#loader").hide('slow');
                    $("#failed").show('slow');
                }else if(r.message == 'success'){
                    $("#loader").hide('slow');
                    $("#success").show('slow');
                    setTimeOut(function(){
                        location.reload();
                    },2000);
                }else{
                    alert('wrong');
                }
            }
        });
        }
    </script>

</body>
</html>
