<!DOCTYPE html>
<html lang="zxx">


<!-- navabr common start -->

<head>
    <title>BUILDING BUDDY</title>
    <link rel="icon" href="images/logo-buildingbuddy.jpg" type="image/png">
    <!--meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="BUILDING BUDDY, property" />
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
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/lightslider.css" />
    <style type="text/css">
        .lSSlideOuter .lSPager.lSpg {
            display: none;
        }

        .lSAction>a {
            top: 45%;
        }

        @media(min-width:800px) {
            #lightSlider1 {
                margin: 0 -50px;
            }

            .form1 {
                flex: 45%;
                max-width: 45%;
                padding-right: 7px;
                padding-left: 6px;
            }
        }

        @media(min-width:992px) {
            .toggle-button {
                top: 82px;
                padding: 0;
                margin: 0;
                right: 66px;
            }

            a.navbar-brand img {
                height: 174px;
            }

            #lightSlider1 {
                margin: 0 -20px;
            }

            .overlay ul {
                top: 157px;
                text-align: right;
                padding: 0;
                float: right;
                right: 256px;
            }

            .overlay ul li a {
                line-height: 35px;
            }
        }

        @media(min-width:1050px) {
            a.navbar-brand img {
                height: 174px;
            }
        }

        @media(min-width:1110px) {
            #lightSlider1 {
                margin: 0 -55px;
            }
        }

        /* prealoader */
        #preloader {
            width: 100vw;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #221e1f;
            /* change if the mask should have another color then white */
            z-index: 99999999;
            /* makes sure it stays on top */
        }

        body {
            overflow: hidden;
        }

        .spinner {
            width: 70vh;
            height: 70vh;

            /*border: 2px solid #f3f3f3;*/
            border-top: 3px solid #f25a41;
            border-radius: 100%;

            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;

            animation: spin 1.5s infinite linear;
        }

        @media(max-width:992px) {
            .spinner {
                width: 80vw;
                height: 80vw;
            }
        }

        @keyframes spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        #svg {
            transform: rotate(-90deg);
            margin: auto;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            position: absolute;
        }

        #svg circle {
            stroke-dashoffset: 0;
            transition: stroke-dashoffset .5s linear;
            stroke: #4b4547;
            stroke-width: 3px;
        }

        #svg #bar {
            stroke: #c5c5c5;
            transition: stroke-dashoffset 2s linear;
        }

        #cont {
            display: block;
            /*box-shadow: 0 0 1em black;*/
            border-radius: 100%;

        }

        /*#cont:after {
              position: absolute;
              display: block;
              height: 160px;
              width: 160px;
              left: 50%;
              top: 50%;
              box-shadow: inset 0 0 1em black;
              content: attr(data-pct)"%";
              margin-top: -80px;
              margin-left: -80px;
              border-radius: 100%;
              line-height: 160px;
              font-size: 2em;
              text-shadow: 0 0 0.5em black;
            }*/

        input {
            color: #000;
        }
    </style>
</head>

