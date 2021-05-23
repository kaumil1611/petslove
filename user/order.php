<?php
	include 'header1.php';
	$login=$_SESSION['Name'];
	
	$login_id1=mysqli_query($con,"SELECT LOGIN_ID FROM BUYER WHERE LOGIN_ID='$login'");
	$fetchx=mysqli_fetch_array($login_id1);
	$login_id=$fetchx['LOGIN_ID'];
	//echo $login_id;

 				$bid1 = mysqli_query($con,"SELECT BUYER_ID FROM BUYER WHERE LOGIN_ID='$login_id'");
				$bid2 = mysqli_fetch_array($bid1);
				$bid = $bid2['BUYER_ID'];
				//echo $bid;
	
	$idx="SELECT * FROM ORDER_DETAILS WHERE BUYER_ID='$bid' ";
		$ffetch=mysqli_query($con,$idx);
		//$data=mysqli_fetch_array($ffetch);
		//$idlogin=$data['LOGIN_ID'];
		while ($data=mysqli_fetch_array($ffetch)) {
			# code...
		
			/*$SHIPMENT_STATUS=$data['SHIPMENT_STATUS'];*/
			$one=$data['PRODUCT_ID'];

			$one1=mysqli_query($con,"SELECT * FROM PRODUCTS WHERE PRODUCT_ID='$one'");
			$get1=mysqli_fetch_array($one1);

			$pname=$get1['PRODUCT_NAME'];
			$pimage=$get1['IMAGE_1'];
			$pprice=$get1['PRICE'];
}
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
					<li>Order</li>
				</ul>
			</div>
		</div>
	</div>
		<div class="privacy">
		<div class="container">
				<div class="checkout-right">
				<div class="table-responsive">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>SL No.</th>
								<th>Product</th>
								<!-- <th>Quality</th> -->
								<th>Product Name</th>

								<th>Price</th>
								<th>Shipment Status</th>
								<!-- <th>Total</th> -->
								
							</tr>
						</thead>
						<tbody>
							<tr class="rem1">
	<?php	
				$idx="SELECT * FROM ORDER_DETAILS WHERE BUYER_ID='$bid' ";
				$ffetch=mysqli_query($con,$idx);

		//$data=mysqli_fetch_array($ffetch);
		//$idlogin=$data['LOGIN_ID'];


				$i=0;

		while ($data=mysqli_fetch_array($ffetch)) {
			# code...
			$SHIPMENT_STATUS=$data['SHIPMENT_STATUS'];
			$i++;
			$one=$data['PRODUCT_ID'];
			$two=$data['PET_ID'];
			$three= $data['MEDICINE_ID'];
			$four=$data['QUANTITY'];


			$one1=mysqli_query($con,"SELECT * FROM PRODUCTS WHERE PRODUCT_ID='$one'");
			$get1=mysqli_fetch_array($one1);

			$pname=$get1['PRODUCT_NAME'];
			$pimage=$get1['IMAGE_1'];
			$pprice=$get1['PRICE'];


			$two1=mysqli_query($con,"SELECT * FROM PETS WHERE PET_ID='$two'");
			$get2=mysqli_fetch_array($two1);

			$pet_name=$get2['BREED'];
			$pet_image=$get2['IMAGE_1'];
			$pet_price=$get2['PRICE'];



			$three1=mysqli_query($con,"SELECT * FROM MEDICINE WHERE MEDICINE_ID='$three'");
			$get3=mysqli_fetch_array($three1);

			$medicine_name=$get3['MEDICINE_NAME'];
			$medicine_image=$get3['IMAGE_1'];
			$medicine_price=$get3['PRICE'];



			
			


			
		
	?>
						<?php if($pname!="")
						{	
						?>
						<tr>
							<td class="invert"><?php echo $i ; ?></td>
								<td class="invert-image">
									
										<center>
										<img src="<?php echo $pimage; ?>" height=100px width=100px class="img-responsive">
										</center>
									 
								</td>
								<!--  <script src="js/jquery-2.1.4.min.js"></script>
							<script src="js/jquery.magnific-popup.js"></script>
							<script type="text/javascript">
								$('input[name=\'quantity\']').change('keyup change click',function() {
							    var price = $('#price').text().substr(0,1);
							   
							  var quantity =  $('#quantity').val();
							 
							  $('#price').closest('td').text(price * quantity);
							  });
								
							</script> 
							<script src="js/bootstrap.js"></script> -->
								
								
								<td class="invert"><?php echo $pname; ?></td>
								<td class="price1" id="price"><?php echo $pprice; ?></td>
								<td class="SHIPMENT_STATUS" id="SHIPMENT_STATUS"><?php echo $SHIPMENT_STATUS; ?></td>
							</tr>


						<?php } ?>

						<?php if($pet_name!="")
						{	
						?>
						<tr>
							<td class="invert"><?php echo $i ; ?></td>
								<td class="invert-image">
									
										<center>
										<img src="<?php echo $pet_image; ?>" height=100px width=100px class="img-responsive">
										</center>
									 
								</td>
								
								<td class="invert"><?php echo $pet_name; ?></td>
								<td class="invert"><?php echo $pet_price; ?></td>
								<td class="SHIPMENT_STATUS" id="SHIPMENT_STATUS"><?php echo $SHIPMENT_STATUS; ?></td>
								
							</tr>

						<?php } ?>


							<?php if($medicine_name!="")
						{	
						?>
						<tr>
							<td class="invert"><?php echo $i ; ?></td>
								<td class="invert-image">
									
										<center>
										<img src="<?php echo $medicine_image; ?>" height=100px width=100px class="img-responsive">
										</center>
									 
								</td>
								
								<td class="invert"><?php echo $medicine_name; ?></td>
								<td class="invert"><?php echo $medicine_price; ?></td>
								<td class="SHIPMENT_STATUS" id="SHIPMENT_STATUS"><?php echo $SHIPMENT_STATUS; ?></td>
								
						</tr>

						<?php } ?>






				<?php  } ?>

				</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	
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