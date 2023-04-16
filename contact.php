<!DOCTYPE html>
<html lang="zxx">

<head>
  <title>Building Buddy | Contact</title>
  <!--meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="Building buddy, property" />
  <script>
    addEventListener("load", function() {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  <!--//meta tags ends here-->
  <!--booststrap-->
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
  <!--//booststrap end-->
  <!-- font-awesome icons -->
  <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
  <!-- //font-awesome icons -->
  <!--stylesheets-->
  <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
  <!--//stylesheets-->
  <!-- For Clients slider -->
  <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
  <!-- //Clients flexs slider-->
  <link href="//fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Raleway:400,500,600" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/lightslider.css" />
  <style type="text/css">
    .social-list li {
      position: unset;
      width: unset;
    }

    .glass {
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
    }

    .contact-forms input,
    .contact-forms textarea {
      color: #b9b0b0;
      border-color: #b9b0b0;
    }

    .sent-butnn {
      color: #b9b0b0;
      border-color: #b9b0b0;
      padding: 5px 0;
    }

    .contact-forms input::-webkit-input-placeholder,
    .contact-forms textarea::-webkit-input-placeholder {
      /* Chrome/Opera/Safari */
      color: #b9b0b0;
    }

    .contact-forms input::-moz-placeholder,
    .contact-forms textarea ::-moz-placeholder {
      /* Firefox 19+ */
      color: #b9b0b0;
    }

    .contact-forms input:-ms-input-placeholder,
    .contact-forms textarea:-ms-input-placeholder {
      /* IE 10+ */
      color: #b9b0b0;
    }

    .contact-forms input:-moz-placeholder,
    .contact-forms textarea:-moz-placeholder {
      /* Firefox 18- */
      color: #b9b0b0;
    }

    .contact-forms input,
    .contact-forms textarea {
      padding: .445em 0.5em;
    }

    @media(min-width:800px) {
      .form1 {
        flex: 47%;
        max-width: 47%;
        padding: 0;
      }

      .contact .glass {
        padding: 0 22px;
      }
    }

    @media(min-width:568px) and (max-width: 1440px) {
      .contact {
        margin: 0 -8px;
      }
    }

    @media (min-width : 1400px) {
      .slider-info {
        padding-top: calc(100vh/2 - 165px);
      }
    }
  </style>
</head>

<body>
  <div class="header-outs" id="header">
    <div class="header-w3layouts">
      <div class="container">
        <div class="col-12">
          <!--//navigation section -->
          <?php include 'includes/navbar.php' ?>

          <!--div class="w3ls_search">
              <div class="cd-main-header">
                <ul class="cd-header-buttons">
                  <li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
                </ul>
              </div>
              <div id="cd-search" class="cd-search">
                <form action="#" method="post">
                  <input name="Search" type="search" placeholder="Click enter after typing...">
                </form>
              </div>
            </div-->
        </div>
      </div>
      <div class="clearfix"> </div>
    </div>
    <!-- //Navigation -->
    <!-- Slideshow 4 -->
    <div class="slider">
      <div class="callbacks_container">
        <ul class="" id="slider4">
          <li>
            <div class="slider-img one-img zoom">
              <div class="container">
                <div class="slider-gap-top">
                  <div class="slider-info text-left">
                    <section class="contact pb-4 m-0">
                      <div class="container py-lg-4 py-md-4 py-sm-4 py-3 glass" style="background: rgb(59 53 53 / 57%); max-width: 1300px">
                        <div class="row py-2 m-0">
                          <div class="" style="width: 1%">
                          </div>
                          <div class="col-md-6 title-sub text-center mb-lg-5 mb-md-4 mb-sm-4">
                            <div class="row" style="height: 100%; margin:0">
                              <div class="my-auto">
                                <h3 class="mb-3 title mb-md-4 mb-sm-3 mb-3">CONTACT US</h3>
                                <p style="padding:3px 0 0 0;">Want to learn more about this property? Call 011-41518626 or 9999518626, email mohit@rawalrealtor.com or fill out the form below for further information.</p>
                                <ul class="team-social social-list my-4">
                                  <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                  <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                  <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                  <li><a href="#"><span class="fab fa-whatsapp"></span></a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="" style="width: 2%">
                          </div>
                          <div class="col-md-5 agile-info-para form1">
                            <!--contact-->
                            <form action="#" method="post">
                              <div class="row agile-wls-contact-mid">
                                <div class="col-lg-12 col-md-12">
                                  <div class="form-group contact-forms">
                                    <input type="text" class="form-control" placeholder="Name" required="">
                                  </div>
                                  <div class="form-group contact-forms">
                                    <input type="email" class="form-control" placeholder="Email" required="">
                                  </div>
                                  <div class="form-group contact-forms">
                                    <input type="text" class="form-control" placeholder="Phone" required="">
                                  </div>
                                  <div class="form-group contact-forms">
                                    <textarea class="form-control" rows="3" placeholder="Message" required=""></textarea>
                                  </div>
                                  <button type="submit" class="text-center sent-butnn">SUBMIT</button>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                        <!--//contact-->
                        <!--contact-form-->
                      </div>
                      <!--//contact-map -->
                    </section>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <!-- This is here just to demonstrate the callbacks -->
      <!-- <ul class="events">
          <li>Example 4 callback events</li>
          </ul>-->
      <div class="clearfix"></div>
    </div>
  </div>
  <!-- //banner -->



  <!--footer-->
  <?php include 'includes/footer.php' ?>

  <!-- //Footer -->
  <!--js working-->
  <script src='js/jquery-2.2.3.min.js'></script>
  <!--//js working-->
  <!--nav script -->
  <script src="js/overlay.js"></script>
  <!-- /nav script -->
  <!--search-bar-->
  <script src="js/main.js"></script>
  <!--//search-bar-->
  <!--responsiveslides banner-->
  <script src="js/responsiveslides.min.js"></script>
  <script>
    // You can also use "$(window).load(function() {"
    $(function() {
      // Slideshow 4
      $("#slider4").responsiveSlides({
        auto: true,
        pager: false,
        nav: true,
        speed: 900,
        namespace: "callbacks",
        before: function() {
          $('.events').append("<li>before event fired.</li>");
        },
        after: function() {
          $('.events').append("<li>after event fired.</li>");
        }
      });

    });
  </script>
  <!--// responsiveslides banner-->
  <!--About OnScroll-Number-Increase-JavaScript -->
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.countup.js"></script>
  <script>
    $('.counter').countUp();
  </script>
  <!-- //OnScroll-Number-Increase-JavaScript -->
  <!-- clients FlexSlider-JavaScript -->
  <script defer src="js/jquery.flexslider.js"></script>
  <script>
    $(window).load(function() {
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider) {
          $('body').removeClass('loading');
        }
      });
    });
  </script>
  <!-- //clients FlexSlider-JavaScript -->
  <!-- start-smoth-scrolling -->
  <script src="js/move-top.js"></script>
  <script src="js/easing.js"></script>
  <script>
    jQuery(document).ready(function($) {
      $(".scroll").click(function(event) {
        event.preventDefault();
        $('html,body').animate({
          scrollTop: $(this.hash).offset().top
        }, 900);
      });
    });
  </script>
  <!-- start-smoth-scrolling -->
  <!-- here stars scrolling icon -->
  <script>
    $(document).ready(function() {

      var defaults = {
        containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear'
      };


      $().UItoTop({
        easingType: 'easeOutQuart'
      });

    });
  </script>
  <!-- //here ends scrolling icon -->
  <!--bootstrap working-->
  <script src="js/bootstrap.min.js"></script>
  <!-- //bootstrap working-->
  <!-- //lightslider -->
  <script src="js/lightslider.js"></script>
</body>

</html>