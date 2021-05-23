<?php
	include 'connection.php';
	session_start();
	
	
	if (isset($_POST['login']))
	{
        // removes backslashes
	$Name = stripslashes($_REQUEST['Name']);
        //escapes special characters in a string
	$Name = mysqli_real_escape_string($con,$Name);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `LOGIN` WHERE EMAIL_ID='$Name' and PASSWORD='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['Name'] = $Name;
            // Redirect user to index.php

	    header("Location: index.php");
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }else{
?>

<p>Not registered yet? <a href='signupuser.php'>Register Here</a></p>

<?php } ?>
