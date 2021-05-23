
	<?php

	
	include "connection.php";      // Not compalsory....

	session_start();
	
	unset($_SESSION['USER']);
	
	session_destroy();
	
	header("location:index.php");


?>
	
