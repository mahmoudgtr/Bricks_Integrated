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

/*scroll down*/

$(document).ready(function() {
    $(".scroll-down").click(function() {
         $('html, body').animate({
             scrollTop: $(".swiper-container").offset().top
         }, 1500);
     });
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
          
          spaceBetween: 50
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

    /* Hide Read more button*/

    $(document).ready(function(){
      $("#readM").click(function(){
        $(this).hide();
      });
    });

    /* collapse*/

    $(document).ready(function(){
      $('#headingOne').toggleClass('changed');
      /*obj*/
      $('#item1').on("click",function(){
        $('#j').toggleClass("rotate");
        if($("#item1").attr("aria-expanded","true")){
          $('#j').removeClass("fa-chevron-circle-down").addClass("fa-chevron-circle-up");
          $('#headingOne').toggleClass('changed');
        }
      })

          /*vision*/
          $('#item2').on("click",function(){
            $('#v').toggleClass("rotate");
            if($("#item2").attr("aria-expanded","true")){
              $('#headingTwo').toggleClass('changed');
              }
          })


      /*obj*/
      $('#item3').on("click",function(){
        $('#m').toggleClass("rotate");
        if($("#item3").attr("aria-expanded","true")){
          $('#headingThree').toggleClass('changed');
        }
      })

    });
  
