<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->helper('url'); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>home</title>
    <link rel="stylesheet" href="<?=base_url()?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="<?=base_url()?>css/Header-Dark.css">
    <link rel="stylesheet" href="<?=base_url()?>css/Navigation-with-Button.css">
    <link rel="stylesheet" href="<?=base_url()?>css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="<?=base_url()?>css/styles.css">
    <link rel="stylesheet" href="<?=base_url()?>css/Team-Boxed.css">
</head>

<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
            <div class="container"><a class="navbar-brand" href="#"><strong>MaSy-HR</strong><br></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">Employee<br></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">Personal data</a></li>
                    </ul><span class="navbar-text actions"> <a class="btn btn-light action-button" role="button" href="#">Log On</a></span></div>
    </div>
    </nav>
    </div>
    <div class="team-boxed">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Team </h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae.</p>
            </div>
            <div class="row people">
                <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img class="rounded-circle" src="<?=base_url()?>img/1.jpg">
                        <h3 class="name">Ben Johnson</h3>
                        <p class="title">Musician</p>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo suscipit id. Etiam dictum feugiat tellus, a semper massa. </p>
                        <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img class="rounded-circle" src="<?=base_url()?>img/2.jpg">
                        <h3 class="name">Emily Clark</h3>
                        <p class="title">Artist</p>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo suscipit id. Etiam dictum feugiat tellus, a semper massa. </p>
                        <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img class="rounded-circle" src="<?=base_url()?>img/3.jpg">
                        <h3 class="name">Carl Kent</h3>
                        <p class="title">Stylist</p>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo suscipit id. Etiam dictum feugiat tellus, a semper massa. </p>
                        <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?=base_url()?>js/jquery.min.js"></script>
    <script src="<?=base_url()?>js/bootstrap.min.js"></script>
</body>

</html>