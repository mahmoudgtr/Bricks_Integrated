  <!DOCTYPE html>
<html lang="en" dir="<?php echo $expr['dirction']; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico">
    <meta name="theme-color" content="#1D1D1B">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32*32">
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16*16">

    <title>BRICKS INTEGRATED</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $css; ?>bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo $css; ?>font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo $css; ?>main.css"/>
</head>
<body>
<!-- Start Navbar -->
<nav class="about-nav navbar navbar-expand-lg navbar-dark pt-4">
    <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index.php"><img src="<?php echo $img; ?>Group--.svg" alt=""></a>
        <ul class="nav-lang">
            <li class="nav-item dropdown">
                <?php foreach ($dictionary as $key => $lang_dict): ?>
                <?php if ($current_lang == $key): ?>
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <?php echo $lang_dict['name'] ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#"><?php echo $lang_dict['name'] ?></a>
                      <?php else: ?>
                        <a class="dropdown-item" href="lang.php?change=<?php echo $key?>"><?php echo $lang_dict['name'] ?></a>
                    </div>
            </li>
            <?php endif ?>
        <?php endforeach ?>
        </ul>
        <div class="collapse navbar-collapse nav-mv-p" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto nav-mv-c">
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
                    <a class="nav-link zc" href="contact.php"><?php echo $expr['contact']; ?></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto" id="bs-n">
                <li class="nav-item">
                    <a class="nav-link  apper" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                    <div class="searchbox">
                        <input type="text">
                        <input type="button" value="search" >
                    </div>        
                </li>
                <li class="nav-item dropdown" id="bl-n">
                    <?php foreach ($dictionary as $key => $lang_dict): ?>
                    <?php if ($current_lang == $key): ?>
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <?php echo $lang_dict['name'] ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#"><?php echo $lang_dict['name'] ?></a>
                          <?php else: ?>
                            <a class="dropdown-item" href="lang.php?change=<?php echo $key?>"><?php echo $lang_dict['name'] ?></a>
                        </div>
                </li>
                <?php endif ?>
            <?php endforeach ?>
                 <li class="nav-item" id="bc-n">
                    <a class="nav-link" href="#" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-times" aria-hidden="true"></i></a>      
                </li>
            </ul>
            <ul class="navbar-nav links-nav info-nav">
                <li id="co-p-v">
                <i class="fa fa-clock-o" id="co-c-v" aria-hidden="true"></i>
                    Sunday- Thursday<br/>
                    09:00AM  - 05:00PM
                </li>
                <li id="ma-p-v">
                <i class="fa fa-map-marker" id="ma-c-v" aria-hidden="true"></i>
                    AlQibla-Ahmed Al Jaber Street<br/>
                    Al Zumorrodah Tower-22 floor
                </li>
                <li id="en-p-v">
                <i class="fa fa-envelope-o" id="en-c-v" aria-hidden="true"></i>
                    info@bricksintegrated.com 
                </li>
                <li class="social nav-item">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->