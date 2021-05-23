<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
--> 
<?php

include 'connection.php';
session_start();

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Pets Love</title>
	<!--/tags -->
	<link rel="icon" href="images\petslove.png" type="image" sizes="16x16">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Grocery Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	
	
	<!--//tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<!--pop-up-box-->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!--//pop-up-box-->
	<!-- price range -->
	<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
	<!-- fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
	<script src="https://static.codepen.io/assets/editor/live/console_runner-1df7d3399bdc1f40995a35209755dcfd8c7547da127f6469fd81e5fba982f6af.js"></script>
	<script src="https://static.codepen.io/assets/editor/live/css_reload-5619dc0905a68b2e6298901de54f73cefe4e079f65a75406858d92924b4938bf.js"></script>
	<meta charset="UTF-8">
	<meta name="robots" content="noindex">
	<link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111">
	<link rel="canonical" href="https://codepen.io/svnt/pen/beEgre">
	<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css"-->
	

	<style type="text/css">

		#android2{
			display: none;
		}
		
	</style>
	<script>
			function myfunction1() 
			{
			android2.style.display='block';
			android1.style.display='none';
			}
		</script>

</head>

<body>
	<!-- top-header -->
	<div class="header-most-top">
		<p>YOUR PETS WILL LOVE IT</p>
	</div>
	<!-- //top-header -->
	<!-- header-bot-->
	<div class="header-bot">
		<div class="header-bot_inner_wthreeinfo_header_mid">
			<!-- header-bot-->
			<div class="col-md-4 logo_agile">
				<h1>
					<a href="index.php">
						<span id="pets">Pets</span>
						<span id="love">Love</span>
						<img src="images/petslove.png" alt=" ">
					</a>
				</h1>
			</div>
			<!-- header-bot -->
			<div id="android1" class="col-md-8 header">
				<!-- header lists -->
				
				  
				<ul>
					<li>
						<a href="#" data-toggle="modal" data-target="#myModal1">
							<span class="fa fa-unlock-alt" aria-hidden="true"></span> Sign In </a>
					</li>
					<li>
						<a href="#" data-toggle="modal" data-target="#myModal2">
							<span class="fa fa-pencil-square-o" aria-hidden="true"></span> Sign Up </a>
					</li>
					<li>
						<a href="#" data-toggle="modal" data-target="#myModal3">
							<span class="fa fa-handshake-o" aria-hidden="true"></span> Sell with us</a>
					</li>
					
					<!--li>
						<span class="fa fa-phone" aria-hidden="true"></span> +91 1234567890
					</li
					
				</ul> -->
				
				<!-- //header lists -->
				<!-- search -->
				
				<div class="agileits_search">
					<form action="#" method="post">
						<input name="Search" type="search" placeholder="How can we help you today?" required="">
						<button type="submit" class="btn btn-default" aria-label="Left Align">
							<span class="fa fa-search" aria-hidden="true"> </span>
						</button>
					</form>
				</div>
				<!-- //search -->
				<!-- cart details -->
				
				
				<!-- //cart details -->
				<div class="clearfix"></div>
			</div>
				<!-- show -->

				<div id="android2" class="col-md-8 header">
				<!-- header lists -->
				
				 
				<!-- //header lists -->
				<!-- search -->
				
				<div class="agileits_search">
					<form action="#" method="post">
						<input name="Search" type="search" placeholder="How can we help you today?" required="">
						<button type="submit" class="btn btn-default" aria-label="Left Align">
							<span class="fa fa-search" aria-hidden="true"> </span>
						</button>
					</form>
				</div>
				<!-- //search -->
				<!-- cart details -->
				<div class="top_nav_right">
					<div class="wthreecartaits wthreecartaits2 cart cart box_1">
						<form action="checkout.php" method="post" class="last">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="display" value="1">
							<button class="w3view-cart" type="submit" name="submit" value="">
								<i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
								 
								 <a href="checkout.php"></a>

							</button>
						</form>
					</div>
				</div>
				<div class="top_nav_right2">
					<div class="wthreecartaits wthreecartaits2 cart cart box_1">
					<!--	<form action="#" method="post" class="last">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="display" value="1">-->
							<div class="dropdown">
							  <button class="w3view-cart" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    <i class="fa fa-user-circle" aria-hidden="true"></i>
							  </button>
							  <div class="dropdown-menu profile" aria-labelledby="dropdownMenuButton">
							    <a class="dropdown-item" href="myprofile.php">My profile</a><br/>
							    <a class="dropdown-item" href="order.php">Order</a><br/>
							    <a class="dropdown-item" href="logout.php">Log Out</a><br/>
							  </div>
							</div>

							<!--<button class="w3view-cart" type="submit" name="submit" value="">
								<i class="fa fa-user-circle" aria-hidden="true"></i>
								
							</button>-->
						<!--</form>-->
					</div>
				</div>
				<!-- //cart details -->
				<div class="clearfix"></div>
			</div>

				<!-- //show -->


			<div class="clearfix"></div>
		</div>
	</div>
	<!-- shop locator (popup) -->
	<!-- Button trigger modal(shop-locator) -->
	<!-- //shop locator (popup) -->
	<!-- signin Model -->
	<!-- Modal1 -->
	<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign In </h3>
						<p>
							Sign In now, Let's start your Grocery Shopping. Don't have an account?
							<a href="#" data-toggle="modal" data-target="#myModal2">
								Sign Up Now</a>
						</p>
						<form action="" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="User Name" name="Name" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Password" name="password" required="">
							</div>
							
							<input type="submit" name="login" value="Sign In">
						</form>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<?php 

			
			function checkname()
			{

				echo '<script type="text/javascript">',
				     'myfunction1();',
				     '</script>'
					;

			}

			if(isset($_POST['login']))
			{
				$Name=$_POST['Name'];
				$password=$_POST['password'];

				 $query = "SELECT * FROM `LOGIN` WHERE EMAIL_ID='$Name' and PASSWORD='".md5($password)."'";
				 $result = mysqli_query($con,$query) or die(mysql_error());
				 $data=mysqli_fetch_array($result);
				 $rows = mysqli_num_rows($result);
				 if($rows==1)
				 {
				 	 $_SESSION['Name'] = $data['LOGIN_ID'];
				 	echo '<script type="text/javascript">',
				     'myfunction1();',
				     '</script>'
					;
					
							
				 }
				 else
				 {
				 	echo "error";
					
				 }
			}
							if(isset($_SESSION['Name']))
							{
								checkname();							
							}
							
