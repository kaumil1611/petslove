<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
--> 
<?php
	include 'header1.php';
	include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!-- //navigation -->
	<!-- banner -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators-->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="container">
					<div class="carousel-caption">
						<!-- <h3>Big
							<span>Save</span>
						</h3>
						<p>Get flat
							<span>10%</span> Cashback</p>
						<a class="button2" href="product.php">Shop Now </a> -->
					</div>
				</div>
			</div>
			<div class="item item2">
				<div class="container">
					<div class="carousel-caption">
						<!-- <h3>Healthy
							<span>Saving</span>
						</h3>
						<p>Get Upto
							<span>30%</span> Off</p>
						<a class="button2" href="product.php">Shop Now </a> -->
					</div>
				</div>
			</div>
			<div class="item item3">
				<div class="container">
					<div class="carousel-caption">
						<!-- <h3>Big
							<span>Deal</span>
						</h3>
						<p>Get Best Offer Upto
							<span>20%</span>
						</p>
						<a class="button2" href="product.php">Shop Now </a> -->
					</div>
				</div>
			</div>
			<div class="item item4">
				<div class="container">
					<div class="carousel-caption">
						<!-- <h3>Today
							<span>Discount</span>
						</h3>
						<p>Get Now
							<span>40%</span> Discount</p>
						<a class="button2" href="product.php">Shop Now </a> -->
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- //banner -->

	<!-- top Products -->

	<!-- //top products -->


	<?php

				$p1="SELECT * FROM PRODUCTS";
				$fetchp1= mysqli_query($con,$p1);

	?>
 <!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>
	<!-- //navigation -->
	<!-- banner-2 -->
	
	<!-- //banner-2 -->
	<!-- page -->
	<!-- //page -->
	<!-- top Products -->
	<div class="ads-grid">
		<div class="container">
			<!-- tittle heading -->
			
			<!-- //tittle heading -->
			<!-- product left -->
			<h3 class="tittle-w3l">Our Top Products
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			
			<!-- //product left -->
			<!-- product right -->
			<div class="agileinfo-ads-display col-md- w3l-rightpro">
				<div class="wrapper">
					<!-- first section -->
					<div class="product-sec1">
						<h3 class="heading-tittle">Products</h3>
						<?php 
							$count=0;
							while($row=mysqli_fetch_array($fetchp1))
								{
									$count++;
								
									?>
						<div class="col-xs-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="<?php echo $row['IMAGE_1']; ?>" height=160 width=160 alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single.php?val=<?php echo $row['PRODUCT_ID'] ; ?>" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">New</span>
								</div>
								<div class="item-info-product ">
									<h4>
										<a href="single.php"><?php echo $row['PRODUCT_NAME']; ?></a>
									</h4>
									<div class="info-product-price">
										<span class="item_price"><?php echo '₹'. $row['PRICE']; ?></span>
										<!--<del><?php// echo $row[//'PRICE']; ?></del>-->
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="cart.php" method="post">
											<fieldset>
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="<?php echo $row['PRODUCT_NAME']; ?>" />
												<input type="hidden" name="amount" value="<?php echo $row['PRICE']; ?>" />
												<input type="hidden" name="PRODUCT_ID" value="<?php echo $row['PRODUCT_ID']; ?>" />
												<input type="hidden" name="discount_amount" value="0.00" />
												<input type="hidden" name="currency_code" value="USD" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
										<?php
											include 'connection.php';
											 	if(isset($_SESSION['Name']))
											 	{
											 		echo "<input  type='submit' name='submit' value='Add to cart'  class='button'/>";
											 	}
											 	else
											 	{
											 		echo "<input  type='submit' name='submit' value='Add to cart'  class='button' disabled />";
											 	}
										?>
												
											</fieldset>
										</form>
									</div>
									

								</div>
							</div>
						</div>
							<?php  
								if($count==4)
								{
									break;
								}
						}  ?>
						<div class="clearfix"></div>
					</div>
					</div>
				</div>
			</div>

		</div>

		<div class="container">
			
			<div class="agileinfo-ads-display col-md- w3l-rightpro">
				<div class="wrapper">
		<div class="product-sec1 product-sec2">
						<div class="col-xs-7 effect-bg">
							<h3 class="">Pure Energy</h3>
							<h6>Enjoy our all healthy Products</h6>
							
						</div>
						<h3 class="w3l-nut-middle">Food & treets</h3>
						<div class="col-xs-5 bg-right-nut">
							<img src="images/nut1.png" alt="">
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	
<?php 
	$p1="SELECT * FROM PETS where PET_CATEGORY='Dogs' ORDER BY PET_ID DESC";
	$fetchp1= mysqli_query($con,$p1);
	       
