<!DOCTYPE html>
<html>

<head>
	<title>BM Group Of Company | About Us</title>
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
	<link rel="stylesheet" type="text/css" href="css/common.css" />
	<link rel="stylesheet" type="text/css" href="css/style4.css" />
	<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
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
	<div class="banner-left">
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
		<div class="banner-title">
			<div id="top" class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="banner-slide banner5">
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--about-->
	<div class="content">
		<div class="container">
			<div class="about">
				<h2>About Us</h2>
				<section class="journey-section">
					<h3 class="journey-title">Journey of B. M. Group</h3>

					<div class="timeline">

						<div class="timeline-item">
							<span class="year">1999 - 2001</span>
							<!-- <span class="dot"></span> -->
							<div class="circle">01</div>
							<p class="desc"><strong>Retail Operations</strong></p>
						</div>

						<div class="timeline-item">
							<span class="year">2001 - 2008</span>
							<div class="circle">02</div>
							<p class="desc"><strong>Wholesale Operations</strong></p>
							<!-- <span class="dot"></span> -->
						</div>

						<div class="timeline-item">
							<span class="year">2008</span>
							<div class="circle">03</div>
							<p class="desc"><strong>B M Canvassing</strong></p>
							<!-- <span class="dot"></span> -->
						</div>

						<div class="timeline-item">
							<span class="year">2020</span>
							<div class="circle">04</div>
							<p class="desc"><strong>Janki Enterprise</strong></p>
							<!-- <span class="dot"></span> -->
						</div>

						<div class="timeline-item">
							<span class="year">2023</span>
							<div class="circle">05</div>
							<p class="desc"><strong>Sunrise Agro Process</strong></p>
							<!-- <span class="dot"></span> -->
						</div>

						<div class="timeline-item">
							<span class="year">2024</span>
							<div class="circle">06</div>
							<p class="desc"><strong>Vijaykumar and Company</strong></p>
							<!-- <span class="dot"></span> -->
						</div>
					</div>
				</section>
				<section class="history-section">
					<div class="history-content">

						<h3 class="history-title">
							The journey was started in <span>1999 - 2001</span>
						</h3>

						<p>
						<ul class="history-text">
							<li>Established and managed a grocery shop in Mujmahuda, Vadodara.</li>
							<li>Focused on local retail trade and customer relationship building.</li>
							<li>Laid the foundation for future wholesale and trading operations.</li>
						</ul>
						</p>
					</div>
				</section>
				<section class="history-section">
					<div class="history-content">

						<h3 class="history-title"> <span>2001 - 2008</span>
						</h3>

						<p>
						<ul class="history-text">
							<li>Formed a partnership firm operating from Pith Chok, Grain Market, Jamnagar.</li>
							<li>Engaged in grain, potato, and onion trading.</li>
							<li>Developed key connections with suppliers and Ss in the grain market.</li>
							<li>Gained deep experience in commodity trading and commission-based business models.</li>
						</ul>
						</p>
					</div>
				</section>
			</div>
		</div>
	</div>
	<!--/about-->
	<!--footer-starts-->
	<?php include('themepart/footer.php'); ?>
	<!--footer-starts-->
</body>

</html>