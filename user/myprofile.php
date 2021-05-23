<?php
	include 'header1.php';
	include "connection.php";

	$login=$_SESSION['Name'];
	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
<div class="address_form_agile">
					<h4>Fill up your details</h4>
					<div class="form-group">
                  	<?php 

						$login=$_SESSION['Name'];
						$f11=mysqli_query($con,"SELECT `EMAIL_ID`, `PHONE_NO` FROM `LOGIN` WHERE LOGIN_ID='$login'");
								$f22=mysqli_fetch_array($f11);
								$f33=$f22['EMAIL_ID'];
								$f44=$f22['PHONE_NO'];



					?>
					<form action="" method="post" class="creditly-card-form agileinfo_form">
						<div class="creditly-wrapper wthree, w3_agileits_wrapper">
							<div class="information-wrapper">
								<div class="first-row">
									<div class="controls">
										<input class="billing-address-name" type="email" name="eid" value="<?php echo $f33; ?> " placeholder="Enter your email" required="">
									</div>
									<div class="controls">
										<input class="billing-address-name" type="tel" name="phoneno" value="<?php echo $f44; ?>" placeholder="Enter your phoneno" required="">
									</div>
									<div class="controls">
										<input class="billing-address-name" type="text" name="name" placeholder="Enter your name" required="">
									</div>
									<div class="w3_agileits_card_number_grids">
										<div class="w3_agileits_card_number_grid_left">
											<div class="controls">
												<input type="text" placeholder="Enter your House Number" name="hnum" required="">
											</div>
										</div>
										<div class="w3_agileits_card_number_grid_right">
											<div class="controls">
												<input type="text" placeholder="Enter your Soceity Name" name="sname" required="">
											</div>
										</div>
									<div class="controls">
										<input type="text" placeholder="Enter your Street Name" name="street" required="">
									</div>
											<div class="w3_agileits_card_number_grid_right">
												<div class="controls">
													<input type="text" placeholder="Enter your Landmark" name="landmark" required="">
												</div>
											</div>
										<div class="clear"> </div>
									</div>
									<div class="controls">
										<select class="option-w3ls" name="city_option">
											<option>Select city_name</option>
											<option>Ahmedabad</option>
											<option>Rajkot</option>
											<option>Surat</option>
											<option>Vadodara</option>
										</select>
									</div>
									<div class="controls">
										<select class="option-w3ls" name="State_option">
											<option>Select State</option>
											<option>Gujarat</option>
											<!-- <option>Rajkot</option>
											<option>Surat</option>
											<option>Vadodara</option> -->
										</select>
									</div>
									<div class="w3_agileits_card_number_grid_right">
												<div class="controls">
													<input type="text" placeholder="Enter your Pincode" name="pincode" required="">
												</div>
									</div>
								</div>
								<button class="submit check_out" type="submit" name="submit">Submit</button>
							</div>
						</div>
					</form>
					<?php 


							if (isset($_POST['submit'])) {


								$login=$_SESSION['Name'];
								
								
								$eid=$_POST['eid'];
								$phoneno=$_POST['phoneno'];
								$name=$_POST['name'];
								$hnum=$_POST['hnum'];
								$sname=$_POST['sname'];
								$street=$_POST['street'];
								$landmark=$_POST['landmark'];
								$city_option=$_POST['city_option'];
								$State_option=$_POST['State_option'];
								$pincode=$_POST['pincode'];



								$insert1="INSERT INTO `BUYER`(`BUYER_ID`, `LOGIN_ID`, `NAME`, `HOUSE_NO`, `SOC_NAME`, `STREET_NAME`, `LANDMARK`, `CITY_NAME`, `STATE`, `PINCODE`) VALUES ('','$login','$name','$hnum','$sname','$street','$landmark','$city_option','$State_option','$pincode')";
								$insert2=mysqli_query($con,$insert1);
								if($insert2){
									echo "

									<script>
											location.replace('index.php')
									</script>

									";
								}
								else{
									echo "err";
								}
							}


					?>
				</div>
				<div class="clearfix"> </div>
			</div>
          </div>
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

	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
		paypalm.minicartk.render(); //use only unique class names other than paypalm.minicartk.Also Replace same class name in css and minicart.min.js

		paypalm.minicartk.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script>
	<!-- //cart-js -->

	<!-- price range (top products) -->
	<script src="js/jquery-ui.js"></script>
	<script>
		//<![CDATA[ 
		$(window).load(function () {
			$("#slider-range").slider({
				range: true,
				min: 0,
				max: 9000,
				values: [50, 6000],
				slide: function (event, ui) {
					$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
				}
			});
			$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

		}); //]]>
	</script>
	<!-- //price range (top products) -->

	<!-- flexisel (for special offers) -->
	<script src="js/jquery.flexisel.js"></script>
	<script>
		$(window).load(function () {
			$("#flexiselDemo1").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 2
					},
					tablet: {
						changePoint: 768,
						visibleItems: 2
					}
				}
			});

		});
	</script>
	<!-- //flexisel (for special offers) -->

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

<?php
		include 'footer1.php';
?>
</body>
</html>