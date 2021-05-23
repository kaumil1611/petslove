<?php include "header.php"; ?>
<?php

	include "connection.php";
	
	
	
	if(!isset($_SESSION['log1']))
	{
		header("location:index.php");
	}
	
	else
	{
		$log = $_SESSION['log1'];
		
		$q2="SELECT * FROM LOGIN WHERE EMAIL_ID='$log'";
		$e2=mysqli_query($con,$q2);
		$get_data1=mysqli_fetch_array($e2);
		$idx=$get_data1['LOGIN_ID'];
		$email_id=$get_data1['EMAIL_ID'];
		$pnum=$get_data1['PHONE_NO'];
		$dp=$get_data1['PROFILE_PIC'];


		$q1="SELECT * FROM SELLER WHERE LOGIN_ID='$idx'";
		$e1=mysqli_query($con,$q1);
		$get_data=mysqli_fetch_array($e1);
		$Uname=$get_data['NAME'];
		
		}
?>
<?php
	
	if(isset($_POST['submit']))
	{				
		
		if($_FILES["image"]["name"] != "")
		{
			$uname = $_POST['uname'];
			$phone = $_POST['phone'];
			$email = $_POST['email'];
			$shop_lic_no = $_POST['shop_lic_no'];
			$shop_no = $_POST['shop_no'];
			$shop_name = $_POST['shop_name'];
			$complex_name = $_POST['complex_name'];
			$street_name = $_POST['street_name'];
			$landmark_name = $_POST['landmark_name'];
			$city_Name = $_POST['city_Name'];
			$state = $_POST['state'];
			$pincode = $_POST['pincode'];

			$file=$_FILES['image']['tmp_name'];
			$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
			$image_name=addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"photos/".$_FILES["image"]["name"]);
				
			$location="photos/" . $_FILES["image"]["name"];
      $updated = mysqli_query($con,"INSERT INTO LOGIN ('PROFILE_PIC') VALUES ('$location') WHERE EMAIL_ID='$email'");
      $updated2 = mysqli_query($con,"INSERT INTO SELLER ('LOGIN_ID','NAME','SHOP_NO','SHOP_NAME','COMPLEX_NAME','STREET','LANDMARK','CITY_NAME','STATE','PINCODE','SHOP_LICENCE_NO') VALUES ('$idx','$uname','$shop_no','$shop_name','$complex_name','$street_name','$landmark_name','$city_Name','$state','$pincode','$shop_lic_no')");
						
			
			if($updated && $updated2)
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
			$uname = $_POST['uname'];
			$phone = $_POST['phone'];
			$email = $_POST['email'];
			$shop_lic_no = $_POST['shop_lic_no'];
			$shop_no = $_POST['shop_no'];
			$shop_name = $_POST['shop_name'];
			$complex_name = $_POST['complex_name'];
			$street_name = $_POST['street_name'];
			$landmark_name = $_POST['landmark_name'];
			$city_Name = $_POST['city_Name'];
			$state = $_POST['state'];
			$pincode = $_POST['pincode'];
			
			$updated = mysqli_query($con,"UPDATE LOGIN SET EMAIL_ID='$email',PROFILE_PIC='$location',STATUS=1 WHERE LOGIN_ID='$idx'");
			$updated2 = mysqli_query($con,"UPDATE SELLER SET NAME='$uname',SHOP_NO='$shop_name',SHOP_NAME='$shop_name',COMPLEX_NAME='$complex_name',STREET='$street_name',LANDMARK='$landmark_name',CITY_NAME='$city_Name',STATE='$state',PINCODE='$pincode',SHOP_LICENCE_NO='$shop_lic_no' WHERE LOGIN_ID='$idx'");
			
			
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
        Edit Profile
        <small>Seller Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Profile</li>
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
                  <input type="text" name="phone" value="<?php echo $pnum; ?>" class="form-control" placeholder="Enter Phone no ..." pattern="[6789][0-9]{9}" oninput="setCustomValidity('')" title='Enter 10 Digit mobile
number starting with 7 or 8 or 9' required />
                </div>
                <div class="form-group">
                     <label>Shop_Licence_No</label>
                    <input type="text" name="shop_lic_no" class="form-control" placeholder="Enter Shop_Licence_No ..." required />
                </div>

               <div class="form-group">
                     <label>Shop_No</label>
                    <input type="text" name="shop_no" class="form-control" placeholder="Enter Shope_No ..." required />
                </div>

                <div class="form-group">
                    <label>Shop_Name</label>
                    <input type="text" name="shop_name" class="form-control" placeholder="Enter Shop_Name ..." required />
                </div>

                <div class="form-group">
                    <label>Complex_Name</label>
                    <input type="text" name="complex_name" class="form-control" placeholder="Enter Complex_Name ..." required />
                </div>

                <div class="form-group">
                    <label>Street_Name</label>
                    <input type="text" name="street_name" class="form-control" placeholder="Enter Street_Name ..." required />
                </div>

                <div class="form-group">
                    <label>Landmark</label>
                    <input type="text" name="landmark_name" class="form-control" placeholder="Enter Landmark_Name ..." required />
                </div>

                <div class="form-group">    
                          <label>City_Name</label>
                          <select name="city_Name" class="form-control" required>
                                <option value="0">--SELECT_CITY--</option>
                                <option value="Ahmedabad">Ahmedabad</option>
                                <option value="Surat">Surat</option>
                                <option value="Rajkot">Rajkot</option>
                                <option value="Vadodara">Vadodara</option>
                          </select>
                </div>

                <div class="form-group">    
                          <label>State</label>
                          <select name="state" class="form-control" required>
                                <option value="0">--SELECT_STATE--</option>
                                <option value="Ahmedabad">Gujarat</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Rajasthan">Rajasthan</option>
                          </select>
                </div>

               <div class="form-group">
                     <label>Pincode</label>
                    <input type="text" name="pincode" class="form-control" placeholder="Enter pincode ..." required />
                </div>

        <div class="form-group">
                  <label>Add Profile Pic</label>
          
                  <input type="file" id="profile-img" name="image" accept="image/png,image/jpg,image/jpeg" class="form-control" placeholder="">
          <div id="myDiv" align="center"> 
            <!--<p class="square"> -->
            <img src="<?php echo $def; ?>" id="profile-img-tag" alt="Profile Pic" width="200px" height="200px" style="border:5px solid #ffffff; background-color: #ffffff;" />


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
                <input type="submit" name="submit" value="ADD" class="btn btn-primary">
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