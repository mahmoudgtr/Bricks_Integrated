<?php 
  include 'init.php';
   ?>
   <!DOCTYPE html>
<html lang="en" dir="<?php echo $expr['dirction']; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <a class="navbar-brand" href="index.php"><img src="<?php echo $img; ?>Group--.svg" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
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
<!--Start About-->
<div class="about">
     <div class="container-fluid">
        <div class="row" id="row-flow">
            <div class="col-lg-6 abouttxt-p">
                <div class="aboutTxt pt-5">
                    <h5>Providing some integrated constructions including commercial, residential and industrial buildings.</h5>
                    <div class="caption-about">
                        <div class="border-bottom w-75 my-5"></div>
                        <h4 class="text show-more">Bricks Integrated is characterized by its delivery and 
                        performing the projects with authorized and approved systems and focusing on meeting the international standards and requirements which pave the way for more growth.<div class="collapse" id="mycon">Bricks Integrated is characterized by its delivery and 
                        performing the projects with authorized and approved systems and focusing on meeting the international standards and requirements which pave the way for more growth.</div></h4>
                        <a id="readM" href='#mycon' data-toggle="collapse">Read more<i class="fa fa-chevron-circle-right pl-3" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 aboutImg-p">
                <div class="aboutImg">
                    <img class="w-100" src="<?php echo $img; ?>WASMIYA TOWER VIEWS-10.png"/>
                </div>
            </div>
        </div>
    </div>
    <div class="obj">
      <div class="container">
        <div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card-header b-card-show" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left text-uppercase" id="item1" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Objective<i class="fa fa-chevron-circle-down chev-po" id="j" aria-hidden="true"></i>
                  </button>
                  
                </h2>
              </div>

              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                The quality assurance system in BRICKS INTERATED General Trading and Contracting Co. is a collection of the basic international standards for quality assurance in work and the directive principles for all team members to continue and motivate the efforts in order to maintain the highest quality levels.
                Our experience includes performing all projects with proficiency in timely manner, based on our unique technical experience and providing the best advises regarding the materials and total cost for its clients.
                BRICKS INTEGRATED General Trading and Contracting Co. was established its reputation in completing the projects on a timely manner, as it integrates the experience, proficiency, and flexibility to be the first choice for building projects according to the set time frames using the recent updated programs and systems internationally applied (Primavera).
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header b-card-show" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left collapsed text-uppercase" id="item2" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  vision<i class="fa fa-chevron-circle-down chev-po" id="v" aria-hidden="true"></i>
                  </button>
                  
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header b-card-show" id="headingThree">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left collapsed text-uppercase" id="item3" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  mission<i class="fa fa-chevron-circle-down chev-po" id="m" aria-hidden="true"></i>
                  </button>
                </h2>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
      <div class="project">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="card" >
                <img src="<?php echo $img; ?>MaskGroup4.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h6>Wasmiya Tower</h6>
                  <p class="card-text">Construction &  Maintenance</p>
                </div>
              </div>
            </div>  
            <div class="col-md-4">
              <div class="card">
                <img src="<?php echo $img; ?>MaskGroup2.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h6>Wasmiya Tower</h6>
                  <p class="card-text">Construction &  Maintenance</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img src="<?php echo $img; ?>MaskGroup3.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h6>Wasmiya Tower</h6>
                  <p class="card-text">Construction &  Maintenance</p>
                </div>
              </div>
            </div>       
          </div>
          <div class="view">
          <a href="#">VIEW PROJECTS</a>
          </div>
        </div>
      </div>
  </div>

  
<!--End About-->
<?php include $assets . "footer.php"; ?>
