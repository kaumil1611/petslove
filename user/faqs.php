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
					<li>Faqs</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- FAQ-help-page -->
	<div class="faqs-w3l">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Faqs
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<h3 class="w3-head">Top 10 Frequently asked questions</h3>
			<div class="faq-w3agile">
				<ul class="faq">
					<li class="item1">
						<a href="#" title="click here">When do I switch from puppy/kitten food to adult food?</a>
						<ul>
							<li class="subitem1">
								<p> Switching a puppy or kitten to adult food too early can cause obesity and gastro-intestinal issues. 
								We recommend switching to adult dog or cat food between 10-12 months.</p>
							</li>
						</ul>
					</li>
					<li class="item2">
						<a href="#" title="click here">How often do I need to bathe my Pet?</a>
						<ul>
							<li class="subitem1">
								<p> If no skin condition is present, you can bathe your pet every 2-4 weeks.</p>
							</li>
						</ul>
					</li>
					<li class="item3">
						<a href="#" title="click here">My dog / cat is scratching itself, does this mean it has fleas?</a>
						<ul>
							<li class="subitem1">
								<p>Your dog / cat may have fleas, but often dogs and cats scratch as part of their normal grooming routine. If you feel that they are scratching more than usual, or they are developing sore areas, then it is worth investigating further.</p>
							</li>
						</ul>
					</li>
					<li class="item4">
						<a href="#" title="click here">How often should I brush my pets teeth?</a>
						<ul>
							<li class="subitem1">
								<p>Every day is the gold standard, and a small amount of brushing every day will prevent the build up of plaque and formation of tartar, as well as increasing the bond between pet and owner. However any brushing is better than none, and brushing.</p>
							</li>
						</ul>
					</li>
					<li class="item5">
						<a href="#" title="click here">My dog hates being washed - what can I do to clean him?</a>
						<ul>
							<li class="subitem1">
								<p>Most dogs aren't a particular fan of being washed. Not because they do not like water, but because it feels unnatural and they often don't understand what's happening. For dogs that can't stand being washed, we offer an alternative</p>
							</li>
						</ul>
					</li>
					<li class="item6">
						<a href="#" title="click here">Should I feed grit to my birds?</a>
						<ul>
							<li class="subitem1">
								<p>Feeding grit to birds is recommended because it helps birds absorb minerals such as salt and calcium. Additionally, it helps them to maintain a good digestive system.</p>
							</li>
						</ul>
					</li>
					<li class="item7">
						<a href="#" title="click here">Why Does My Dog Sleep So Much?</a>
						<ul>
							<li class="subitem1">
								<p>It’s normal for dogs to sleep through the night, and many dogs also spend much of the day asleep. While we humans are used to the idea of sleeping when it’s dark out, we find it a bit odd how much our dogs sleep during the day. Why do dogs sleep so much, anyway?</p>
							</li>
						</ul>
					</li>
					<li class="item8">
						<a href="#" title="click here">How to control flees</a>
						<ul>
							<li class="subitem1">
								<p>Fleas have a complex, four-stage life cycle. If you want to get rid of pets and keep them from coming back, you have to address every stage of this cycle. Spraying once is not enough. Just be careful not to overdo flea control. Too many toxic products in and around your pet can be harmful or even fatal.</p>
							</li>
						</ul>
					</li>
					<li class="item9">
						<a href="#" title="click here">Why Do Dogs Howl?</a>
						<ul>
							<li class="subitem1">
								<p>Dogs will howl for different reasons but howling is thought to always be a form of communication. Howling is a normal vocalization that wild dogs often make but it isn't exclusive to just coyotes and wolves. All breeds of dogs, even a little Pomeranian or a Chihuahua, have the ability to howl, but certain breeds are more well known for making this sound. Sometimes a howl is done out of fear, due to pain, from disorientation after waking up from anesthesia, or simply to make their presence known. It's important to know what your dog may be trying to communicate to you when they are howling.</p>
							</li>
						</ul>
					</li>
					<li class="item10">
						<a href="#" title="click here">How Much Food Does My Pet Need?</a>
						<ul>
							<li class="subitem1">
								<p>“Each pet food is different and each pet is different,” says Christina Buchter, DMV, a veterinarian also with the Pet Health Center at North Shore Animal League America, the world’s largest no-kill animal rescue and adoption organization. “Therefore, you should use the food bag and your pet as a guide.” Keep in mind that the amount of food fed depends on your pet’s lifestyle and metabolism — if you compare two identical healthy pets, the more active pet will need more food. In general, Dr. Buchter says you should feed your pet three times a day until it is 4 months old, and then reduce it to twice daily.</p>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //FAQ-help-page -->

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

	

	<!-- script for tabs -->
	<script>
		$(function () {

			var menu_ul = $('.faq > li > ul'),
				menu_a = $('.faq > li > a');

			menu_ul.hide();

			menu_a.click(function (e) {
				e.preventDefault();
				if (!$(this).hasClass('active')) {
					menu_a.removeClass('active');
					menu_ul.filter(':visible').slideUp('normal');
					$(this).addClass('active').next().stop(true, true).slideDown('normal');
				} else {
					$(this).removeClass('active');
					$(this).next().stop(true, true).slideUp('normal');
				}
			});

		});
	</script>
	<!-- script for tabs -->

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