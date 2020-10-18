    <?php 
        include "init.php";
        ?>

<!DOCTYPE html>
<html lang="<?php echo $expr['name']; ?>" dir="<?php echo $expr['dirction']; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico">
    <meta name="theme-color" content="#1D1D1B">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32*32">
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16*16">
    <title>BRICKS INTEGRATED</title>
    <link href="<?php echo $expr['font']; ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo $css; ?>bootstrap.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $css; ?>simplebar.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $css; ?>main.css"/>
    <?php if($expr['name'] == "ar"){ 
        echo '<link rel="stylesheet" type="text/css" href="css/rtl/main-rtl.css">' ;}  ?>
</head>
<body >
<!-- Start Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark pt-4">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index.php"><img src="<?php echo $img; ?>Group--.svg" alt=""></a>
        <div class="collapse navbar-collapse nav-mv-p" id="navbarSupportedContent">
            <ul class="navbar-nav nav-mv-c">
                <li class="nav-item zc-p active" id="f-active">
                <a class="nav-link zc" href="index.php"><?php echo $expr['home']; ?><span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item zc-p">
                <a class="nav-link zc" href="about.php"><?php echo $expr['about']; ?></a>
                </li>
                <li class="nav-item zc-p">
                    <a class="nav-link zc" href="services.php"><?php echo $expr['services']; ?></a>
                </li>
                <li class="nav-item zc-p">
                    <a class="nav-link zc" href="projects.php"><?php echo $expr['projects']; ?></a>
                </li>
                <li class="nav-item zc-p">
                    <a class="nav-link zc" href="contact.php"><?php echo $expr['contact']; ?></a>
                </li>
            </ul>
            <ul class="navbar-nav " id="bs-n">
                <li class="nav-item">
                    <a class="nav-link  apper" href="#"><img id="search-i"/></a>
                    <div class="searchbox">
                        <input type="text">
                        <input type="button" value="<?php echo $expr['search']; ?>" >
                    </div>        
                </li>

                 <li class="nav-item" id="bc-n">
                    <a class="nav-link" href="#" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><img src="<?php echo $img; ?>Icon ionic-ios-close.svg"/></a>      
                </li>
            </ul>

            <ul class="navbar-nav links-nav info-nav">
                <li>
                    <?php echo $expr['work-days']; ?><br/>
                     <?php echo $expr['work-h']; ?>
                </li>
                <li>
                    <?php echo $expr['address']; ?>
                </li>
                <li>
                    info@bricksintegrated.com 
                </li>
                <li class="social">
                    <a href="#"><img id="f-insta" src="<?php echo $img; ?>Icon-instagram.svg"/></a>
                    <a href="#"><img src="<?php echo $img; ?>Icon-feather-mail.svg"/></a>
                    <a href="#"><img src="<?php echo $img; ?>Icon feather-phone-call.svg"/></a>
                </li>
            </ul>
        </div>
            <div class="nav-lang">
                <?php foreach ($dictionary as $key => $lang_dict): ?>
                <?php if ($current_lang != $key): ?>
                    <div>
                        <a  href="lang.php?change=<?php echo $key?>"><?php echo $lang_dict['value'] ?></a>
                    </div>
                <?php endif ?>
                <?php endforeach ?>
            </div>
    </div>
</nav>
<!-- End Navbar -->
      <!-- Start caption -->
      <div class="wrapper">
        <div class="caption">
            <div class="container">
                        <img class="mx-auto d-block logs" src="<?php echo $img; ?>bricks-logo.svg" alt="BRICKS INTEGRATED ">
                <div class="caption-txt">
                    <h3 class="txt-m">Integrated constructions for commercial, residential and industrial buildings.</h3>
                </div>
                </div>
            </div>
            </div>

      <!-- End caption -->
      <!-- Start Slider-->
        <div class="swiper-container">
            <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="<?php echo $img; ?>WASMIYA TOWER VIEWS-10.png">
            </div>
            <div class="swiper-slide">
                <img src="<?php echo $img; ?>WASMIYA TOWER VIEWS-12.png">
            </div>
            <div class="swiper-slide">
                <img src="<?php echo $img; ?>WASMIYA TOWER VIEWS-249.png">
            </div>
            </div>
        </div>
      <!-- End Slider-->
      <!-- Start Footer-->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <p>The BRICKS INTEGRATED General Trading and Contracting Co. was established in 2011 as a limited liability company with a paid-up capital of KD 1.000.000, BRICKS INTEGRATED General Trading and Contracting Co. is a building leading company works in State of Kuwait as it provides some integrated constructions including commercial, residential and industrial building for projects of private and government sector in State of Kuwait.</p>
                    </div>
                    <div class="col-md-4 info">
                        <ul>
                            <li>
                                <b>Sunday- Thursday</b><br/>
                                09:00AM  - 05:00PM
                            </li>
                            <li>
                                AlQibla-Ahmed Al Jaber Street<br/>
                                Al Zumorrodah Tower-22 floor
                            </li>
                            <li>
                                Tel.: +965 2220 6183/6 <br/>
                                Fax: +965 2220 6188
                            </li>
                            <li>
                                <b>info@bricksintegrated.com</b> 
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="links" id="links-f">
                            <li>
                               <a href="layout/about.php">About</a> 
                            </li>
                            <li>
                                <a href="#">Portfolio</a>
                            </li>
                            <li>
                                <a href="#">Services</a>
                            </li>
                            <li>
                                <a href="#">Conact us</a>    
                            </li>
                        </ul>
                        <ul class="links" id="links-s">
                            <li class="social">
                                <a href="#"><img id="f-insta" src="<?php echo $img; ?>Icon-instagram.svg"/></a>
                                <a href="#"><img src="<?php echo $img; ?>Icon-feather-mail.svg"/></a>
                                <a href="#"><img src="<?php echo $img; ?>Icon feather-phone-call.svg"/></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->
    <?php include $assets . "footer.php"; ?>