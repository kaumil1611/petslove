<?php
	include 'header1.php';
	include "connection.php";
	
	 $xval=$_GET['val'];
	if($xval=='Dogs')
	{
	$p1="SELECT * FROM PETS where TYPE='Large Breed'&& PET_CATEGORY='Dogs'";
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
					<li>Pets</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- top Products -->
	<div class="ads-grid">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Large Breed
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<!-- product left -->
			
			<!-- //product left -->
			<!-- product right -->
			<div class="agileinfo-ads-display col-md- w3l-rightpro">
				<div class="wrapper">
					<!-- first section -->
					<div class="product-sec1">
						<?php 
							
							while($row=mysqli_fetch_array($fetchp1))
								{
										
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
										<span class="item_price"><?php echo $row['PRICE']; ?></span>
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
												<input type="hidden" name="return" value="<?php echo $row['PET_ID'] ?> " />
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
						
							<?php } ?>
						<div class="clearfix"></div>
					</div>
					</div>
				</div>
			</div>
		</div>
	<?php } 		
		elseif ($xval=='Cats') {
				$p1="SELECT * FROM PETS where TYPE='Large Breed' && PET_CATEGORY='Cats'";
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
					<li>Pets</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- top Products -->
	<div class="ads-grid">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Large Breed
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<!-- product left -->
			
			<!-- //product left -->
			<!-- product right -->
			<div class="agileinfo-ads-display col-md- w3l-rightpro">
				<div class="wrapper">
					<!-- first section -->
					<div class="product-sec1">
						<?php 

							while($row=mysqli_fetch_array($fetchp1))
								{
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
										<span class="item_price"><?php echo $row['PRICE']; ?></span>
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
						
							<?php } ?>
						<div class="clearfix"></div>
					</div>
					</div>
				</div>
			</div>
		</div>
<?php }
		elseif ($xval=='Birds') {
				$p1="SELECT * FROM PETS where PET_CATEGORY='Birds'";
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
					<li>Pets</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- top Products -->
	<div class="ads-grid">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Birds
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<!-- product left -->
			
			<!-- //product left -->
			<!-- product right -->
			<div class="agileinfo-ads-display col-md- w3l-rightpro">
				<div class="wrapper">
					<!-- first section -->
					<div class="product-sec1">
						<?php 

							while($row=mysqli_fetch_array($fetchp1))
								{
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
										<span class="item_price"><?php echo $row['PRICE']; ?></span>
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
						
							<?php } ?>
						<div class="clearfix"></div>
					</div>
					</div>
				</div>
			</div>
		</div>
<?php } ?>
<?php 
if($xval=='Dogs')
	{
	$p1="SELECT * FROM PETS where TYPE='Giant Breed'&& PET_CATEGORY='Dogs'";
	$fetchp1= mysqli_query($con,$p1);        
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<!-- //page -->
	<!-- top Products -->
	<div class="ads-grid">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Giant Breed
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<!-- product left -->
			
			<!-- //product left -->
			<!-- product right -->
			<div class="agileinfo-ads-display col-md- w3l-rightpro">
				<div class="wrapper">
					<!-- first section -->
					<div class="product-sec1">
						<?php 

							while($row=mysqli_fetch_array($fetchp1))
								{
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
										<span class="item_price"><?php echo $row['PRICE']; ?></span>
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
						
							<?php } ?>
						<div class="clearfix"></div>
					</div>
					</div>
				</div>
			</div>
		</div>
	<?php } 		
		elseif ($xval=='Cats') {
				$p1="SELECT * FROM PETS where TYPE='Giant Breed' && PET_CATEGORY='Cats'";
				$fetchp1= mysqli_query($con,$p1);
			
	 ?>
	 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<!-- top Products -->
	<div class="ads-grid">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Giant Breed
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<!-- product left -->
			
			<!-- //product left -->
			<!-- product right -->
			<div class="agileinfo-ads-display col-md- w3l-rightpro">
				<div class="wrapper">
					<!-- first section -->
					<div class="product-sec1">
						<?php 

							while($row=mysqli_fetch_array($fetchp1))
								{
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
										<span class="item_price"><?php echo $row['PRICE']; ?></span>
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
						
							<?php } ?>
						<div class="clearfix"></div>
					</div>
					</div>
				</div>
			</div>
		</div>
<?php } ?>

