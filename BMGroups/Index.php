<!DOCTYPE html>
<html>

<head>
    <title>BM Group Of Company | Home</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Furnished Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //for-mobile-apps -->
    <!--fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Metamorphous' rel='stylesheet' type='text/css'>
    <!--//fonts-->
    <script src="js/jquery.min.js"> </script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- js -->
    <script src="js/bootstrap.js"></script>
    <!-- js -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <!--/script-->
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
</head>

<body>
    <!--header-->
    <?php include('themepart/header.php'); ?>
    <!--/header-->

    <!-- script-for-menu -->
    <script>
        $("span.menu").click(function() {
            $(".top-nav ul").slideToggle("slow", function() {});
        });
    </script>
    <!-- script-for-menu -->
    <!-- banner-text Slider starts Here -->
    <script src="js/responsiveslides.min.js"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function() {
            // Slideshow 4
            $("#slider3").responsiveSlides({
                auto: true,
                pager: false,
                nav: true,
                speed: 500,
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
    <!--//End-slider-script -->
    <div class="banner">
        <div id="top" class="callbacks_container">
            <ul class="rslides" id="slider3">
                <li>
                    <div class="banner-slide">
                    </div>
                </li>
                <li>
                    <div class="banner1">
                    </div>
                </li>
                <li>
                    <div class="banner2">
                    </div>
                </li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="welcome">
        <div class="container">
            <div class="col-md-4 welcome-img">
                <img src="images/weelcome.jpg" alt="" />
            </div>
            <div class="col-md-8 welcome-text">
                <h4>Welcome To Our Furnish Gallery</h4>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                    laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                    architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                    sit aspernatur aut odit aut fugit.</p>
            </div>
        </div>
    </div>
    <!-- <div class="index-about">
        <div class="container">
            <h3>ABOUT</h3>
            <p>Dolor nunc vule putateulr ips dol consec.Donec sem ertet laciniate ultricie upie disse utes comete dolo lectus. fgilla itollicil tua ludin dolor nec met quam accumsan. Dolore condime netus lullam utlacus adipiscing ipsum molestie euismod lore estibulum vel libero ipsum sit
                amet sollicitudin ante. Aenean imperdiet aliquet hendreritunc interdum ullamcorper lec tuset pellentesqu enim interdum atuspendisse malesuada dignissim.</p>
        </div>
    </div> -->
    <div class="latest-designs">
        <div class="container">
            <h3>Our Products</h3>
            <div class="gallery-info">
                <li>
                    <ul class="demo-1 effect">
                        <li>
                            <h2>Latest Furnished</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
                        </li>

                        <li><img class="top" src="images/11.jpg" alt="" /></li>
                    </ul>
                </li>
                <li>
                    <ul class="demo-1 effect">
                        <li>
                            <h2>Latest Furnished</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
                        </li>

                        <li><img class="top" src="images/13.jpg" alt="" /></li>
                    </ul>
                </li>
                <li>
                    <ul class="demo-1 effect">
                        <li>
                            <h2>Latest Furnished</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
                        </li>

                        <li><img class="top" src="images/15.jpg" alt="" /></li>
                    </ul>
                </li>
            </div>
        </div>
        <div class="container">
            <h3>Our Companys</h3>
                <div class="gallery-info">
                <li>
                    <ul class="demo-1 effect">
                        <li>
                            <h2>Latest Furnished</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
                        </li>
                        <br>
                        <li><img class="top" src="images/14.jpg" alt="" /></li>
                    </ul>
                </li>
                <li>
                    <ul class="demo-1 effect">
                        <li>
                            <h2>Latest Furnished</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
                        </li>

                        <li><img class="top" src="images/12.jpg" alt="" /></li>
                    </ul>
                </li>
                <li>
                    <ul class="demo-1 effect">
                        <li>
                            <h2>Latest Furnished</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
                        </li>

                        <li><img class="top" src="images/17.jpg" alt="" /></li>
                    </ul>
                </li>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="css/swipebox.css">
    <script src="js/jquery.swipebox.min.js"> </script>
    <script type="text/javascript">
        jQuery(function($) {
            $(".swipebox").swipebox();
        });
    </script>

    <!--footer-starts-->
    <?php include('themepart/footer.php'); ?>
    <!--footer-starts-->
</body>

</html>