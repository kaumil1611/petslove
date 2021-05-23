<?php
	include 'connection.php';

	$selleremail = $_POST['selleremail'];
	$phoneno = $_POST['phoneno'];
	$userpassword = $_POST['sellerpassword'];
	$userconfirmpsd = $_POST['sellerconfirmpsd'];


	if($userpassword==$userconfirmpsd)
	{
		$epsd = md5($userpassword);

		$exist = mysqli_query($con,"SELECT * FROM LOGIN WHERE EMAIL_ID='$selleremail'");
		$count = mysqli_num_rows($exist);

		if($count==0)
		{
			$ins = mysqli_query($con,"INSERT INTO LOGIN(EMAIL_ID,PHONE_NO,PASSWORD,ROLE,STATUS) VALUES ('$selleremail','$phoneno','$epsd','2','0') ");
			header('location: seller/index.php?st=1');
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