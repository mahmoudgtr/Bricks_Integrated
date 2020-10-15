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
                    <h5>Innovative and Creative Solutions</h5>
                    <div class="caption-about">
                        <div class="border-bottom w-50 my-5"></div>
                        <h4 class="text show-more">Committed to provide an additional value for its customers through innovation and uniqueness, and internationally leading.</h4>
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
             <h6 class=>services</h6>
             <div class="bo-b"><div class="bo-c"></div></div>
             </div>
        </div>
        <div class="row">
            <div class="col md-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $img; ?>innovate.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Offers innovative and creative solutions for commercial, residential and industrial buildings to serve the private and public domain in State of Kuwait.</p>
                    </div>
                </div>
            </div>
            <div class="col md-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $img; ?>quality.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Provides the highest quality while dealing with the best housing projects and provides the technical experience together with achieving the desired results.</p>
                    </div>
                </div>
            </div>
            <div class="col md-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $img; ?>real-estate.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Real estate development.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $img; ?>drawing.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Studying the drawings to meet the clients needs and requirements.</p>
                        </div>
                    </div>
                </div>
                <div class="col md-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $img; ?>projects.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Carry out the projects using the recent updated methods and internationally approved programs.</p>
                    </div>
                </div>
            </div>
            <div class="col md-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $img; ?>miantain.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Real Renovation, Extensions & turn key contracts. Manage and maintain the projects. development.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include $assets ."footer.php"; ?>