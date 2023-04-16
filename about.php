<!DOCTYPE html>
<html lang="zxx">

<head>
  <title>BUILDING BUDDY | About</title>
  <link rel="icon" href="images/logo-buildingbuddy.jpg" type="image/png">
  <!--meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
  <link href="//fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Raleway:400,500,600" rel="stylesheet">
  <style type="text/css">
    .counter li {
      margin: 10px 0;
      width: 33.33%;
    }

    @media(min-width: 1349px) and (max-width: 1500px) {
      .about .container {
        max-width: 1260px;
      }
    }

    @media(min-width: 1501px) and (max-width: 1800px) {
      .about .container {
        max-width: 1460px;
      }
    }
  </style>
</head>

<body>
  <!--headder-->
  <div class="header-outs" id="header">
    <div class="header-w3layouts">
      <div class="container">
        <div class="col-12">
          <!--//navigation section -->
          <?php include 'includes/navbar.php' ?>
          <!-- //Navigation -->
          <!--//headder-->
          <!-- banner -->
          <div class="inner_page-banner about-banner">
          </div>
          <!--//banner -->
          <!--about-->
          <!--about -->
          <section class="about pt-lg-3 pt-md-3 pt-sm-3 pt-3" id="about">
            <div class="container pb-lg-5 pb-md-5 pb-sm-4 pb-4">
              <div class="row">
                <div class="col-md-12">
                  <div class="title-sub mb-lg-5 mb-md-4 mb-sm-4 mb-3 text-center">
                    <h3 class="title mb-md-4 mb-sm-3 mb-3 fadeInUp">ABOUT US</h3>
                    <p style="max-width: 100%" class="about-us-para fadeInUp">BUILDING BUDDY, has become synonymous with exquisite taste, unparalleled service and unmatched quality. Operating with the utmost in business ethics, we are known for our reliability and attention to detail on every project making your experience with us aunthentically diffrent. We are located at Asian Arcade, Bhawarkua Main Rd, near Aanad Hospital,
                      Indore. As a collective team, the designers create both modern and traditional design with a unique twist, turning any space in to a powerful expression of the client's personality. Whether yours is a modest family home or a palatial estate, a small business office or a grand resort, Building Buddy is able to take on any size project and implement a beutiful design transformation.</p>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="services pb-lg-4 pt-lg-5 py-md-3 py-sm-3 py-3 mt-3 about fadeInUp">
            <div class="container pb-lg-5 pb-md-5 pb-sm-4 pb-4">
              <div class="title-sub text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
                <h3 class="title mb-md-4 mb-sm-3 mb-3">OUR SERVICES</h3>
              </div>
              <div class="row title-sub text-center pt-5">
                <div class="col-lg-3 col-md-6 col-sm-6 abt-inner-agile">
                  <div class="abt-one-w3layouts-one abut-inner-img">
                  </div>
                  <h6 class="top-title">SPACE<br>PLANNING</h6>
                  <p>Our conceptual designing of your space is don by asethetically reviewing clients like and desires. In the space plan we establish the lifestyle or professional necessities. We make sure you maximize your space with consideration to comfort, efficiency, and traffic flo.</p>
                </div>
                <div class="col-lg-3 title-sub text-center col-md-6 col-sm-6 abt-inner-agile">
                  <div class="abt-one-w3layouts-two abut-inner-img">
                  </div>
                  <h6 class="top-title">COLOR<br>CONSULTATION</h6>
                  <p>Having design expertise for many years, we identify your personal colour palette so that your walls are draped with the colors you love. And for that special touch, and texture and interest to your walls with color washing, sponging, ragging, marbling or the latest rage-plaster stenciling.</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 abt-inner-agile">
                  <div class="abt-one-w3layouts-three abut-inner-img">
                  </div>
                  <h6 class="top-title">FURNITURE &<br>ACCESSORIES</h6>
                  <p>We are excited to offer our clients quality furniture and accessories that are highly customisable. Clients are free to choose and prefer any range of styles and prices to help you create those unique spaces. And we know where to find all the cool stuff.</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 abt-inner-agile">
                  <div class="abt-one-w3layouts-four abut-inner-img">
                  </div>
                  <h6 class="top-title">SPACE<br>RENOVATION</h6>
                  <p>We are skillful at desiging a total, fully-gutted remodel when nothing is left of the original. We also enjoy the challenge of making what is left behind look new again. In either case, we deliver your vision and create a new space you will cherish for years to come.</p>
                </div>
              </div>
            </div>
          </section>


          <!--//team-->
          <!--footer-->
          <?php include 'includes/footer.php' ?>

          <!-- //Footer -->
          <!--js working-->
          <script src='js/jquery-2.2.3.min.js'></script>
          <!--//js working-->
          <!--search-bar-->
          <script src="js/main.js"></script>
          <!--//search-bar-->
          <!--nav script -->
          <script src="js/overlay.js"></script>
          <!-- /nav script -->
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
          <script src="js/chart.min.js"></script>
          <script src="js/chart-data.js"></script>
          <script src="js/easypiechart.js"></script>
          <script src="js/easypiechart-data.js"></script>
          <script type="text/javascript">

          </script>
</body>

</html>