/* togle searchbox*/
$(document).ready(function(){
    $(".apper").click(function(){
        $(".searchbox").toggle();
    })
})

/* adjust heghit*/ 

$(function() {
    'use strict';
    //Adjust Slider Height
    var winH   = $(window).height(),
        navH   = $('.navbar').innerHeight();
        $('.caption').height(winH - navH);

});

    /*slider*/

    var swiper = new Swiper('.swiper-container', {
      slidesPerView: "auto",
      spaceBetween: 150,
      centeredSlides: true,
      grabCursor :true,
      loop: true,
      breakpoints: {
        // when window width is >= 320px
        320: {
          
          spaceBetween: 30
        },
        // when window width is >= 480px
        480: {
          
          spaceBetween: 60
        },
        // when window width is >= 640px
        640: {
         
          spaceBetween: 80
        },
        // when window width is >= 992px
        992: {
  
          spaceBetween: 100
        },
                // when window width is >= 1200px
                1200: {
  
                  spaceBetween: 120
                }
      }
    });



    /* collapse*/

    $(document).ready(function(){
      $('#headingOne').toggleClass('changed');
    
      /*obj*/
      $('#item1').on("click",function(){
        $('#j').toggleClass("rotate-a");
        $('#headingTwo').removeClass("changed");
        $('#headingThree').removeClass("changed");
        if($("#item1").attr("aria-expanded","true")){
          $('#headingOne').toggleClass('changed');
        }
      })

          /*vision*/
          $('#item2').on("click",function(){
            $('#v').toggleClass("rotate");
            $('#headingOne').removeClass("changed");
            $('#headingThree').removeClass("changed");
            if($("#item2").attr("aria-expanded","true")){
              $('#headingTwo').toggleClass('changed');
              }
          })


      /*obj*/
      $('#item3').on("click",function(){
        $('#m').toggleClass("rotate");
        $('#headingOne').removeClass("changed");
        $('#headingTwo').removeClass("changed");
        if($("#item3").attr("aria-expanded","true")){
          $('#headingThree').toggleClass('changed');
        }
      })

    });
  
  /* Change active class while clicking */


$(document).ready(function () {
  var url = window.location;
    // Will only work if string in href matches with location
        $('.navbar-nav li .zc[href="' + url + '"]').parent().addClass('active');

    // Will also work for relative and absolute hrefs
        $('.navbar-nav li .zc').filter(function () {
            return this.href == url;
        }).parent().addClass('active');
        
    });

/*Change border Width When hover*/

$(".project .card").hover(function(){
$(this).siblings().toggleClass("changed");
})

$(".map .form-m .btn-cstm").hover(function(){
$(this).toggleClass("changed");
})

/* Project slider */

    lightbox.option({
      'disableScrolling': true,
      'alwaysShowNavOnTouchDevices': true,
      'positionFromTop': 180,
      'showImageNumberLabel': false,
    })

    