<body style="overflow: hidden;">
    <?php include 'includes/navbar.php' ?>

    <!-- Slideshow 4 -->
    <div class="slider">
        <div class="callbacks_container">
            <ul class="rslides" id="slider4">
                <li>
                    <div class="slider-img one-img ">
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
    <!--services -->
    <section class="service py-lg-4 py-md-3 py-sm-3 py-3">
        <div class="container-fluid pt-lg-5 pt-md-4 pt-sm-4 pt-3">
            <div class="title-sub text-center mb-lg-4 mb-md-4 mb-sm-4 my-3 pb-3 pb-md-5 pt-md-4">
                <h3 class="title mb-md-4 mb-sm-3 mb-3 pb-3">About Us</h3>
                <p class="design-para">BUILDING BUDDY, has become synonymous with exquisite taste, unparalleled service and unmatched quality. Operating with the utmost in business ethics, we are known for our reliability and attention to detail on every project making your experience with us aunthentically diffrent. We are located at Asian Arcade, Bhawarkua Main Rd, near Aanad Hospital, Indore. As a collective team, the designers create both modern and traditional design with a unique twist, turning any space in to a powerful expression of the client's personality. Whether yours is a modest family home or a palatial estate, a small business office or a grand resort, Building Buddy is able to take on any size project and implement a beutiful design transformation.</p>
            </div>

        </div>
    </section>
    <!--about -->
    <!-- services -->
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
    <!-- services -->
    <!-- footer section start -->

    <?php include 'includes/footer.php' ?>
    <!-- footer section end -->


    <!-- //Footer -->
    <!--js working-->
    <script src='js/jquery-2.2.3.min.js'></script>
    <!--//js working-->
    <!-- preloader -->
    <script type="text/javascript">
        var isLoaderRunning = true;
        var winWidth = $(window).height() <= $(window).width() ? $(window).height() : $(window).width();
        var r = winWidth * 0.35;
        var width = winWidth * 0.72;
        var cx = width / 2;
        var c = 2 * r * Math.PI;

        $("#cont").html('<svg id="svg" width="' + width + '" height="' + width + '" viewPort="0 0 ' + cx + ' ' + cx + '" version="1.1" xmlns="http://www.w3.org/2000/svg"><circle id="loader-path" r="' + r + '" cx="' + cx + '" cy="' + cx + '" fill="transparent" stroke-dasharray="' + c + '" stroke-dashoffset="0" style="stroke-dashoffset:' + c + '"></circle><circle id="bar" r="' + r + '" cx="' + cx + '" cy="' + cx + '" fill="transparent" stroke-dasharray="' + c + '" stroke-dashoffset="0" style="stroke-dashoffset:' + c + '"></circle></svg>');
        $("#preloader img").css("width", r * 1.4);

        function svgBarStroke(pct) {
            var val = pct;
            var $circle = $('#svg #bar');
            var r = $circle.attr('r');
            var c = Math.PI * (r * 2);

            if (val < 0) {
                val = 0;
            }
            if (val > 100) {
                val = 100;
            }

            var pct = ((100 - val) / 100) * c;

            $circle.css({
                strokeDashoffset: pct
            });

            $('#cont').attr('data-pct', val);
        }

        function loaderPathStroke(pct) {
            var val = pct;
            var $circle = $('#svg #loader-path');
            var r = $circle.attr('r');
            var c = Math.PI * (r * 2);

            if (val < 0) {
                val = 0;
            }
            if (val > 100) {
                val = 100;
            }

            var pct = ((100 - val) / 100) * c;

            $circle.css({
                strokeDashoffset: pct
            });

            $('#cont').attr('data-pct', val);
        }
        setTimeout(loaderPathStroke, 200, 100);
        setTimeout(svgBarStroke, 1000, 90);
        setTimeout(function() {
            isLoaderRunning = false;
        }, 2000);

        $(window).on('load', function() { // makes sure the whole site is loaded
            function preloader() {
                if (isLoaderRunning) {
                    return;
                } else {
                    $('#svg #bar').css("transition-duration", ".5s");
                    setTimeout(svgBarStroke, 300, 100);
                    $('#preloader').delay(1000).fadeOut(2000); // will fade out the white DIV that covers the website. 
                    $('body').delay(1000).css({
                        'overflow': 'visible'
                    });
                    setTimeout(svgBarStroke, 1010, 0);
                    clearInterval(mytimer);
                }
            }
            var mytimer = setInterval(preloader, 200);

        });
    </script>
    <!-- preloader -->
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
    <script type="text/javascript">
        $(document).ready(function() {
            $("#lightSlider").lightSlider({
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
                auto: true,
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
            var top = h / 2 - 2;
            $(".lSAction > a").css('top', top);
        });
        $(document).on('load', '#img1', function() {
            var h = $("#img1").height();
            var top = h / 2 - 2;
            $(".lSAction > a").css('top', top);
        });

        $("#img1").on('resize load', function(e) {
            var h = $("#img1").height();
            var top = h / 2 - 2;
            $(".lSAction > a").css('top', top);
        });

        $(window).on('resize orientationchange', function(e) {
            var h = $(".lslide #img1").height();
            var top = h / 2 - 2;
            $(".lSAction > a").css('top', top);
        });
    </script>


</body>

</html>