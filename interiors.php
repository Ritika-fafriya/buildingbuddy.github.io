<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Building Buddy | Interiors</title>
    <!--meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Building Buddy, property" />
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
    <link rel="stylesheet" type="text/css" href="css/set1.css" />
    <!-- //Clients flexs slider-->
    <link href="//fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Raleway:400,500,600" rel="stylesheet">
    <style type="text/css">
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
            padding-top: 56.25%;
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
    </style>
</head>

<body>
    <?php include 'includes/navbar.php' ?>

    <!-- //banner -->
    <!--services -->
    <section class="interiors pt-lg-4 pt-md-3 pt-sm-3 pt-3">
        <div class="container interiors-text">
            <div class="title-sub text-center pb-4 pb-md-5 pt-md-3">
                <h3 class="title">INTERIOR PROJECTS</h3>
                <!--h3 class="title mb-md-3 mb-sm-3 mb-3">INTERIOR PROJECTS</h3--->
                <!--ul class="block-nav pt-1">
                      <li><a class="active" href="javascript:showBlock('residential');">RESIDENTIAL</a></li>
                      <li>|</li>
                      <li><a href="javascript:showBlock('commercial');">COMMERCIAL</a></li>
                    </ul-->
            </div>
        </div>
    </section>


    <!--Gallery-->
    <section class="gallery pb-lg-4 pb-md-3 pb-sm-3 pb-3">
        <div class="container-fluid pb-lg-5 pb-md-4 pb-sm-4 pb-3 gal active residential" id="residential">
            <div class="row grid gallery-info">
                <div class="col-lg-4 col-md-4 col-sm-6 gallery-grids p-0">
                    <figure class="effect-hera">
                        <img src="Images/BB10.jpeg" alt="img15" class="img-fluid">
                        <figcaption>
                            <h5>MR. &nbsp;Building Buddy<br><span>Delhi</span></h5>
                            <a href="Images/BB10.jpeg" class="gallery-box" data-lightbox="akash-project" data-title=""></a>
                            <p>
                                <a href="Images/BB10.jpeg" class="gallery-box" data-lightbox="akash-project" data-title=""><!--i class="far fa-file-powerpoint"></i--></a>
                                <a href="Images/BB10.jpeg" class="gallery-box" data-lightbox="akash-project" data-title=""><!--i class="far fa-file-powerpoint"></i--></a>
                                <a href="Images/BB10.jpeg" class="gallery-box" data-lightbox="akash-project" data-title=""><!--i class="far fa-file-powerpoint"></i--></a>
                                <a href="Images/BB10.jpeg" class="gallery-box" data-lightbox="akash-project" data-title=""><!--i class="far fa-file-powerpoint"></i--></a>
                            </p>
                            <div class="project-detail-container" id="akash-project">
                                <div class="project-detail">
                                    <div class="project-detail-wrapper">
                                        <a href="" onclick="closeProjectDetail()"></a>
                                        <h5>MR. &nbsp;Building Buddy<br><span>Delhi</span></h5>
                                        <!--<p>Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since</p>-->
                                    </div>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 gallery-grids p-0">
                    <figure class="effect-hera">
                        <img src="Images/BB10.jpeg" alt="img15" class="img-fluid">
                        <figcaption>
                            <h5>MR. &nbsp;Building Buddy<br><span>Delhi</span></h5>
                            <a href="Images/BB10.jpeg" class="gallery-box" data-lightbox="puneet-project" data-title=""></a>
                            <p>
                                <a href="Images/BB10.jpeg" class="gallery-box" data-lightbox="puneet-project" data-title=""><!--i class="far fa-file-powerpoint"></i--></a>
                                <a href="Images/BB10.jpeg" class="gallery-box" data-lightbox="puneet-project" data-title=""><!--i class="far fa-file-powerpoint"></i--></a>
                                <a href="Images/BB10.jpeg" class="gallery-box" data-lightbox="puneet-project" data-title=""><!--i class="far fa-file-powerpoint"></i--></a>
                                <a href="Images/BB10.jpeg" class="gallery-box" data-lightbox="puneet-project" data-title=""><!--i class="far fa-file-powerpoint"></i--></a>

                                <a href="Images/BB10.jpeg.jpg" class="gallery-box" data-lightbox="puneet-project" data-title=""></a>
                            </p>
                            <div class="project-detail-container" id="puneet-project">
                                <div class="project-detail">
                                    <div class="project-detail-wrapper">
                                        <a href="" onclick="closeProjectDetail()"></a>
                                        <h5>MR. &nbsp;Building Buddy<br><span>Delhi</span></h5>
                                        <!--<p>Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since</p>-->
                                    </div>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 gallery-grids p-0">
                    <figure class="effect-hera">
                        <img src="Images/BB10.jpeg" alt="img15" class="img-fluid">
                        <figcaption>
                            <h5>MR. &nbsp;Building Buddy<br><span>Delhi</span></h5>
                            <a href="Images/BB10.jpeg" class="gallery-box" data-lightbox="mandekar-project" data-title=""></a>
                            <p>
                                <a href="Images/BB10.jpeg" class="gallery-box" data-lightbox="mandekar-project" data-title=""><!--i class="far fa-file-powerpoint"></i--></a>
                                <a href="Images/BB10.jpeg" class="gallery-box" data-lightbox="mandekar-project" data-title=""><!--i class="far fa-file-powerpoint"></i--></a>
                                <a href="Images/BB10.jpeg" class="gallery-box" data-lightbox="mandekar-project" data-title=""><!--i class="far fa-file-powerpoint"></i--></a>
                                <a href="Images/BB10.jpeg" class="gallery-box" data-lightbox="mandekar-project" data-title=""><!--i class="far fa-file-powerpoint"></i--></a>
                                <a href="Images/BB10.jpeg" class="gallery-box" data-lightbox="mandekar-project" data-title=""></a>
                            </p>
                            <div class="project-detail-container" id="mandekar-project">
                                <div class="project-detail">
                                    <div class="project-detail-wrapper">
                                        <a href="" onclick="closeProjectDetail()"></a>
                                        <h5>MR. &nbsp;Building Buddy<br><span>Delhi</span></h5>
                                        <!--<p>Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since</p>-->
                                    </div>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 gallery-grids p-0">
                    <figure class="effect-hera">
                        <img src="Images/BB10.jpeg" alt="img15" class="img-fluid">
                        <figcaption>
                            <h5>MR. &nbsp;Building Buddy<br><span>Delhi</span></h5>
                            <a href="Images/BB10.jpeg" class="gallery-box" data-lightbox="ashish-project" data-title=""></a>
                            <p>
                                <a href="Images/BB10.jpeg" class="gallery-box" data-lightbox="ashish-project" data-title=""><!--i class="far fa-file-powerpoint"></i--></a>
                                <a href="Images/BB10.jpeg" class="gallery-box" data-lightbox="ashish-project" data-title=""><!--i class="far fa-file-powerpoint"></i--></a>
                                <a href="Images/BB10.jpeg" class="gallery-box" data-lightbox="ashish-project" data-title=""><!--i class="far fa-file-powerpoint"></i--></a>
                                <a href="Images/BB10.jpeg" class="gallery-box" data-lightbox="ashish-project" data-title=""><!--i class="far fa-file-powerpoint"></i--></a>
                            </p>
                            <div class="project-detail-container" id="ashish-project">
                                <div class="project-detail">
                                    <div class="project-detail-wrapper">
                                        <a href="" onclick="closeProjectDetail()"></a>
                                        <h5>MR. &nbsp;Building Buddy<br><span>Delhi</span></h5>
                                        <!--<p>Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since</p>-->
                                    </div>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 gallery-grids p-0">
                    <figure class="effect-hera">
                        <img src="Images/BB10.jpeg" alt="img15" class="img-fluid">
                        <figcaption>
                            <h5>MR. &nbsp;Building Buddy<br><span>Delhi</span></h5>
                            <a href="Images/BB10.jpeg" class="gallery-box" data-lightbox="harleen-project" data-title=""></a>
                            <p>
                                <a href="Images/BB10.jpeg" class="gallery-box" data-lightbox="harleen-project" data-title=""><!--i class="far fa-file-powerpoint"></i--></a>
                                <a href="#"><!--i class="far fa-file-powerpoint"></i--></a>
                                <a href="#"><!--i class="far fa-file-powerpoint"></i--></a>
                                <a href="#"><!--i class="far fa-file-powerpoint"></i--></a>
                            </p>
                            <div class="project-detail-container" id="harleen-project">
                                <div class="project-detail">
                                    <div class="project-detail-wrapper">
                                        <a href="" onclick="closeProjectDetail()"></a>
                                        <h5>MR. &nbsp;Building Buddy<br><span>Delhi</span></h5>
                                        <!--<p>Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since</p>-->
                                    </div>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 gallery-grids p-0">
                    <figure class="effect-hera">
                        <img src="Images/BB10.jpeg" alt="Gym_Peroject" class="img-fluid">
                        <figcaption>
                            <h5>GYM &nbsp;PROJECT <br><span></span></h5>
                            <a href="Images/BB10.jpeg" class="gallery-box" data-lightbox="gym-project" data-title=""></a>
                            <p>
                                <a href="Images/BB10.jpeg" class="gallery-box" data-lightbox="gym-project" data-title=""><!--i class="far fa-file-powerpoint"></i--></a>
                                <a href="#"><!--i class="far fa-file-powerpoint"></i--></a>
                                <a href="#"><!--i class="far fa-file-powerpoint"></i--></a>
                                <a href="#"><!--i class="far fa-file-powerpoint"></i--></a>
                            </p>
                            <div class="project-detail-container" id="gym-project">
                                <div class="project-detail">
                                    <div class="project-detail-wrapper">
                                        <a href="" onclick="closeProjectDetail()"></a>
                                        <h6>GYM &nbsp;PROJECT</h6>
                                        <!--<p>Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since</p>-->
                                    </div>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>



            </div>
        </div>


        <div class="container-fluid pb-lg-5 pb-md-4 pb-sm-4 pb-3 commercial gal" id="commercial">
            <div class="row grid gallery-info">

            </div>
        </div>

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
    <!-- start-smoth-scrolling -->
    <!-- gallery -->
    <script src="js/lightbox-plus-jquery.min.js"></script>
    <!-- //gallery -->
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

            $(".lb-prev, .lb-next").on("click", function() {
                $(".lb-image img").attr('src', $(".lb-image").attr("src"));
            });
        });
    </script>
    <!-- //here ends scrolling icon -->
    <!--bootstrap working-->
    <script src="js/bootstrap.min.js"></script>
    <!-- //bootstrap working-->
    <!-- //lightslider -->
    <!--<script src="js/lightslider.js"></script>-->
    <script type="text/javascript">
        function showBlock(id) {
            $('.gal').removeClass('active');
            document.getElementById(id).classList.add("active");
        }

        $('.block-nav li a').on('click', function() {
            $('.block-nav li a.active').removeClass('active');
            $(this).addClass('active');
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