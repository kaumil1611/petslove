<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
	include 'header1.php';
	include "connection.php";
	
	$login=$_SESSION['Name'];
	
	$login_id1=mysqli_query($con,"SELECT LOGIN_ID FROM BUYER WHERE LOGIN_ID='$login'");
	$fetchx=mysqli_fetch_array($login_id1);
	$login_id=$fetchx['LOGIN_ID'];
	//echo $login_id;

 				$bid1 = mysqli_query($con,"SELECT BUYER_ID FROM BUYER WHERE LOGIN_ID='$login_id'");
				$bid2 = mysqli_fetch_array($bid1);
				$bid = $bid2['BUYER_ID'];
				//echo $bid;
	
	$idx="SELECT * FROM CART WHERE BUYER_ID='$bid' ";
		$ffetch=mysqli_query($con,$idx);
		//$data=mysqli_fetch_array($ffetch);
		//$idlogin=$data['LOGIN_ID'];
		while ($data=mysqli_fetch_array($ffetch)) {
			# code...
		
			
			$one=$data['PRODUCT_ID'];

			$one1=mysqli_query($con,"SELECT * FROM PRODUCTS WHERE PRODUCT_ID='$one'");
			$get1=mysqli_fetch_array($one1);

			$pname=$get1['PRODUCT_NAME'];
			$pimage=$get1['IMAGE_1'];
			$pprice=$get1['PRICE'];


			




		


			
		}
		


		/*$prid1 = mysqli_query($con,"SELECT PRODUCT_ID FROM PRODUCTS WHERE BUYER_ID='$login_id'");
				$prid2 = mysqli_fetch_array($bid1);
				$prid = $prid2['PRODUCT_ID'];
				echo $prid;
*/
		/*$img1=mysqli_query($con,"SELECT IMAGE_1 FROM PRODUCTS WHERE PRODUCT_ID='$idproduct'");
		//while($img2=mysqli_fetch_array($img1)){
	 	$img2=mysqli_fetch_array($img1);
	  	$img=$img2['IMAGE_1'];
		echo $img;
	// 	}*/
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

<script >
	

// 	function calc() 
// {
//   var price = document.getElementById("price").value;
//   var noTickets = document.getElementByName("quantity").value;
//   var total = parseFloat(price) * noTickets
//   if (!isNaN(total))
//     document.getElementById("price").innerHTML = total
//}

