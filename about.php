<?php 
  include 'init.php';
  include $assets . "headernav.php";
   ?>
<!--Start About-->

<div class="about">
     <div class="container-fluid">
        <div class="row" id="row-flow">
            <div class="col-lg-6 abouttxt-p">
                <div class="aboutTxt pt-5">
                    <h5><?php echo $expr['about-txt-h']; ?></h5>
                    <div class="caption-about">
                        <div class="border-bottom w-75 my-5"></div>
                        <h4 class="text show-more"><?php echo $expr['about-txt-p']; ?></h4>
                        <a data-toggle="collapse" id="readM" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><?php echo $expr['read-more']; ?></a><img id="ar-u" src="<?php echo $img; ?>arrow-iocn-14px.svg"/>
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
                  <button class="btn btn-link btn-block text-uppercase" id="item1" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <?php echo $expr['objective']; ?><img class="chev-po" id="j" src="<?php echo $img; ?>arrow-iocn-20px.svg"/>
                  </button>
                  
                </h2>
              </div>

              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                <?php echo $expr['objective-p']; ?>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header b-card-show" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block collapsed text-uppercase" id="item2" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <?php echo $expr['vision']; ?><img class="chev-po" id="v" src="<?php echo $img; ?>ionic-ios-arrow-dropdown.svg"/>
                  </button>
                  
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                  <?php echo $expr['vision-p']; ?>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header b-card-show" id="headingThree">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block collapsed text-uppercase" id="item3" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <?php echo $expr['mission']; ?><img class="chev-po" id="m" src="<?php echo $img; ?>ionic-ios-arrow-dropdown.svg"/>
                  </button>
                </h2>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                  <?php echo $expr['mission-p']; ?>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
      <div class="project">
        <div class="container">
         <div  class="ss-p">
              <div class="ss-c">
               <h6 class=><?php echo $expr['projects']; ?></h6>
               <div class="bo-b"><div class="bo-c"></div></div>
              </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="card" >
                <img src="<?php echo $img; ?>MaskGroup4.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h6><?php echo $expr['project-1']; ?></h6>
                  <p class="card-text"><?php echo $expr['project-1-h']; ?></p>
                </div>
              </div>
            </div>  
            <div class="col-md-4">
              <div class="card">
                <img src="<?php echo $img; ?>MaskGroup2.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h6><?php echo $expr['project-1']; ?></h6>
                  <p class="card-text"><?php echo $expr['project-1-h']; ?></p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img src="<?php echo $img; ?>MaskGroup3.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h6><?php echo $expr['project-1']; ?></h6>
                  <p class="card-text"><?php echo $expr['project-1-h']; ?></p>
                </div>
              </div>
            </div>       
          </div>
          <div class="view">
          <a href="projects.php"><?php echo $expr['v-project']; ?></a>
          </div>
        </div>
      </div>
  </div>

  
<!--End About-->
<?php include $assets . "footer.php";?>
