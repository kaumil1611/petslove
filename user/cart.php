<?php
	include 'connection.php';
	session_start();
	$item_name=$_POST['item_name'];
	$amount=$_POST['amount'];
	$pet=0;
	$product=0;
	$medicine=0;
	if(isset($_POST['PRODUCT_ID']))
	{
	$product=1;
	$PRODUCT_ID=$_POST['PRODUCT_ID'];
	}

	if(isset($_POST['PET_ID']))
	{
	$pet=1;
	$PET_ID=$_POST['PET_ID'];
	}

	if(isset($_POST['MEDICINE_ID']))
	{
	$medicine=1;
	$MEDICINE_ID=$_POST['MEDICINE_ID'];
	}

	if($product==1 && $pet==1 && $medicine==1)
	{
				$log=$_SESSION['Name'];
				$bid1 = mysqli_query($con,"SELECT BUYER_ID FROM BUYER WHERE LOGIN_ID='$log'");
				$bid2 = mysqli_fetch_array($bid1);
				$bid = $bid2['BUYER_ID'];
				
				echo mysqli_error($con);
				$insert = "INSERT INTO CART(`CART_ID`, `BUYER_ID`, `PRODUCT_ID`, `PET_ID`, `MEDICINE_ID`, `QUANTITY`) VALUES('','$bid','$PRODUCT_ID','$PET_ID','$MEDICINE_ID','1')";
				$result = mysqli_query($con,$insert);

				if(!$result)
						{
							echo "Not inserted...";
							//echo $idnew;
							echo "<br/>".$bid."<br/>";

						echo mysqli_error($con);
						}
						
						else
						{
							header("location:checkout.php");
						}
	}
	else if($product==1 && $pet==1){
			$log=$_SESSION['Name'];
			$bid1 = mysqli_query($con,"SELECT BUYER_ID FROM BUYER WHERE LOGIN_ID='$log'");
			$bid2 = mysqli_fetch_array($bid1);
			$bid = $bid2['BUYER_ID'];
	

		$insert = "INSERT INTO CART(`CART_ID`, `BUYER_ID`, `PRODUCT_ID`, `PET_ID`, `QUANTITY`) VALUES('','$bid','$PRODUCT_ID','$PET_ID','1')";
			$result = mysqli_query($con,$insert);

	if(!$result)
			{
				echo "Not inserted...";
				//echo $idnew;
				echo "<br/>".$bid."<br/>";

			echo mysqli_error($con);
			}
			
			else
			{
				header("location:checkout.php");
			}
		}
		else if($product==1 && $medicine==1){
			$log=$_SESSION['Name'];
			$bid1 = mysqli_query($con,"SELECT BUYER_ID FROM BUYER WHERE LOGIN_ID='$log'");
			$bid2 = mysqli_fetch_array($bid1);
			$bid = $bid2['BUYER_ID'];
	

		$insert = "INSERT INTO CART(`CART_ID`, `BUYER_ID`, `PRODUCT_ID`, `MEDICINE_ID`, `QUANTITY`) VALUES('','$bid','$PRODUCT_ID','$MEDICINE_ID','1')";
			$result = mysqli_query($con,$insert);

	if(!$result)
			{
				echo "Not inserted...";
				//echo $idnew;
				echo "<br/>".$bid."<br/>";

			echo mysqli_error($con);
			}
			
			else
			{
				header("location:checkout.php");
			}
		}
		else if($pet==1 && $medicine==1){
			$log=$_SESSION['Name'];
			$bid1 = mysqli_query($con,"SELECT BUYER_ID FROM BUYER WHERE LOGIN_ID='$log'");
			$bid2 = mysqli_fetch_array($bid1);
			$bid = $bid2['BUYER_ID'];
	

		$insert = "INSERT INTO CART(`CART_ID`, `BUYER_ID`, `PET_ID`, `MEDICINE_ID`, `QUANTITY`) VALUES('','$bid','$PET_ID','$MEDICINE_ID','1')";
			$result = mysqli_query($con,$insert);

	if(!$result)
			{
				echo "Not inserted...";
				//echo $idnew;
				echo "<br/>".$bid."<br/>";

			echo mysqli_error($con);
			}
			
			else
			{
				header("location:checkout.php");
			}
		}
		else if($product==1){
			$log=$_SESSION['Name'];
			$bid1 = mysqli_query($con,"SELECT BUYER_ID FROM BUYER WHERE LOGIN_ID='$log'");
			$bid2 = mysqli_fetch_array($bid1);
			$bid = $bid2['BUYER_ID'];
	

		$insert = "INSERT INTO CART(`CART_ID`, `BUYER_ID`, `PRODUCT_ID`, `QUANTITY`) VALUES('','$bid','$PRODUCT_ID','1')";
			$result = mysqli_query($con,$insert);

	if(!$result)
			{
				echo "Not inserted...";
				//echo $idnew;
				echo "<br/>".$bid."<br/>";

			echo mysqli_error($con);
			}
			
			else
			{
				header("location:checkout.php");
			}
		}

		else if($pet==1){
			$log=$_SESSION['Name'];
			$bid1 = mysqli_query($con,"SELECT BUYER_ID FROM BUYER WHERE LOGIN_ID='$log'");
			$bid2 = mysqli_fetch_array($bid1);
			$bid = $bid2['BUYER_ID'];
	

		$insert = "INSERT INTO CART(`CART_ID`, `BUYER_ID`, `PET_ID`, `QUANTITY`) VALUES('','$bid','$PET_ID','1')";
			$result = mysqli_query($con,$insert);

	if(!$result)
			{
				echo "Not inserted...";
				//echo $idnew;
				echo "<br/>".$bid."<br/>";

			echo mysqli_error($con);
			}
			
			else
			{
				header("location:checkout.php");
			}
		}

		else if($medicine==1){
			$log=$_SESSION['Name'];
			$bid1 = mysqli_query($con,"SELECT BUYER_ID FROM BUYER WHERE LOGIN_ID='$log'");
			$bid2 = mysqli_fetch_array($bid1);
			$bid = $bid2['BUYER_ID'];
	

		$insert = "INSERT INTO CART(`CART_ID`, `BUYER_ID`, `MEDICINE_ID`, `QUANTITY`) VALUES('','$bid','$MEDICINE_ID','1')";
			$result = mysqli_query($con,$insert);

	if(!$result)
			{
				echo "Not inserted...";
				//echo $idnew;
				echo "<br/>".$bid."<br/>";

			echo mysqli_error($con);
			}
			
			else
			{
				header("location:checkout.php");
			}
		}
		else{
			echo "errrr";
		}

		

	?>

	