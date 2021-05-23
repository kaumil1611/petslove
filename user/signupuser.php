<?php
	include 'connection.php';

	$useremail = $_POST['useremail'];
	$phoneno = $_POST['phoneno'];
	$userpassword = $_POST['userpassword'];
	$userconfirmpsd = $_POST['userconfirmpsd'];


	if($userpassword==$userconfirmpsd)
	{
		$epsd = md5($userpassword);

		$exist = mysqli_query($con,"SELECT * FROM LOGIN WHERE EMAIL_ID='$useremail'");
		$count = mysqli_num_rows($exist);

		if($count==0)
		{
			$ins = mysqli_query($con,"INSERT INTO LOGIN(EMAIL_ID,PHONE_NO,PASSWORD,ROLE,STATUS) VALUES ('$useremail','$phoneno','$epsd','3','0') ");
			header('location:index.php?st=1');
		}
		else
		{
			echo "
				<script>
					alert ('user is alredy exist');
				</script>
			";
		}
		
	}
	else
	{
		echo "
			<script>
				alert ('both password are not same');
			</script>
		";
	}
	
?>