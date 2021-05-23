<?php include "header.php"; ?>
<?php

	include "connection.php";

	if(!isset($_SESSION['log']))
	{
		header("location:index.php");
	}
	
	else
	{
		if(isset($_GET['mid']))
		{

		$mid = $_GET['mid'];

		$q2="SELECT * FROM LOGIN WHERE LOGIN_ID='$mid'";
		$e2=mysqli_query($con,$q2);
		$get_data1=mysqli_fetch_array($e2);
		$mid=$get_data1['LOGIN_ID'];
		$email_id=$get_data1['EMAIL_ID'];
		$pnum=$get_data1['PHONE_NO'];
		$dp=$get_data1['PROFILE_PIC'];


		$q1="SELECT * FROM ADMIN WHERE LOGIN_ID='$mid'";
		$e1=mysqli_query($con,$q1);
		$get_data=mysqli_fetch_array($e1);
		$Uname=$get_data['NAME'];
		
		}
		
		}	
	
	
?>
<?php
if(isset($_GET['mid']))
{
	$mid = $_GET['mid'];

	if(isset($_POST['submit']))
	{

		if($_FILES["image"]["name"] != " ")
		{
			$user = $_POST['uname'];
			$newphone = $_POST['phn'];
			$email = $_POST['email'];
			$file=$_FILES['image']['tmp_name'];
			$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
			$image_name=addslashes($_FILES['image']['name']);

			move_uploaded_file($_FILES["image"]["tmp_name"],"photos/".$_FILES["image"]["name"]);

			$location="photos/" . $_FILES["image"]["name"];
			$updated = mysqli_query($con,"UPDATE LOGIN SET EMAIL_ID='$email',PROFILE_PIC='$location' WHERE LOGIN_ID='$mid'");
			$updated2 = mysqli_query($con,"UPDATE ADMIN SET NAME='$user' WHERE LOGIN_ID='$mid'");
			$updated3 = mysqli_query($con,"UPDATE LOGIN SET PHONE_NO='$newphone' WHERE LOGIN_ID='$mid'");


			if($updated && $updated2)
			{
				if($updated3)
				{
					echo "<script> location.replace('dashboard.php'); </script>";				
				}
				else
				{
					echo "<font style='color:red'>Error...</font>";
				}
			}
			else
			{
				echo "<font style='color:red'>Error...</font>";
			}
		}
		else
		{
			$name = $_POST['uname'];
			$newphone = $_POST['phn'];
			$email = $_POST['email'];
			$updated = mysqli_query($con,"UPDATE LOGIN SET EMAIL_ID='$email',PHONE_NO='$newphone' WHERE LOGIN_ID='$mid'");
			$updated2 = mysqli_query($con,"UPDATE ADMIN SET NAME='$name' WHERE LOGIN_ID='$mid'");
			
			
			if($updated && $updated2)
			{
				header("location:dashboard.php?ep=1");				
			}
			else
			{
					echo "<font style='color:red'>Error...</font>";
			}
		}
		
	}
}
			
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>  
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <style>
	#myDiv {
	border: 2px solid lightgray;
	height:210px;
	width:210px;
	float: left;
	}
	</style>
  
</head>
<body>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        manage admin profile
        <small>Admin Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">manage admin profile</li>
      </ol>
    </section>
	
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <!-- Main row -->
      <div class="row">
	  
	  <div class="box box-warning">
            <div class="box-header with-border">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" method="post" enctype="multipart/form-data" >
                <!-- text input -->
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" name="uname" value="<?php echo $Uname; ?>" class="form-control" placeholder="Enter name ..." required />
                </div>
				<div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" value="<?php echo $email_id; ?>" class="form-control" placeholder="Enter Email ..." required />
                </div>
				<div class="form-group">
                  <label>Phone No</label>
                  <input type="text" name="phn" class="form-control" placeholder="Enter Phone no ..." pattern="[6789][0-9]{9}" oninput="setCustomValidity('')" title='Enter 10 Digit mobile
number starting with 7 or 8 or 9' value="<?php echo $pnum; ?>" required />
                </div>
				
				<!--div class="form-group">
                <label>Birth Date:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="dob"  value="<?php echo $dob; ?>" class="form-control pull-right" id="datepicker" autocomplete="off" required />
                </div-->
                <!-- /.input group -->
              <!--/div-->
                
                

                <!-- textarea -->
                <!--div class="form-group">
                  <label>Address</label>
                  <textarea class="form-control" name="address" rows="3" required ><?php echo $address; ?></textarea>
                </div-->
				<div class="form-group">
                  <label>Profile Pic</label>
                  <input type="file" id="profile-img" name="image" accept="image/png,image/jpg,image/jpeg" class="form-control" placeholder="">
					<div id="myDiv" align="center"> 
						<!--<p class="square"> -->
					  <img src="<?php echo $dp; ?>" id="profile-img-tag" alt="Profile Pic" width="200px" height="200px" style="border:5px solid #ffffff; background-color: #ffffff;" />


						<script type="text/javascript">
							function readURL(input) {
								if (input.files && input.files[0]) {
									var reader = new FileReader();
									
									reader.onload = function (e) {
										$('#profile-img-tag').attr('src', e.target.result);
									}
									reader.readAsDataURL(input.files[0]);
								}
							}
							$("#profile-img").change(function(){
								readURL(this);
							});
						</script>
					</div>	
					
				</div>
              <div class="box-footer" style="float:right;">
                <input type="submit" name="submit" class="btn btn-primary" value="modify" /> 
              </div>
			  
			  </form>
			  
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
     
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
	
  </div>
  <!-- /.content-wrapper -->
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script>
$(document).ready(function () {
$('#datepicker').datepicker({    
    endDate: '+1d',
    autoclose: true
});  });
</script>
<?php include "footer.php"; ?>
</body>
</html>