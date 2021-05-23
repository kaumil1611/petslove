<?php

	include "connection.php";
		
	session_start();
	
	if(!isset($_SESSION['log1']))
	{
		header("location:index.php"); 
	}
	
	else 
	{
		$log=$_SESSION['log1'];
		$idx="SELECT * FROM LOGIN where EMAIL_ID ='$log'";
		$ffetch=mysqli_query($con,$idx);
		$data=mysqli_fetch_array($ffetch);
		$idnew=$data['LOGIN_ID'];


		$s1="SELECT SELLER_ID FROM SELLER where LOGIN_ID ='$idnew'";
		$ffetch1=mysqli_query($con,$s1);
		$data1=mysqli_fetch_array($ffetch1);
		$idnew1=$data1['SELLER_ID'];

		$Product_Name = $_POST['Product_Name'];
		
		$Company_Name = $_POST['Company_Name'];
		$Category = $_POST['Category'];
		
		$Pet_Category = $_POST['Pet_Category'];
		$Description=$_POST['Description'];
		$Price = $_POST['Price'];
		$Quantity = $_POST['Quantity'];
		
		$file = $_FILES['Image_1']['tmp_name'];
		$image = addslashes(file_get_contents($_FILES['Image_1']['tmp_name']));
		$image_name = addslashes($_FILES['Image_1']['name']);
		
			move_uploaded_file($_FILES["Image_1"]["tmp_name"],"photos/" . $_FILES["Image_1"]["name"]);
			
			$location="photos/" . $_FILES["Image_1"]["name"];

		$file2 = $_FILES['Image_2']['tmp_name'];
		$image2 = addslashes(file_get_contents($_FILES['Image_2']['tmp_name']));
		$image_name2 = addslashes($_FILES['Image_2']['name']);
		
			move_uploaded_file($_FILES["Image_2"]["tmp_name"],"photos/" . $_FILES["Image_2"]["name"]);
			
			$location2="photos/" . $_FILES["Image_2"]["name"];

		$file3 = $_FILES['Image_3']['tmp_name'];
		$image3 = addslashes(file_get_contents($_FILES['Image_3']['tmp_name']));
		$image_name3 = addslashes($_FILES['Image_3']['name']);
		
			move_uploaded_file($_FILES["Image_3"]["tmp_name"],"photos/" . $_FILES["Image_3"]["name"]);
			
			$location3="photos/" . $_FILES["Image_3"]["name"];


		
			
		$query = "INSERT INTO PRODUCTS(PRODUCT_ID,SELLER_ID,PRODUCT_NAME,COMPANY,CATEGORY,PET_CATEGORY,DESCRIPTION,PRICE,QUANTITY,IMAGE_1,IMAGE_2,IMAGE_3) VALUES('','$idnew1','$Product_Name','$Company_Name','$Category','$Pet_Category','$Description','$Price','$Quantity','$location','$location2','$location3')";
		
		$result = mysqli_query($con,$query);
		
		
		//$sql = "INSERT INTO ADMIN(LOGIN_ID,NAME) VALUES('$id','$name')";
				
			if(!$result)
			{
				echo "Not inserted...";
			  printf("Errormessage: %s\n", mysqli_error($con));


			}
			
			else
			{
				
				
				header("refresh:0; url=addproduct.php?flag=1");
				
			}
	}
	

?>