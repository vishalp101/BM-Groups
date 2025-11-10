<!DOCTYPE html>
<html>

<head>
	<title>BM Group Of Company | Contact Us</title>
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
	<link rel="stylesheet" href="css/swipebox.css">
	<script src="js/jquery.swipebox.min.js"></script>
	<script type="text/javascript">
		jQuery(function($) {
			$(".swipebox").swipebox();
		});
	</script>
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
	<div class="clearfix"> </div>
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
	<!--contact-->
	<div class="contact">
		<div class="container">
			<div class="main-head-section">
				<h3>Contact</h3>
				<div class="contact-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230.05279422869688!2d72.85981942725441!3d22.69682418824114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e5b0c3550f46d%3A0xa64761eb2e77d272!2sGhantakaran%20Complex!5e0!3m2!1sen!2sin!4v1762599221240!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
			<div class="contact_top">

				<div class="col-md-8 contact_left">
					<h4>Below Type Here</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tincidunt dolor et tristique bibendum. Aenean sollicitudin vitae dolor ut posuere.</p>
					<form>
						<div class="form_details">
							<input type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
							<input type="text" class="text" value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}">
							<input type="text" class="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}">
							<textarea value="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
							<div class="clearfix"> </div>
							<div class="sub-button">
								<input type="submit" value="Send message">
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-4 company-right">
					<div class="company_ad">
						<h3>Address</h3>
						<span>BM Groups Of Company</span>
						<address>
							<p> <b>email :</b><a href="https://mail.google.com/mail/?view=cm&fs=1&to=jankienterprise311218@gmail.com" target="_blank">jankienterprise311218@gmail.com</a></p>
							<p> <b>phone :</b><a href="tel:9724521521"> 9724521521</a> | <a href="tel:9227421521">9227421521</a></p>
							<p> <b>Address :</b> f/109, Ghantakaran Complex,Gunj Bazar</p>
							<p> Nadiad, Pin : 387001 (Gujarat)</p>
						</address>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--/contact-->
	<!--footer-starts-->
	<?php include('themepart/footer.php'); ?>
	<!--footer-starts-->
</body>

</html>