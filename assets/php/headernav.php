    <?php 
        include "init.php";
        include "searchengine.php"

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
    <title><?php echo $expr['title']; ?></title>
    <link href="<?php echo $expr['font']; ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo $css; ?>bootstrap.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $css; ?>simplebar.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $css; ?>main.css"/>
    <?php if($expr['name'] == "ar-sa"){ 
        echo '<link rel="stylesheet" type="text/css" href="css/rtl/main-rtl.css">' ;}  ?>
</head>
<body >
<!-- Start Navbar -->
<nav class="about-nav navbar navbar-expand-lg navbar-dark pt-4">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index.php"><img src="<?php echo $img . $expr['logo-text']; ?>" alt=""></a>
        <div class="collapse navbar-collapse nav-mv-p" id="navbarSupportedContent">
            <ul class="navbar-nav nav-mv-c">
                <li class="nav-item zc-p" id="f-active">
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
                    <a class="nav-link  apper" href="javascript:void(0)"><img id="search-i"/></a>
                    <form class="searchbox" action="about.php" method="post">
                        <input type="text" name="search">
                        <input type="submit" name="submit1" value="<?php echo $expr['search']; ?>" >
                    </form>        
                </li>

                 <li class="nav-item" id="bc-n">
                    <a class="nav-link" href="#" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><img src="<?php echo $img; ?>Icon ionic-ios-close.svg"/></a>      
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
                    <a href="https://www.instagram.com/bricksintegrated/" target="_blank"><img id="f-insta" src="<?php echo $img; ?>Icon-instagram.svg"/></a>
                    <a href="mailto:info@bricksintegrated.com"><img src="<?php echo $img; ?>Icon-feather-mail.svg"/></a>
                    <a href="tel:0096522206183"><img src="<?php echo $img; ?>Icon feather-phone-call.svg"/></a>
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