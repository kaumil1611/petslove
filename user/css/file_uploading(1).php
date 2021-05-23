<?php 
		if(isset($_POST['submit'])){

			echo "Name : " . $_FILES['file']['name'] . "<br/>";
			echo "Type : " . $_FILES['file']['type'] . "<br/>";
			echo "Size : " . $_FILES['file']['size'] . "<br/>";
			echo "Temporary Name : " . $_FILES['file']['tmp_name'] . "<br/>";
			echo "Error : " . $_FILES['file']['error'] . "<br/>";

		}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<form method="post" enctype="multipart/form-data">
			
			your image:<input type="file" name="file"><br/>
			<input type="submit" name="submit" value="submit">

		</form>
</body>
</html>