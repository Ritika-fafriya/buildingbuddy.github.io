<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>RAWAL REALTOR | Properties</title>
    <link rel="icon" href="images/logo.png" type="image/png">
    <!--meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="RAWAL REALTOR, property" />
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
    <link rel="stylesheet" href="css/lightbox.css">
    <link type="text/css" rel="stylesheet" href="css/lightslider.css" />
    <!-- //Clients flexs slider-->
    <link href="//fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Raleway:400,500,600" rel="stylesheet">
    <style type="text/css">
        .lSSlideOuter {
            padding: 0 62px;
        }

        .lSAction>a {
            top: 30%;
        }

        .interiors-text {
            padding-top: 129px;
        }

        .block-nav li {
            color: #dad0d0;
            display: inline-block;
            padding: 0px 5px;
        }

        .block-nav li a {
            border: 1px solid transparent;
            color: #dad0d0;
            font-size: 18px;
            padding: 2px 4px;
        }

        .block-nav li a.active {
            text-decoration: none;
            border-color: #dad0d0;
            font-weight: bold;
        }

        figure {
            /*padding-top: 66.72%;*/
        }

        .residential {
            /*position: absolute;*/
            transform: translateX(-120%);
            transition: transform .3s .1s ease-in-out;
        }

        .commercial {
            transform: translateX(120%);
            transition: transform .3s .1s ease-in-out;
        }

        .gallery .active {
            transform: translateX(0%);
            transition: transform .3s .1s ease-in-out;
        }

        .gallery {
            overflow-x: hidden
        }

        .gallery h5 {
            color: #D9D0D0;
            padding-top: 15px;
            font-size: 18px;
            line-height: 21px;
        }

        .gallery h6 {
            color: #D9D0D0;
            padding-top: 15px;
            font-weight: bold;
            font-size: 18px;
            line-height: 21px;
        }

        .gallery p {
            color: #D9D0D0;
            padding-top: 5px;
            font-size: 14px;
            line-height: 16px;
            font-weight: 400;
        }

        @media (min-width : 1400px) {
            .lSSlideOuter {
                padding: 0 80px;
            }

            .lSAction>a {
                top: 33%;
            }
        }

        .lightSlider h5,
        .lightSlider p,
        .lightSlider h6 {
            display: none;
        }

        .interiors-text {
            padding-top: 129px;
        }

        .block-nav li {
            color: #dad0d0;
            display: inline-block;
            padding: 0 5px;
        }

        .block-nav li a {
            border: 1px solid transparent;
            color: #dad0d0;
            font-size: 18px;
            padding: 2px 4px;
        }

        .block-nav li a.active {
            text-decoration: none;
            border-color: #dad0d0;
            font-weight: bold;
        }

        figure {
            padding-top: 0%;
            margin-right: 12px;
            margin-bottom: 12px;
        }

        .residential {
            display: none;
            transform: translateX(-120%);
            transition: transform .3s .1s ease-in-out;
        }

        .commercial {
            display: none;
            transform: translateX(120%);
            transition: transform .3s .1s ease-in-out;
        }

        .gallery .active {
            display: block;
            transform: translateX(0%);
            transition: transform .3s .1s ease-in-out;
        }

        .gallery {
            overflow-x: hidden
        }

        .grid figure figcaption {
            padding: 0.5em 0.5em;
            color: #fff;
            text-transform: uppercase;
            font-size: 1.25em;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            background: rgb(0 0 0 / 40%);
            position: absolute;
            top: 0;
            left: 0;
            right: 12px;
        }

        .grid figure figcaption>a {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 217px;
            ;
        }

        .effect-hera {
            max-height: 300px;
            overflow: hidden;
        }
    </style>
</head>

