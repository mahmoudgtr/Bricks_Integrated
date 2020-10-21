<?php 
  include 'init.php';
  include $assets . "headernav.php";
 ?>
<!--Start About-->
<div class="about">
     <div class="container-fluid">
        <div class="row" id="row-flow">
            <div class="col-lg-6 abouttxt-p aboutTxt-o">
                <div class="aboutTxt-s">
                    <h5><?php echo $expr['services-h']; ?></h5>
                    <div class="caption-about">
                        <div class="border-bottom w-50 my-5"></div>
                        <h4 class="text show-more"><?php echo $expr['services-p']; ?></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 aboutImg-p aboutImg-o">
                <div class="aboutImg img-h" >
                    <img class="w-100 h-100" src="<?php echo $img; ?>MaskGroup6.png"/>
                </div>
            </div>
        </div>
    </div>
 <!--End About-->
<section class="serv">
    <div class="container">
        <div  class="ss-p">
            <div class="ss-c">
             <h6 class=><?php echo $expr['services']; ?></h6>
             <div class="bo-b"><div class="bo-c"></div></div>
             </div>
        </div>
        <div class="row">
            <div class="col md-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $img; ?>innovate.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text"><?php echo $expr['services-1']; ?></p>
                    </div>
                </div>
            </div>
            <div class="col md-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $img; ?>quality.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text"><?php echo $expr['services-2']; ?></p>
                    </div>
                </div>
            </div>
            <div class="col md-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $img; ?>real-estate.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text"><?php echo $expr['services-3']; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $img; ?>drawing.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text"><?php echo $expr['services-4']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col md-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $img; ?>projects.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text"><?php echo $expr['services-5']; ?></p>
                    </div>
                </div>
            </div>
            <div class="col md-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $img; ?>miantain.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text"><?php echo $expr['services-6']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include $assets ."footer.php"; ?>