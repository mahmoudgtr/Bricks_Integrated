        <div class="copyright">
            <div class="container">
                <div class="row pt-3 pb-3 border-top text-center">  
                    <div class="col-xl-6"><?php echo $expr['copy-write']; ?></div>
                    <div class="col-xl-6 "><?php echo $expr['d-d']; ?></div>
                </div>
            </div>
        </div>
      
    <script src="<?php echo $js; ?>jquery-3.5.1.js"></script>
    <script src="<?php echo $js; ?>popper.min.js"></script>
    <script src="<?php echo $js; ?>bootstrap.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo $js; ?>simplebar.js"></script>
    <script src="<?php echo $js; ?>lightbox.min.js"></script>
    <script src="<?php echo $js; ?>main.js"></script>

        <script >
            /* Hide Read more button*/
  
      $("#readM").click(function(){
         var text = $('#readM').text();
      $('#readM').text(
        text == "<?php echo $expr['read-less']; ?>" ? "<?php echo $expr['read-more']; ?>" : "<?php echo $expr['read-less']; ?>");
      $('#ar-u').toggleClass("rotate-u");
      });

    </script>
</body>
</html>