<body>
    <?php include 'includes/navbar.php' ?>

    <!-- //banner -->
    <!--services -->
    <section class="interiors pt-lg-4 pt-md-3 pt-sm-3 pt-3">
        <div class="container interiors-text">
            <div class="title-sub text-center pb-4 pb-md-5 pt-md-3">
                <h3 class="title">PROPERTIES</h3>
                <!--h3 class="title mb-md-3 mb-sm-3 mb-3">PROPERTIES</h3>
                    <ul class="block-nav pt-1">
                      <li><a class="active" href="javascript:showBlock('residential');">RESIDENTIAL</a></li>
                      <li>|</li>
                      <li><a href="javascript:showBlock('commercial');">COMMERCIAL</a></li>
                    </ul-->
            </div>
        </div>
    </section>





    <!--Gallery-->
    <section class="gallery pb-lg-5 pb-md-4 pb-sm-3 pb-3">
        <div class="container-fluid pb-lg-5 pb-md-4 pb-sm-4 pb-3 px-lg-5 px-md-4 px-3 gal active residential" id="residential">
            <!--<div class="px-1">
                    <ul class="lightSlider">
                        <li>
                            <img src="images/properties/punjabi-bagh/1.JPG" id="img1">
                            <h5>PUNJABI BAGH</h5>
                            <p>3 & 4 BHK<br>SECTOR-63, NOIDA</p>
                            <h6>RS. 2.50 Cr*</h6>
                        </li>
                        <li>
                            <img src="images/properties/gurgaon/FRONT ELEVATION.jpeg">
                            <h5>GURGAON</h5>
                            <p>3 & 4 BHK<br>SECTOR-63, NOIDA</p>
                            <h6>RS. 2.50 Cr*</h6>
                        </li>
                        <li>
                            <img src="images/properties/netaji-subhash-place/1.JPG">
                            <h5>NETAJI SUBHASH PLACE</h5>
                            <p>3 & 4 BHK<br>SECTOR-63, NOIDA</p>
                            <h6>RS. 2.50 Cr*</h6>
                        </li>
                        <li>
                            <img src="images/properties/dlf-interiors/IMG_2148.jpg">
                            <h5>DLF INTERIORS</h5>
                            <p>3 & 4 BHK<br>SECTOR-63, NOIDA</p>
                            <h6>RS. 2.50 Cr*</h6>
                        </li>
                    </ul>
                </div>-->
            <div class="row grid gallery-info">
                <div class="col-lg-6 col-md-6 col-sm-6 ">
                    <h4 class="" style="color: white;text-align: center;margin-bottom: 22px;">Residential</h4>
                    <div class="row">
                        <div class="col-lg-12 gallery-grids p-0">
                            <figure class="effect-hera">
                                <img src="images/BB16.jpeg" alt="img15" class="img-fluid">
                                <figcaption>
                                    <h5>Mahalakshmi Nagar<br><span></span></h5>
                                    <a href="images/BB16.jpeg" class="gallery-box" data-lightbox="punjabi-bagh" data-title=""></a>
                                    <p>
                                        <a href="images/BB16.jpeg" class="gallery-box" data-lightbox="punjabi-bagh" data-title=""><!--i class="far fa-file-powerpoint"></i--></a>
                                        <a href="images/BB16.jpeg" class="gallery-box" data-lightbox="punjabi-bagh" data-title=""><!--i class="far fa-file-powerpoint"></i--></a>
                                        <a href="images/BB16.jpeg" class="gallery-box" data-lightbox="punjabi-bagh" data-title=""><!--i class="far fa-file-powerpoint"></i--></a>
                                        <a href="images/BB16.jpeg" class="gallery-box" data-lightbox="punjabi-bagh" data-title=""><!--i class="far fa-file-powerpoint"></i--></a>
                                        <a href="images/BB16.jpeg" class="gallery-box" data-lightbox="punjabi-bagh" data-title=""><!--i class="far fa-file-powerpoint"></i--></a>
                                    </p>
                                    <div class="project-detail-container" id="punjabi-bagh">
                                        <div class="project-detail">
                                            <div class="project-detail-wrapper">
                                                <a href="" onclick="closeProjectDetail()"></a>
                                                <h6>Mahalakshmi Nagar <span></span></h6>
                                                <!--<p>Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since</p>-->
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>


                        <div class="col-lg-12 gallery-grids p-0">
                            <figure class="effect-hera">
                                <img src="images/BB18.jpeg" alt="img15" class="img-fluid">
                                <figcaption>
                                    <h5>Mahalakshmi Nagar<br><span></span></h5>
                                    <a href="images/BB18.jpeg" class="gallery-box" data-lightbox="gurgaon" data-title=""></a>
                                    <p>
                                        <a href="images/BB18.jpeg" class="gallery-box" data-lightbox="gurgaon" data-title=""><!--i class="far fa-file-powerpoint"></i--></a>
                                        <a href="images/BB18.jpeg.jpeg" class="gallery-box" data-lightbox="gurgaon" data-title=""><!--i class="far fa-file-powerpoint"></i--></a>
                                        <a href="images/BB18.jpeg" class="gallery-box" data-lightbox="gurgaon" data-title=""><!--i class="far fa-file-powerpoint"></i--></a>
                                        <a href="images/BB18.jpeg" class="gallery-box" data-lightbox="gurgaon" data-title=""><!--i class="far fa-file-powerpoint"></i--></a>
                                        <a href="images/BB18.jpeg" class="gallery-box" data-lightbox="gurgaon" data-title=""><!--i class="far fa-file-powerpoint"></i--></a>
                                        <a href="images/BB18.jpeg" class="gallery-box" data-lightbox="gurgaon" data-title=""><!--i class="far fa-file-powerpoint"></i--></a>
                                        <a href="images/BB18.jpeg" class="gallery-box" data-lightbox="gurgaon" data-title=""><!--i class="far fa-file-powerpoint"></i--></a>
                                    </p>
                                    <div class="project-detail-container" id="puneet-project">
                                        <div class="project-detail">
                                            <div class="project-detail-wrapper">
                                                <a href="" onclick="closeProjectDetail()"></a>
                                                <h6>Mahalakshmi Nagar <span></span></h6>
                                                <!--<p>Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since</p>-->
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <h4 class="" style="color: white;text-align: center;margin-bottom: 22px;">Commercial</h4>
                    <div class="row">
                        <div class="col-lg-12 gallery-grids p-0">
                            <figure class="effect-hera">
                                <img src="Images/BB18.jpeg" alt="img15" class="img-fluid">
                                <figcaption>
                                    <h5>Mahalakshmi Nagar <br><span></span></h5>
                                    <a href="Images/BB18.jpeg" class="gallery-box" data-lightbox="dlf-capital-greens" data-title=""></a>
                                    <p>
                                        <a href="Images/BB19.jpeg" class="gallery-box" data-lightbox="dlf-capital-greens" data-title=""></a>
                                        <a href="Images/BB19.jpeg2.jpg" class="gallery-box" data-lightbox="dlf-capital-greens" data-title=""><!--i class="far fa-file-powerpoint"></i--></a>
                                        <a href="Images/BB19.jpeg3.jpg" class="gallery-box" data-lightbox="dlf-capital-greens" data-title=""><!--i class="far fa-file-powerpoint"></i--></a>
                                        <a href="Images/BB19.jpeg4.jpg" class="gallery-box" data-lightbox="dlf-capital-greens" data-title=""><!--i class="far fa-file-powerpoint"></i--></a>
                                        <a href="Images/BB19.jpeg" class="gallery-box" data-lightbox="dlf-capital-greens" data-title=""><!--i class="far fa-file-powerpoint"></i--></a>
                                        <a href="Images/BB19.jpeg" class="gallery-box" data-lightbox="dlf-capital-greens" data-title=""><!--i class="far fa-file-powerpoint"></i--></a>
                                        <a href="Images/BB19.jpeg" class="gallery-box" data-lightbox="dlf-capital-greens" data-title=""><!--i class="far fa-file-powerpoint"></i--></a>
                                    </p>
                                    <div class="project-detail-container" id="harleen-project">
                                        <div class="project-detail">
                                            <div class="project-detail-wrapper">
                                                <a href="" onclick="closeProjectDetail()"></a>
                                                <h6>Mahalakshmi Nagar <span></span></h6>
                                                <!--<p>Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since</p>-->
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-lg-12 gallery-grids p-0">
                            <figure class="effect-hera">
                                <img src="Images/BB19.jpeg" alt="dlf" class="img-fluid">
                                <figcaption>
                                    <h5>Mahalakshmi Nagar <br><span></span></h5>
                                    <a href="Images/BB19.jpeg" class="gallery-box" data-lightbox="dlf" data-title=""></a>
                                    <p>
                                        <a href="Images/BB19.jpeg" class="gallery-box" data-lightbox="dlf" data-title=""><!--i class="far fa-file-powerpoint"></i--></a>
                                        <a href="Images/BB19.jpeg" class="gallery-box" data-lightbox="dlf" data-title=""><!--i class="far fa-file-powerpoint"></i--></a>
                                        <a href="Images/BB19.jpeg" class="gallery-box" data-lightbox="dlf" data-title=""><!--i class="far fa-file-powerpoint"></i--></a>
                                        <a href="Images/BB19.jpeg" class="gallery-box" data-lightbox="dlf" data-title=""><!--i class="far fa-file-powerpoint"></i--></a>
                                        <a href="Images/BB19.jpeg" class="gallery-box" data-lightbox="dlf" data-title=""><!--i class="far fa-file-powerpoint"></i--></a>
                                    </p>
                                    <div class="project-detail-container" id="gym-project">
                                        <div class="project-detail">
                                            <div class="project-detail-wrapper">
                                                <a href="" onclick="closeProjectDetail()"></a>
                                                <h6>Mahalakshmi Nagar</h6>
                                                <!--<p>Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since</p>-->
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--div class="container-fluid pb-lg-5 pb-md-4 pb-sm-4 pb-3 px-lg-5 px-md-4 px-3 gal commercial" id="commercial">
              <div class="px-1">
                <ul class="lightSlider">
                  <li>
                      <img src="images/pr1.png">
                      <h5>M3M BROADWAY</h5>
                      <p>RETAIL & OFFICE SPACE<br>SECTOR-71, GURGAON</p>
                      <h6>Rs. 59.00 Lakh*</h6>
                  </li>
                  <li>
                      <img src="images/pr2.png">
                      <h5>M3M BROADWAY</h5>
                      <p>RETAIL & OFFICE SPACE<br>SECTOR-71, GURGAON</p>
                      <h6>Rs. 59.00 Lakh*</h6>
                  </li>
                  <li>
                      <img src="images/pr3.png">
                      <h5>M3M BROADWAY</h5>
                      <p>RETAIL & OFFICE SPACE<br>SECTOR-71, GURGAON</p>
                      <h6>Rs. 59.00 Lakh*</h6>
                  </li>
                  <li>
                      <img src="images/pr1.png">
                      <h5>M3M BROADWAY</h5>
                      <p>RETAIL & OFFICE SPACE<br>SECTOR-71, GURGAON</p>
                      <h6>Rs. 59.00 Lakh*</h6>
                  </li>
                  <li>
                      <img src="images/pr2.png">
                      <h5>KINGS COURT</h5>
                      <p>RETAIL & OFFICE SPACE<br>SECTOR-71, GURGAON</p>
                      <h6>Rs. 59.00 Lakh*</h6>
                  </li>
                </ul>
              </div>
            </div-->


    </section>
    <!--//Gallery-->


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
    <!--// responsiveslides banner-->
    <!--About OnScroll-Number-Increase-JavaScript -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.countup.js"></script>
    <script>
        $('.counter').countUp();
    </script>
    <!-- //OnScroll-Number-Increase-JavaScript -->
    <!-- gallery -->
    <script src="js/lightbox-plus-jquery.min.js"></script>
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
    <script type="text/javascript">
        function showBlock(id) {
            $('.gal').removeClass('active');
            document.getElementById(id).classList.add("active");
        }

        $('.block-nav li a').on('click', function() {
            $('.block-nav li a.active').removeClass('active');
            $(this).addClass('active');
        });
    </script>
    <script src="js/lightslider.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".lightSlider").lightSlider({
                item: 3,
                autoWidth: false,
                slideMove: 1, // slidemove will be 1 if loop is true
                slideMargin: 35,

                addClass: '',
                mode: "slide",
                useCSS: true,
                cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
                easing: 'linear', //'for jquery animation',////

                speed: 400, //ms'
                auto: false,
                loop: true,
                slideEndAnimation: true,
                pause: 2000,

                keyPress: false,
                controls: true,
                prevHtml: '',
                nextHtml: '',

                rtl: false,
                adaptiveHeight: false,

                vertical: false,
                verticalHeight: 500,
                vThumbWidth: 100,

                thumbItem: 10,
                pager: true,
                gallery: false,
                galleryMargin: 5,
                thumbMargin: 5,
                currentPagerPosition: 'middle',

                enableTouch: true,
                enableDrag: true,
                freeMove: true,
                swipeThreshold: 40,

                responsive: [{
                        breakpoint: 800,
                        settings: {
                            item: 2,
                            slideMove: 1,
                            slideMargin: 20,
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            item: 1,
                            slideMove: 1
                        }
                    }
                ],

                onBeforeStart: function(el) {},
                onSliderLoad: function(el) {},
                onBeforeSlide: function(el) {},
                onAfterSlide: function(el) {},
                onBeforeNextSlide: function(el) {},
                onBeforePrevSlide: function(el) {}
            });
        });

        $(document).ready(function() {
            var h = $(".lslide #img1").height();
            var top = h / 2 - 5;
            $(".lSAction > a").css('top', top);
        });
        $(document).on('load', '#img1', function() {
            var h = $("#img1").height();
            var top = h / 2 - 5;
            $(".lSAction > a").css('top', top);
        });

        $("#img1").on('resize load', function(e) {
            var h = $("#img1").height();
            var top = h / 2 - 5;
            $(".lSAction > a").css('top', top);
        });

        $(window).on('resize orientationchange', function(e) {
            var h = $(".lslide #img1").height();
            var top = h / 2 - 5;
            $(".lSAction > a").css('top', top);
        });

        $(document).ready(function() {
            $(".gallery-box").on("click", function() {
                var id = $(this).attr("data-lightbox");
                var projectDetail = $("#" + id).html();
                if ($(".lb-container .project-detail").length > 0) {
                    $(".lb-container .project-detail").remove();
                }
                $(".lb-container").append(projectDetail);
            });
        });

        function closeProjectDetail(element) {
            $(".lb-container .project-detail").toggleClass("closed")
        }
    </script>
</body>

</html>