?>
	<!-- //Modal1 -->
	<!-- //signin Model -->
	<!-- signup Model -->
	<!-- Modal2 -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign Up</h3>
						<p>
							Let's set up your Account.
						</p>
						<form action="signupuser.php" method="post">
							
							<div class="styled-input">
								<input type="email" placeholder="E-mail" name="useremail" required="">
							</div>
							<div class="styled-input">
								<input type="tel" placeholder="Phone-No" name="phoneno" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Password" name="userpassword" id="password1" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Confirm Password" name="userconfirmpsd" id="password2" required="">
							</div>
							
							<input type="submit" value="SignUp">
						</form>
						<p>
							<a href="#">By clicking register, I agree to your terms</a>
						</p>
					</div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<!-- //Modal2 -->
	<!-- //signup Model -->

	<!-- signup Model -->
	<!-- Modal3 -->
	<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sell With Us</h3>
						<p>
							Let's set up your Account.
						</p>
						<form action="signupseller.php" method="post">
							
							<div class="styled-input">
								<input type="email" placeholder="E-mail" name="selleremail" required="">
							</div>
							<div class="styled-input">
								<input type="tel" placeholder="Phone-No" name="phoneno" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Password" name="sellerpassword" id="password1" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Confirm Password" name="sellerconfirmpsd" id="password2" required="">
							</div>
							<input type="submit" value="Sign Up">
						</form>
						<p>
							<a href="#">By clicking register, I agree to your terms</a>
						</p>
					</div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<!-- //Modal3 -->
	<!-- //blank Model -->

	<!-- //header-bot -->
	<!-- navigation -->
	<div class="ban-top">
		<div class="container">
			<div class="agileits-navi_search">
				<form action="#" method="post">
					<select id="agileinfo-nav_search" name="agileinfo_search" onchange="location = this.value;">
						<option value="">All Categories</option>
						<option value="pets.php?val=Dogs">Dogs</option>
						<option value="pets.php?val=Cats">Cats</option>
						<option value="pets.php?val=Birds">Birds</option>
						<option value="product.php?val=Food">Food</option>
						<option value="product.php?val=Toys">Toys</option>
						<option value="product.php?val=Grooming products">Grooming products</option>
						<option value="product.php?val=Cloths">Cloths</option>
						<option value="product.php?val=Medicine">Medicine</option>
					</select>
				</form>
			</div>
			<div class="top_nav_left">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
							    aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
							<center>
							<ul class="nav navbar-nav menu__list">
								<li class="active">
									<a class="nav-stylehead" href="index.php">Home
										<span class="sr-only">(current)</span>
									</a>
								</li>
								<li class="">
									<a class="nav-stylehead" href="about.php">About Us</a>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle nav-stylehead" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products
										<span class="caret"></span>
									</a>
									<ul class="dropdown-menu multi-column columns-3 sub_product">
										<div class="agile_inner_drop_nav_info">
											<div class="col-sm-6 multi-gd-img">
												<ul class="multi-column-dropdown">
													<li class="dropdown-header">
														Product
													</li>
													<li>
														<a href="product.php?val=Food">Food</a>
													</li>
													<li>
														<a href="product.php?val=Toys">Toys</a>
													</li>
													<li>
														<a href="product.php?val=Grooming products" class="groom-product">Grooming products</a>
													</li>
													<li>
														<a href="product.php?val=Cloths">Cloths</a>
													</li>
													<li>
														<a href="product.php?val=Medicine">Medicine</a>
													</li>
													
												</ul>
											</div>
											
											<!--div class="col-sm-4 multi-gd-img">
												<img src="images/nav.png" alt="">
											</div-->
											<div class="clearfix"></div>
										</div>
									</ul>
								</li>

								<li class="dropdown">
									<a href="#" class="dropdown-toggle nav-stylehead" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pets
										<span class="caret"></span>
									</a>
									<ul class="dropdown-menu multi-column columns-3 sub_dog">
										<div class="agile_inner_drop_nav_info">
											<div class="col-sm-6 multi-gd-img">
												<ul class="multi-column-dropdown">
													<li class="dropdown-header">
														Pets
													</li>
													<li>
														<a href="pets.php?val=Dogs">Dogs</a>
													</li>
													<li>
														<a href="pets.php?val=Cats">Cats</a>
													</li>
													<li>
														<a href="pets.php?val=Birds">Birds</a>
													</li>
												</ul>
											</div>
											<div class="clearfix"></div>
										</div>
									</ul>
								</li>
								<li class="">
									<a class="nav-stylehead" href="faqs.php">Faqs</a>
								</li>
								
								<li class="">
									<a class="nav-stylehead" href="contact.php">Contact</a>
								</li>
							</ul>
						</center>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
</body>
</html>