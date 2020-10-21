<?php 
  include 'init.php';
  include $assets . "headerpro.php";
  include "searchengine.php"
   ?>
<!--Start About-->
<section class="projects-p">
<div class="about">
     <div class="container-fluid">
        <div class="row" id="row-flow">
            <div class="col-lg-6 abouttxt-p">
                <div class="aboutTxt pt-5">
                    <h5 style="font-size: 23px;"><?php echo $expr['p-kind']; ?></h5>
                    <div>
                        <div class="border-bottom w-50 my-5"></div>
                        <h5><?php echo $expr['p-address']; ?></h5><br/>
                        <h5><?php echo $expr['p-value']; ?></h5>
                        <h4 ><?php echo $expr['p-value-p']; ?></h4>
                        <h5><?php echo $expr['p-duration']; ?></h5>
                        <h4><?php echo $expr['p-duration-p']; ?></h4>
                        <h5><?php echo $expr['p-start']; ?></h5>
                        <h4><?php echo $expr['p-start-p']; ?></h4>
                        <h5><?php echo $expr['p-comp']; ?></h5>
                        <h4><?php echo $expr['p-comp-p']; ?></h4>                     
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
  </div>
</section>
<section class="project-img">
  <div class="container">
    <div class="row" id="ro-flow-p">
      <div class="col-md-3 my-auto" id="ro-flow-1">
        <a href="projects.php" role="button" ><img id="bb-pp" src="<?php echo $img; ?>arrow-iocn-14px.svg"/><?php echo $expr['projects']; ?></a>
      </div>
      <div class="col-md-9 col-sm-12" id="ro-flow-2">
        <div class="row" id="ro-flow-c">
          <div class="col-6 col-md-4">
            <div class="img-pp">
              <a href="img/WASMIYA TOWER VIEWS-249.png" data-lightbox="mygallery" data-title="Wasmya"><img class="w-100 h-100" src="img/gallery.png"></a>
            </div>
          </div>
          <div class="col-6 col-md-4">
            <div class="img-pp">
              <a href="img/WASMIYA TOWER VIEWS-12.png" data-lightbox="mygallery"><img class="w-100 h-100" src="img/gallery1.png"></a>
            </div>
          </div>
          <div class="col-6 col-md-4">
            <div class="img-pp">
              <a href="img/WASMIYA TOWER VIEWS-10.png" data-lightbox="mygallery"><img class="w-100 h-100" src="img/gallery2.png"></a>
            </div>
          </div>
            <div class="col-6 col-md-4">
            <div class="img-pp">
              <a href="img/WASMIYA TOWER VIEWS-249.png" data-lightbox="mygallery"><img class="w-100 h-100" src="img/gallery.png"></a>
            </div>
          </div>
           <div class="col-6 col-md-4">
            <div class="img-pp">
              <a href="img/WASMIYA TOWER VIEWS-249.png" data-lightbox="mygallery"><img class="w-100 h-100" src="img/gallery.png"></a>
            </div>
          </div>
            <div class="col-6 col-md-4">
            <div class="img-pp">
              <a href="img/WASMIYA TOWER VIEWS-249.png" data-lightbox="mygallery"><img class="w-100 h-100" src="img/gallery.png"></a>
            </div>
          </div>
            <div class="col-6 col-md-4">
            <div class="img-pp">
              <a href="img/WASMIYA TOWER VIEWS-249.png" data-lightbox="mygallery"><img class="w-100 h-100" src="img/gallery.png"></a>
            </div>
          </div>
             <div class="col-6 col-md-4">
            <div class="img-pp">
              <a href="img/WASMIYA TOWER VIEWS-249.png" data-lightbox="mygallery"><img class="w-100 h-100" src="img/gallery.png"></a>
            </div>
          </div>
             <div class="col-6 col-md-4">
            <div class="img-pp">
              <a href="img/WASMIYA TOWER VIEWS-249.png" data-lightbox="mygallery"><img class="w-100 h-100" src="img/gallery.png"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include $assets . "footer.php"; ?>