</script>



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
					<li>Checkout</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- checkout page -->
	<div class="privacy">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Checkout
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="checkout-right">
				<!-- <h4>Your shopping cart contains:
					<span>3 Products</span>
				</h4> -->
				<div class="table-responsive">



					<table class="timetable_sub">
						<thead>
							<tr>
								<th>SL No.</th>
								<th>Product</th>
								<!-- <th>Quality</th> -->
								<th>Product Name</th>

								<th>Price</th>
								<!-- <th>Total</th> -->
								<th>Remove</th>
							</tr>
						</thead>
						<tbody>
							<tr class="rem1">
	<?php	
				$idx="SELECT * FROM CART WHERE BUYER_ID='$bid' ";
				$ffetch=mysqli_query($con,$idx);

		//$data=mysqli_fetch_array($ffetch);
		//$idlogin=$data['LOGIN_ID'];


				$i=0;

		while ($data=mysqli_fetch_array($ffetch)) {
			# code...
		$a= $data['CART_ID'];
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
						<tr height="20%">
							<td class="invert"><?php echo $i ; ?></td>
								<td class="invert-image">
									<!-- <a href="single.php"> -->
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
								
								<td class="invert">
									<div class="rem">
										<a class="btn btn-danger btn-xs" href="?del=<?php echo $data['CART_ID'];?>" 
          onclick="return confirm('sure to delete?');">X</a>
          
          		<?php
        
  if(isset($_GET['del']))
  {
    
    $sql1="DELETE FROM CART WHERE CART_ID=".$_GET['del']."";
    $result=mysqli_query($con,$sql1);
    echo "<script> location.replace('checkout.php') </script>";
  }
?>
									</div>
								</td>
							</tr>


						<?php } ?>

						<?php if($pet_name!="")
						{	
						?>
						<tr>
							<td class="invert"><?php echo $i ; ?></td>
								<td class="invert-image">
									<center>
										<img src="<?php echo $pet_image; ?>" height=100 width=100 class="img-responsive">
									 </center>
								</td>
								
								<td class="invert"><?php echo $pet_name; ?></td>
								<td class="invert"><?php echo $pet_price; ?></td>
								
								<td class="invert">
									<div class="rem">
										<a class="btn btn-danger btn-xs" href="?del=<?php echo $data['CART_ID'];?>">X</a>
          
          		<?php
        
  if(isset($_GET['del']))
  {
    
    $sql1="DELETE FROM CART WHERE CART_ID=".$_GET['del']."";
    $result=mysqli_query($con,$sql1);
    echo "<script> location.replace('checkout.php') </script>";
  }
?>
									</div>
								</td>
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
								<td class="invert">
									<div class="rem">
										<a class="btn btn-danger btn-xs" href="?del=<?php echo $data['CART_ID'];?>" 
          onclick="return confirm('sure to delete?');">X</a>
          
          		<?php
        
  if(isset($_GET['del']))
  {
    
    $sql1="DELETE FROM CART WHERE CART_ID=".$_GET['del']."";
    $result=mysqli_query($con,$sql1);
    echo "<script> location.replace('checkout.php') </script>";
  }
?>
									</div>
								</td>
							</tr>

						<?php } ?>






				<?php  } ?>

				</tbody>
					</table>
				</div>
			</div>
			<div class="checkout-left">
				<div class="address_form_agile">
					<h4>Add a new Details</h4>


					<?php 

				
					
					$login=$_SESSION['Name'];
					
					$f1=mysqli_query($con,"SELECT `EMAIL_ID`, `PHONE_NO` FROM `LOGIN` WHERE LOGIN_ID='$login'");
					$f2=mysqli_fetch_array($f1);
					$f3=$f2['EMAIL_ID'];
					$f4=$f2['PHONE_NO'];

					$login_id1=mysqli_query($con,"SELECT LOGIN_ID FROM BUYER WHERE LOGIN_ID='$login'");
					$fetchx=mysqli_fetch_array($login_id1);
					$login_id=$fetchx['LOGIN_ID'];
	

 				$bid1 = mysqli_query($con,"SELECT BUYER_ID FROM BUYER WHERE LOGIN_ID='$login_id'");
				$bid2 = mysqli_fetch_array($bid1);
				$bid = $bid2['BUYER_ID'];

				$binsert1 = mysqli_query($con,"SELECT `NAME`, `HOUSE_NO`, `SOC_NAME`, `STREET_NAME`, `LANDMARK`, `CITY_NAME`, `STATE`, `PINCODE` FROM `BUYER` WHERE LOGIN_ID='$login_id'");
				$binsert2 = mysqli_fetch_array($binsert1);
				$binsert3 = $binsert2['NAME'];
				//echo $binsert3;
				$binsert4 = $binsert2['HOUSE_NO'];
				$binsert5 = $binsert2['SOC_NAME'];
				$binsert6 = $binsert2['STREET_NAME'];
				$binsert7 = $binsert2['LANDMARK'];
				$binsert8 = $binsert2['CITY_NAME'];
				$binsert9 = $binsert2['STATE'];
				$binsert10 = $binsert2['PINCODE'];
	?>


					<form  method="post" class="creditly-card-form agileinfo_form">
						<div class="creditly-wrapper wthree, w3_agileits_wrapper">
							<div class="information-wrapper">
								<div class="first-row">
									<div class="controls">
										<input class="billing-address-name" type="email" name="e-id" value="<?php echo $f3 ; ?>" placeholder="Enter your email" required="">
									</div>
									<div class="controls">
										<input class="billing-address-name" type="tel" name="phoneno" value="<?php echo $f4 ; ?>" placeholder="Enter your phoneno" required="">
									</div>
									<div class="controls">
										<input class="billing-address-name" type="text" name="name1" value="<?php echo $binsert3; ?>" placeholder="Enter your name" required="">
									</div>
									<div class="w3_agileits_card_number_grids">
										<div class="w3_agileits_card_number_grid_left">
											<div class="controls">
												<input type="text" placeholder="Enter your House Number"  name="hnum" value="<?php echo $binsert4; ?>" required="">
											</div>
										</div>
										<div class="w3_agileits_card_number_grid_right">
											<div class="controls">
												<input type="text" placeholder="Enter your Soceity Name" name="sname" value="<?php echo $binsert5; ?>" required="">
											</div>
										</div>
									<div class="controls">
										<input type="text" placeholder="Enter your Street Name" name="street" value="<?php echo $binsert6; ?>" required="">
									</div>
											<div class="w3_agileits_card_number_grid_right">
												<div class="controls">
													<input type="text" placeholder="Enter your Landmark" name="landmark" value="<?php echo $binsert7; ?>" required="">
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
													<input type="text" placeholder="Enter your Pincode" name="pincode" value="<?php echo $binsert10; ?>" required="">
												</div>
									</div>
								</div>
								<input class="submit check_out" type="submit" name="order" value="order it">
							</div>
						</div>
					</form>
					<?php 


					if (isset($_POST['order'])) {

						//update buyer details

					$login=$_SESSION['Name'];
					$name1=$_POST['name1'];
					//echo $name1;
					$hnum=$_POST['hnum'];
					$sname=$_POST['sname'];
					$street=$_POST['street'];
					$landmark=$_POST['landmark'];
					$city_option=$_POST['city_option'];
					$State_option=$_POST['State_option'];
					$pincode=$_POST['pincode'];


					$update="UPDATE `BUYER` SET `NAME`='$name1',`HOUSE_NO`='$hnum',`SOC_NAME`='$sname',`STREET_NAME`='$street',`LANDMARK`='$landmark',`CITY_NAME`='$city_option',`STATE`='$State_option',`PINCODE`='$pincode' WHERE LOGIN_ID='$login_id'";
					$u=mysqli_query($con,$update);
					if ($u) {
					   echo "<script> location.replace('checkout.php') </script>";
					} else {
					    echo "Error updating record: " . mysqli_error($con);
					}

						// /update buyer details
					
					//order code
					//product
					$od1="SELECT PRODUCT_ID FROM CART WHERE BUYER_ID='$bid'";
					$odres=mysqli_query($con,$od1);
					$orders = mysqli_fetch_all($odres);
					echo "\$orders= ";
					print_r($orders);
					echo "<br>";
					//echo sizeof($orders);
					// product price

					
					// /product price end

 

					for($i=0;$i<sizeof($orders);$i++)      
					{

						echo "<br/> <br/>";
						$price1="SELECT PRICE FROM PRODUCTS WHERE PRODUCT_ID IN(SELECT PRODUCT_ID FROM CART WHERE BUYER_ID='$bid')";
						$price2=mysqli_query($con,$price1);
						$price = mysqli_fetch_all($price2);
						/*echo "\$price= ";
						print_r($price);
						echo "<br>";*/

						$sellerproduct = mysqli_query($con,"SELECT SELLER_ID FROM PRODUCTS WHERE PRODUCT_ID='" . strval($orders[$i][0]). "'");
						$sellerproduct1 = mysqli_fetch_all($sellerproduct);
						/*echo "\$sellerproduct1= ";
						print_r($sellerproduct1);
						echo "<br>";*/
						if(!empty($orders[$i][0]))
						{
							$order_insert1= mysqli_query($con,"INSERT INTO ORDER_DETAILS (`SELLER_ID`, `BUYER_ID`, `PRODUCT_ID`, `QUANTITY`, `PAYMENT_PRICE`, `PAYMENT_METHOD`, `SHIPMENT_STATUS`) VALUES ('".strval($sellerproduct1[0][0])."', '$bid', '".strval($orders[$i][0])."', '1','".strval($price[0][0])."', 'COD', 'ordered') ");

							if($order_insert1){
								$delete1="DELETE FROM CART WHERE PRODUCT_ID='".strval($orders[$i][0])."' ";
								$result=mysqli_query($con,$delete1);
    							echo "<script> location.replace('checkout3.php') </script>";
  
							}
							else{
								echo "err";
							}
						}
					}

					//product
					$orderpet="SELECT PET_ID FROM CART WHERE BUYER_ID='$bid'";
					$orderpet1=mysqli_query($con,$orderpet);
					$order_pet = mysqli_fetch_all($orderpet1);
					//echo sizeof($orders);
					// product price

					
					// /product price end

 

					for($i=0;$i<sizeof($order_pet);$i++)      
					{

						echo "<br/> <br/>";
						$price_pet1="SELECT PRICE FROM PETS WHERE PET_ID IN(SELECT PET_ID FROM CART WHERE BUYER_ID='$bid')";
						$price_pet2=mysqli_query($con,$price_pet1);
						$price_pet = mysqli_fetch_all($price_pet2);
						

						$sellerpet = mysqli_query($con,"SELECT SELLER_ID FROM PETS WHERE PET_ID='" . strval($order_pet[$i][0]). "'");
						$sellerpet1 = mysqli_fetch_all($sellerpet);
						/*echo "\$sellerproduct1= ";
						print_r($sellerproduct1);
						echo "<br>";*/
						if(!empty($order_pet[$i][0]))
						{
							$order_insert_pet1= mysqli_query($con,"INSERT INTO ORDER_DETAILS (`SELLER_ID`, `BUYER_ID`, `PET_ID`, `QUANTITY`, `PAYMENT_PRICE`, `PAYMENT_METHOD`, `SHIPMENT_STATUS`) VALUES ('".strval($sellerpet1[0][0])."', '$bid', '".strval($order_pet[$i][0])."', '1','".strval($price[0][0])."', 'COD', 'ordered') ");
							if($order_insert_pet1){
								$delete_PET="DELETE FROM CART WHERE PET_ID='".strval($order_pet[$i][0])."' ";
								$result1=mysqli_query($con,$delete_PET);
    							echo "<script> location.replace('checkout3.php') </script>";
  
							}
							else{
								echo "err";
							}

							echo mysqli_error($con);
						}
					}

					$ordermedicine="SELECT MEDICINE_ID FROM CART WHERE BUYER_ID='$bid'";
					$ordermedicine1=mysqli_query($con,$ordermedicine);
					$order_medicine = mysqli_fetch_all($ordermedicine1);
					//echo sizeof($orders);
					// product price

					
					// /product price end

 

					for($i=0;$i<sizeof($order_medicine);$i++)      
					{

						echo "<br/> <br/>";
						$price_medicine1="SELECT PRICE FROM MEDICINE WHERE MEDICINE_ID IN(SELECT MEDICINE_ID FROM CART WHERE BUYER_ID='$bid')";
						$price_medicine2=mysqli_query($con,$price_medicine1);
						$price_medicine = mysqli_fetch_all($price_medicine2);
						

						$sellermedicine = mysqli_query($con,"SELECT SELLER_ID FROM MEDICINE WHERE MEDICINE_ID='" . strval($order_medicine[$i][0]). "'");
						$sellermedicine1 = mysqli_fetch_all($sellermedicine);
						/*echo "\$sellerproduct1= ";
						print_r($sellerproduct1);
						echo "<br>";*/
						if(!empty($order_medicine[$i][0]))
						{
							$order_insert_medicine1= mysqli_query($con,"INSERT INTO ORDER_DETAILS (`SELLER_ID`, `BUYER_ID`, `MEDICINE_ID`, `QUANTITY`, `PAYMENT_PRICE`, `PAYMENT_METHOD`, `SHIPMENT_STATUS`) VALUES ('".strval($sellermedicine1[0][0])."', '$bid', '".strval($order_medicine[$i][0])."', '1','".strval($price[0][0])."', 'COD', 'ordered') ");

							if($order_insert_pet1){
								$delete_MEDICINE="DELETE FROM CART WHERE MEDICINE_ID='".strval($delete_MEDICINE[$i][0])."' ";
								$result2=mysqli_query($con,$delete_PET);
    							echo "<script> location.replace('checkout.php') </script>";
  
							}
							else{
								echo "err";
							}
						 }
					}

					}
					?>
					<div class="checkout-right-basket">
						<a href="payment.php">Make a Payment
							<span class="fa fa-hand-o-right" aria-hidden="true"></span>
						</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //checkout page -->
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

	

	<!--quantity-->
	<script>
		$('.value-plus').on('click', function () {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) + 1;
			divUpd.text(newVal);
		});

		$('.value-minus').on('click', function () {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) - 1;
			if (newVal >= 1) divUpd.text(newVal);
		});
	</script>
	<!--quantity-->
	<script>
		$(document).ready(function (c) {
			$('.close1').on('click', function (c) {
				$('.rem1').fadeOut('slow', function (c) {
					$('.rem1').remove();
				});
			});
		});
	</script>
	<script>
		$(document).ready(function (c) {
			$('.close2').on('click', function (c) {
				$('.rem2').fadeOut('slow', function (c) {
					$('.rem2').remove();
				});
			});
		});
	</script>
	<script>
		$(document).ready(function (c) {
			$('.close3').on('click', function (c) {
				$('.rem3').fadeOut('slow', function (c) {
					$('.rem3').remove();
				});
			});
		});
	</script>
	<!--//quantity-->

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