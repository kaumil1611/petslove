<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
	include 'header1.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!-- //navigation -->
	<!-- banner-2 -->
	<div class="page-head_agile_info_w3l">

	</div>
	<!-- //banner-2 -->
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.php">Home</a>
						<i>|</i>
					</li>
					<li>Privacy Policy</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- Terms of use-section -->
	<section class="terms-of-use">
		<!-- terms -->
		<div class="terms">
			<div class="container">
				<!-- tittle heading -->
				<h3 class="tittle-w3l">Privacy Policy
					<span class="heading-style">
						<i></i>
						<i></i>
						<i></i>
					</span>
				</h3>
				<!-- //tittle heading -->
				<h6>Privacy Policy</h6>
				<p>We value the trust you place in us. That's why we insist upon the highest standards for secure transactions and customer
					information privacy. Please read the following statement to learn about our information gathering and dissemination
					practices.
				</p>
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius
					modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. </p>

				<h6>Personally Identifiable Information and other Information</h6>
				<p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
					middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>
				<p>first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model
					sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free
					from repetition, injected humour</p>

				<h6>Security Precautions</h6>
				<p>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil)
					by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The
					first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
				<p>Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from
					a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.
					Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum"</p>

				<h6>What Information Can I Access?</h6>
				<p> Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
					Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
				<p> Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The
					generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>

				<h6> Advertisements on Grocery Shoppy</h6>
				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,
					by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage
					of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum
					generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the
					Internet.
				</p>

				<h6>Your Consent</h6>
				<ol start="1">
					<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.it has a more-or-less normal distribution
						of letters, as opposed Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</li>
					<li>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
						eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
						voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores</li>
					<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.it has a more-or-less normal distribution
						of letters, as opposed Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</li>
				</ol>
				<h6>Policy updates</h6>
				<p> you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on
					the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It
					uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures</p>
			</div>
		</div>
		<!-- /terms -->
	</section>
	<!-- //Terms of use-section -->


	<!-- newsletter -->
	<?php
		include 'footer1.php';
	?>

	<!-- js-files -->
	<!-- jquery -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<!-- //jquery -->

	<!-- popup modal (for signin & signup)-->
	<script src="js/jquery.magnific-popup.js"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- Large modal -->
	<!-- <script>
		$('#').modal('show');
	</script> -->
	<!-- //popup modal (for signin & signup)-->

	

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<!-- smoothscroll -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->

	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<!-- //js-files -->

</body>

</html>