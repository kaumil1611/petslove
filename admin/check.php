<?php

		include "connection.php";
			
		session_start();
	
		$log = $_POST['email-phone'];
		
		$pass1 = $_POST['pass'];

		$pass = md5($pass1);
		
		
		$qry = "SELECT * FROM LOGIN WHERE (EMAIL_ID='$log' AND PASSWORD='$pass') OR (PHONE_NO='$log' AND PASSWORD='$pass')";

		$result = mysqli_query($con,$qry);
		
		$value = mysqli_fetch_array($result);
	
		$count = mysqli_num_rows($result);
		
		if($count==1 && $value['PASSWORD']==$pass)
		{
			if($value['ACTIVE']==1 && $value['ROLE']==1 )
			{
					$_SESSION['log'] = $value['EMAIL_ID'];
					
					$status = $value['STATUS'];
				
					if($status==0)
					{
						$id = $value['LOGIN_ID'];
							
						$otp = rand(100000,999999);
							
						$sql = "INSERT INTO OTP(OTP_ID,LOGIN_ID,OTP) VALUES('','$id','$otp')";
							
						$result1 = mysqli_query($con,$sql);
							
						if($result1)
						{
							header("location:verification.php");
						}
							
					}
						
					else
					{
						header("location:dashboard.php");
					}
				
			}
			else
			{
				header("location:index.php?flag=2");
			}
		}
		else
		{
			header("location:index.php? flag=1" );
		}
		
	
?> 	