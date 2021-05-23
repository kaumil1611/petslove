<?php include "header.php"; ?>
<?php
    $log = $_SESSION['log1'];
    $st = mysqli_query($con,"SELECT STATUS FROM LOGIN WHERE EMAIL_ID='$log'");
    $st1 = mysqli_fetch_array($st);
    $sta = $st1['STATUS'];
    if($sta==0)
    {
      echo "<script> location.replace('editprofile.php') </script>";
    }
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Change Password
        </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Change Password</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->

      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
	     <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">To change password you must know your old password.</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Old Password</label>
                  <input type="password" name="old_pass" class="form-control" id="exampleInputEmail1" placeholder="Enter old password" required />
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">New Password</label>
                  <input type="password" name="pass1" class="form-control" id="pass1" placeholder="Enter new password" required />
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Retype New Password</label>
                  <input type="password" name="pass2" class="form-control" id="pass2" placeholder="Re-Enter new password" oninput="check(this)" required />
				  <script language='javascript' type='text/javascript'>
						function check(input) {
							if (input.value != document.getElementById('pass1').value) {
								input.setCustomValidity('Password Must be Matching.');
							} else {
								// input is valid -- reset the error message
								input.setCustomValidity('');
							}
						}
					</script>
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" name="submit" class="btn btn-primary" value="Change">
              </div>
		
<?php

	
	if(isset($_POST['submit']))
	{
		
		$old_pass1 = $_POST['old_pass'];
		$pass3 = $_POST['pass1'];
		$pass2 = $_POST['pass2'];
    $pass1 = md5($pass3);
    $old_pass = md5($old_pass1);
	 
    $pas = mysqli_query($con,"SELECT PASSWORD FROM LOGIN WHERE LOGIN_ID='$id'");
    $pas1 = mysqli_fetch_array($pas);
    $pass = $pas1['PASSWORD'];
    
		if($pass==$old_pass)
		{
			if($pass3==$pass2)	
			{
				$update = "UPDATE LOGIN SET PASSWORD='$pass1' WHERE LOGIN_ID='$id'";
				$result1 = mysqli_query($con,$update);
				
				if($result1)
				{
					echo "password updated successfully....";
				}
			
				else
				{
					echo "Error...";
				}
			}
		}
		
		else
		{
			echo "<font style='color:red'>Old password incorrect....</font>";
		}
	
	}

?> 
			  
			  	  
            </form>
          </div>
        </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include "footer.php"; ?>
</body>
</html>