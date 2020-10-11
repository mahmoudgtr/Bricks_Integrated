<?php 
  include 'init.php';
  include $assets . "headernav.php";
 ?>
<section class="about">
<div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="aboutImg mx-auto" id="ser-img">
                    <img class="w-100" src="<?php echo $img; ?>MaskGroup6.png"/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="aboutTxt ml-auto pt-5">
                    <h5>Innovative and Creative Solutions</h5>
                    <div>
                        <div class="border-bottom w-50 my-5"></div>
                        <h4 class="text show-more">Committed to provide an additional value for its customers through innovation and uniqueness, and internationally leading.<div class="collapse" id="mycon">Bricks Integrated is characterized by its delivery and 
                        perforfing the projects with authorized and approved systems and focusing on meeting the international standards and requirements which pave the way for more growth.</div></h4>
                        <a id="readM" href='#mycon' data-toggle="collapse">Read more<i class="fa fa-chevron-circle-right pl-3" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="serv">
    <div class="container">
        <div  class="ss">
             <h6 class="text-center">services</h6>
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