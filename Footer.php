<section>
            <div class="footer-logo-row">
                <div class="container">
                   <div class="footer-logo-block">
                        <img src="image/logo-1-f.png" class="img-responsive">
                   </div> 
                   <div class="footer-logo-block">
                        <img src="image/logo-2-f.png" class="img-responsive">
                   </div>     
                   <div class="footer-logo-block">
                        <img src="image/logo-3-f.png" class="img-responsive">
                   </div>     
                   <div class="footer-logo-block">
                        <img src="image/logo-4-f.png" class="img-responsive">
                   </div>     
                   <div class="footer-logo-block">
                        <img src="image/logo-5-f.png" class="img-responsive">
                   </div>     
                </div>    
            </div>
        </section>
       
        <section>
            <div class="footer-block">
                <div class="container">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 footer-block-logo">
                        <div class="footer-logo">
                            <img src="image/Header-logo.png" class="img-responsive">
                        </div>
                        <h4>020 7272 3726</h4>
                        <h5><a href="#">info@metadatatraining.co.uk</a></h5>
                        <div class="socialfooter">
                            <a href="" class="sprite fb"></a>  
                            <a href="" class="sprite in"></a>  
                            <a href="" class="sprite tw"></a>  
                            <a href="" class="sprite gplus"></a>  
                        </div>  
                        <h5>&copy; Metadata Ltd 2016</h5>  
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 go-to">
                        <h5>Go to</h5>
                        <ul class="first-one">
                          <li><a href="#">Home</a></li>
                          <li><a href="#">About</a></li>
                          <li><a href="#">Courses</a></li>
                          <li><a href="#">Qualifications</a></li>
                        </ul>
                        <ul class="second-one">
                          <li><a href="#">Date & Bookings</a></li>
                          <li><a href="#">Resources</a></li>
                          <li><a href="#">Locations</a></li>
                          <li><a href="#">Trainers</a></li>
                        </ul>    
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 findus">
                        <h5>Find us</h5>
                        <address class="sprite locationfooter">
                            the Agile.Space<br>
                            2-6 Cropley Street<br>
                            London<br>
                            United Kingdom<br>
                            N1 7PR
                        </address>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 nevermissfooter">
                        <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                            <h5>Never miss a thing</h5>
                            <p> Sign up to our monthly newsletter now and
                                receive instant access to exclusive content,
                                offers, tips and more
                            </p>
                        </div>    
                        <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                            <input type="text" class="enteremail form-control" value="" text="" placeholder="Enter your email">
                            <a class="btn cyan-blue view-btn subfooter">submit</a>
                        </div>
                    </div>    
                </div>    
            </div>    
        </section>    
</body>
    <script>
        $(document).ready(function() {
          $('#owl-carousel1.owl-carousel').owlCarousel({
            loop: true,
            margin: 0,
            responsiveClass: true,
            responsive: {
              0: {
                items: 1,
                nav: true
              },
              767: {
                items: 1,
                nav: false
              },
              1000: {
                items: 3,
                nav: true,
                loop: false,
                margin: 0
              }
            }
          })
        })
    </script>
    <script>
        $(document).ready(function() {
          $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 0,
            responsiveClass: true,
            responsive: {
              0: {
                items: 1,
                nav: true
              },
              767: {
                items: 1,
                nav: false
              },
              1000: {
                items: 4,
                nav: true,
                loop: false,
                margin: 0
              }
            }
          })
        })
    </script>
    <script type="text/javascript">
        var $grid = $('.grid').isotope({
          itemSelector: '.grid-item',
          percentPosition: true,
          masonry: {
            columnWidth: '.grid-sizer'
          }
        });
        // layout Isotope after each image loads
        $grid.imagesLoaded().progress( function() {
          $grid.isotope('layout');
        });
        $('.box').isotope({
          itemSelector: '.box-item',
          percentPosition: true,
          masonry: {
            columnWidth: '.box-sizer'
          }
        });
    </script>
    <script type="text/javascript">
      function Accreditedheight(){
        if($('.BCS-Accredited-courses').length){
            if($(window).width() >= 768){
          
          var x = $('.BCS-Accredited-courses').position();

          var y = $('.BCS-Accredited-courses').width();

          var z = x.left + y + 20

          $('.trainer.Accredited').css('background-position',z+'px center');
        }
        else{
          $('.trainer.Accredited').css('background-position','center 400px');
        }

        }
        

      }
       $(window).resize(function() {
          Accreditedheight();
        });
       $(window).load(function() {
          Accreditedheight();
        });


    </script>

    <script type="text/javascript">
      function Diplomaforyou(){
        if($('.Diploma-foryou-right').length){
          if($(window).width() >= 768){

          var a = $('.Diploma-foryou-right').position();

          var b = $('.Diploma-foryou-right').width();

          var c = a.left + b + 20;

          $('.Diploma-foryou.bg-gray').css('background-position',c+'px center');
        }
        else{
          $('.Diploma-foryou.bg-gray').css('background-position','center 400px');
        }

      }

        }
        
       $(window).resize(function() {
          Diplomaforyou();
        });
       $(window).load(function() {
          Diplomaforyou();
        });
    </script>
    <script>
      jQuery(document).ready(function() {
          jQuery('.headerdown').scrollToFixed();
       });
    </script>
        
</html>