<?php 
if($xval=='Dogs')
	{
	$p1="SELECT * FROM PETS where TYPE='Medium Breed' && PET_CATEGORY='Dogs'";
	$fetchp1= mysqli_query($con,$p1);        
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<!-- //page -->
	<!-- top Products -->
	<div class="ads-grid">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Medium Breed
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<!-- product left -->
			
			<!-- //product left -->
			<!-- product right -->
			<div class="agileinfo-ads-display col-md- w3l-rightpro">
				<div class="wrapper">
					<!-- first section -->
					<div class="product-sec1">
						<?php 

							while($row=mysqli_fetch_array($fetchp1))
								{
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
										<span class="item_price"><?php echo $row['PRICE']; ?></span>
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
						
							<?php } ?>
						<div class="clearfix"></div>
					</div>
					</div>
				</div>
			</div>
		</div>
	<?php } 		
		elseif ($xval=='Cats') {
				$p1="SELECT * FROM PETS where TYPE='Medium Breed' && PET_CATEGORY='Cats'";
				$fetchp1= mysqli_query($con,$p1);
			
	 ?>
	 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<!-- top Products -->
	<div class="ads-grid">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Medium Breed
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<!-- product left -->
			
			<!-- //product left -->
			<!-- product right -->
			<div class="agileinfo-ads-display col-md- w3l-rightpro">
				<div class="wrapper">
					<!-- first section -->
					<div class="product-sec1">
						<?php 

							while($row=mysqli_fetch_array($fetchp1))
								{
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
										<span class="item_price"><?php echo $row['PRICE']; ?></span>
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
						
							<?php } ?>
						<div class="clearfix"></div>
					</div>
					</div>
				</div>
			</div>
		</div>
<?php } ?>
<?php 
if($xval=='Dogs')
	{
	$p1="SELECT * FROM PETS where TYPE='Small Breed'&& PET_CATEGORY='Dogs'";
	$fetchp1= mysqli_query($con,$p1);        
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<!-- //page -->
	<!-- top Products -->
	<div class="ads-grid">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Small Breed
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<!-- product left -->
			
			<!-- //product left -->
			<!-- product right -->
			<div class="agileinfo-ads-display col-md- w3l-rightpro">
				<div class="wrapper">
					<!-- first section -->
					<div class="product-sec1">
						<?php 

							while($row=mysqli_fetch_array($fetchp1))
								{
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
										<span class="item_price"><?php echo $row['PRICE']; ?></span>
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
						
							<?php } ?>
						<div class="clearfix"></div>
					</div>
					</div>
				</div>
			</div>
		</div>
	<?php } 		
		elseif ($xval=='Cats') {
				$p1="SELECT * FROM PETS where TYPE='Small Breed' && PET_CATEGORY='Cats'";
				$fetchp1= mysqli_query($con,$p1);
			
	 ?>
	 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<!-- top Products -->
	<div class="ads-grid">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Small Breed
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<!-- product left -->
			
			<!-- //product left -->
			<!-- product right -->
			<div class="agileinfo-ads-display col-md- w3l-rightpro">
				<div class="wrapper">
					<!-- first section -->
					<div class="product-sec1">
						<?php 

							while($row=mysqli_fetch_array($fetchp1))
								{
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
										<span class="item_price"><?php echo $row['PRICE']; ?></span>
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
						
							<?php } ?>
						<div class="clearfix"></div>
					</div>
					</div>
				</div>
			</div>
		</div>
<?php } ?>
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