?>
	<!-- //banner-2 -->
	<!-- page -->
	<!-- //page -->
	<!-- top Products -->
	<div class="ads-grid">
		<div class="container">
			<!-- tittle heading -->
			
			<!-- //tittle heading -->
			<!-- product left -->
			
			<!-- //product left -->
			<!-- product right -->
			<!--<div class="agileinfo-ads-display col-md- w3l-rightpro">-->
				<div class="agileinfo-ads-display col-md-12">
				<div class="wrapper">
					<!-- first section -->
					<div class="product-sec1">
						<h3 class="heading-tittle">Dogs</h3>

						<?php 
							$count=0;
							while($row=mysqli_fetch_array($fetchp1))
								{
									$count++;
								//$row=mysqli_fetch_array($fetchp1) ;
								//	for ($i=0 ; $i<sizeof($row) && $i <4   ; $i++) { 
									# code...
									
									?>
						<div class="col-xs-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="<?php echo $row['IMAGE_1']; ?>" height=160 width=160 alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single2.php?val=<?php echo $row['PET_ID'] ; ?>" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">New</span>
								</div>
								<div class="item-info-product ">
									<h4>
										<a href="single2.php"><?php echo $row['BREED']; ?></a>
									</h4>
									<div class="info-product-price">
										<span class="item_price"><?php echo '₹'. $row['PRICE']; ?></span>
										<!--<del><?php// echo $row[//'PRICE']; ?></del>-->
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="cart.php" method="post">
											<fieldset>
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="<?php echo $row['BREED']; ?>" />
												<input type="hidden" name="amount" value="<?php echo $row['PRICE']; ?>" />
												<input type="hidden" name="PET_ID" value="<?php echo $row['PET_ID']; ?>" />
												<input type="hidden" name="discount_amount" value="0.00" />
												<input type="hidden" name="currency_code" value="USD" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
												<?php
											include 'connection.php';
											 	if(isset($_SESSION['Name']))
											 	{
											 		echo "<input  type='submit' name='submit' value='Add to cart'  class='button'/>";
											 	}
											 	else
											 	{
											 		echo "<input  type='submit' name='submit' value='Add to cart'  class='button' disabled />";
											 	}
										?>
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>
						
							<?php  
								if($count==4)
								{
									break;
								}


						}  ?>
						<div class="clearfix"></div>
					</div>
					</div>
				</div>
			</div>
		</div>
	
	<?php 
	$p1="SELECT * FROM MEDICINE";
	$fetchp1= mysqli_query($con,$p1);
	       
?>
	<!-- //banner-2 -->
	<!-- page -->
	<!-- //page -->
	<!-- top Products -->
	<div class="ads-grid">
		<div class="container">
			<!-- tittle heading -->
			
			<!-- //tittle heading -->
			<!-- product left -->
			
			<!-- //product left -->
			<!-- product right -->
			<!--<div class="agileinfo-ads-display col-md- w3l-rightpro">-->
				<div class="agileinfo-ads-display col-md-12">
				<div class="wrapper">
					<!-- first section -->
					<div class="product-sec1">
						<h3 class="heading-tittle">Medicine</h3>

						<?php 
							$count=0;
							while($row=mysqli_fetch_array($fetchp1))
								{
									$count++;
								//$row=mysqli_fetch_array($fetchp1) ;
								//	for ($i=0 ; $i<sizeof($row) && $i <4   ; $i++) { 
									# code...
									
									?>
						<div class="col-xs-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="<?php echo $row['IMAGE_1']; ?>" height=160 width=160 alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single2.php?val=<?php echo $row['MEDICINE_ID'] ; ?>" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">New</span>
								</div>
								<div class="item-info-product ">
									<h4>
										<a href="single2.php"><?php echo  $row['MEDICINE_NAME']; ?></a>
									</h4>
									<div class="info-product-price">
										<span class="item_price"><?php echo '₹'. $row['PRICE']; ?></span>
										<!--<del><?php// echo $row[//'PRICE']; ?></del>-->
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="cart.php" method="post">
											<fieldset>
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="<?php echo $row['MEDICINE_NAME']; ?>" />
												<input type="hidden" name="amount" value="<?php echo $row['PRICE']; ?>" />
												<input type="hidden" name="MEDICINE_ID" value="<?php echo $row['MEDICINE_ID']; ?>" />
												<input type="hidden" name="discount_amount" value="1.00" />
												<input type="hidden" name="currency_code" value="USD" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
												<?php
											include 'connection.php';
											 	if(isset($_SESSION['Name']))
											 	{
											 		echo "<input  type='submit' name='submit' value='Add to cart'  class='button'/>";
											 	}
											 	else
											 	{
											 		echo "<input  type='submit' name='submit' value='Add to cart'  class='button' disabled />";
											 	}
										?>
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>
						
							<?php  
								if($count==4)
								{
									break;
								}


						} /*}*/ ?>
						<div class="clearfix"></div>
					</div>
					</div>
				</div>
			</div>
		</div>





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


</body>

</html>