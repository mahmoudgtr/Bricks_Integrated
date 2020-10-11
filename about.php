<?php 
  include 'init.php';
  include $assets . "headernav.php";
   ?>
<!--Start About-->
<div class="about">
     <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="aboutTxt ml-auto pt-5">
                    <h5>Providing some integrated constructions including commercial, residential and industrial buildings.</h5>
                    <div class="pl-3">
                        <div class="border-bottom w-75 my-5"></div>
                        <h4 class="text show-more">Bricks Integrated is characterized by its delivery and 
                        performing the projects with authorized and approved systems and focusing on meeting the international standards and requirements which pave the way for more growth.<div class="collapse" id="mycon">Bricks Integrated is characterized by its delivery and 
                        performing the projects with authorized and approved systems and focusing on meeting the international standards and requirements which pave the way for more growth.</div></h4>
                        <a id="readM" href='#mycon' data-toggle="collapse">Read more<i class="fa fa-chevron-circle-right pl-3" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
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
          <div class="view text-right">
          <a href="#">VIEW PROJECTS</a>
          </div>
        </div>
      </div>
  </div>

  
<!--End About-->
<?php include $assets . "footer.php"; ?>
