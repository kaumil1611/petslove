<?php

	include "connection.php";
		
	session_start();
	
	if(!isset($_SESSION['log']))
	{
		header("location:index.php");
	}
	
	else
	{
		
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		
		$pass3 = $_POST['pass1'];
		$pass2 = $_POST['pass2'];
		$pass1 = md5($pass3);
	
		
		$file = $_FILES['image']['tmp_name'];
		$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
		$image_name = addslashes($_FILES['image']['name']);
		
			move_uploaded_file($_FILES["image"]["tmp_name"],"photos/" . $_FILES["image"]["name"]);
			
			$location="photos/" . $_FILES["image"]["name"];
			
		
		$check1 = "SELECT * FROM LOGIN WHERE EMAIL_ID='$email'";
		$check = mysqli_query($con,$check1);
		$checkmail = mysqli_fetch_array($check);
		$countmail = mysqli_num_rows($check);

		if($countmail>=1)
		{
			echo "user already exists";
			header("refresh:0; url=addadmin.php?flag=2");
		}
		else
		{

		$query = "INSERT INTO LOGIN(EMAIL_ID,PHONE_NO,PASSWORD,PROFILE_PIC,ROLE,STATUS,ACTIVE) VALUES('$email','$phone','$pass1','$location','1','0','1')";
		
		$result = mysqli_query($con,$query);
		
		$rowsql = mysqli_query($con,"SELECT MAX(LOGIN_ID) AS max FROM LOGIN");
			
		$row = mysqli_fetch_array($rowsql);
		$id = $row['max'];
		
		$sql = "INSERT INTO ADMIN(LOGIN_ID,NAME) VALUES('$id','$name')";
				
			if(!mysqli_query($con,$sql))
			{
				echo "Not inserted...";
			}
			
			else
			{
				echo "inserted successfully....";
				header("refresh:0; url=addadmin.php?flag=1");
				
			}
		}
	}
	

?>