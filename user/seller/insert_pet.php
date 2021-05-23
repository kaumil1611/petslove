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

		$Registration_Id = $_POST['Registration_Id'];
		
		$Breed_Name = $_POST['Breed_Name'];
		$Gender = $_POST['Gender'];
		
		$Age = $_POST['Age'];
		$Color=$_POST['Color'];
		$Type = $_POST['Type'];
		$Category = $_POST['Category'];
		$Price = $_POST['Price'];
		$Description = $_POST['Description'];
			
		
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


			
		
			
		$query = "INSERT INTO PETS(PET_ID,SELLER_ID,REGISTRATION_ID,VERIFIED,BREED,GENDER,AGE,COLOR,TYPE,PET_CATEGORY,PRICE,DESCRIPTION,IMAGE_1,IMAGE_2,IMAGE_3) VALUES('','$idnew1','$Registration_Id','0','$Breed_Name','$Gender','$Age','$Color','$Type','$Category','$Price','$Description','$location','$location2','$location3')";
		
		$result = mysqli_query($con,$query);
		
		
		//$sql = "INSERT INTO ADMIN(LOGIN_ID,NAME) VALUES('$id','$name')";
				
			if(!$result)
			{
				echo "Not inserted...";

			}
			
			else
			{
				
				
				header("refresh:0; url=addpets.php?flag=1");
				
			}
	}
	

?>