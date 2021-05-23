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
<?php

	include "connection.php";

	if(!isset($_SESSION['log1']))
	{
		header("location:index.php");
	}
	
	else
	{
		if(isset($_GET['pid']))
		{

		$pid = $_GET['pid'];

		$q2="SELECT * FROM MEDICINE WHERE MEDICINE_ID='$pid'";
		$e2=mysqli_query($con,$q2);
		$get_data1=mysqli_fetch_array($e2);
		$pid=$get_data1['MEDICINE_ID'];
		$medicine_name=$get_data1['MEDICINE_NAME'];
		$company=$get_data1['COMPANY'];
		$pet_category=$get_data1['PET_CATEGORY'];
		$description=$get_data1['DESCRIPTION'];
		$price=$get_data1['PRICE'];
		$quantity=$get_data1['QUANTITY'];
		$image_1=$get_data1['IMAGE_1'];
		$image_2=$get_data1['IMAGE_2'];
		$image_3=$get_data1['IMAGE_3'];
		
		}
		
		}	
	
	
?>
<?php
if(isset($_GET['pid']))
{
	$pid = $_GET['pid'];

	if(isset($_POST['submit']))
	{

			$Medicine_Name = $_POST['Medicine_Name'];
			$Company_Name = $_POST['Company_Name'];
			$Pet_Category = $_POST['Pet_Category'];
			$Description = $_POST['Description'];
			$Price = $_POST['Price'];
			$Quantity = $_POST['Quantity'];
			
			$file = $_FILES['Image_1']['tmp_name'];
			$image = addslashes(file_get_contents($_FILES['Image_1']['tmp_name']));
			$image_name = addslashes($_FILES['Image_1']['name']);
			move_uploaded_file($_FILES["Image_1"]["tmp_name"],"photos/" . $_FILES["Image_1"]["name"]);
			$location="photos/" . $_FILES["Image_1"]["name"];

			$file2 = $_FILES['Image_2']['tmp_name'];
			$image2 = addslashes(file_get_contents($_FILES['Image_2']['tmp_name']));
			$image_name2 = addslashes($_FILES['Image_2']['name']);
			move_uploaded_file($_FILES["Image_2"]["tmp_name"],"photos/" . $_FILES["Image_2"]["name"]);
			$location2="photos/" . $_FILES["Image_2"]["name"];

			$file3 = $_FILES['Image_3']['tmp_name'];
			$image3 = addslashes(file_get_contents($_FILES['Image_3']['tmp_name']));
			$image_name3 = addslashes($_FILES['Image_3']['name']);
			move_uploaded_file($_FILES["Image_3"]["tmp_name"],"photos/" . $_FILES["Image_3"]["name"]);
			$location3="photos/" . $_FILES["Image_3"]["name"];
			
			
			$updated = mysqli_query($con,"UPDATE MEDICINE SET MEDICINE_NAME='$Medicine_Name',COMPANY='$Company_Name',PET_CATEGORY='$Pet_Category',DESCRIPTION='$Description',QUANTITY='$Quantity',PRICE='$Price',IMAGE_1='$location',IMAGE_2='$location2',IMAGE_3='$location3' WHERE MEDICINE_ID='$pid'");
			
			if($updated)
			{
				echo "<script> location.replace('manageproduct.php'); </script>";
			}
			else
			{
				echo "<font style='color:red'>Error...</font>";
			}
		
		/*else
		{
			$Product_Name = $_POST['Product_Name'];
			$Company_Name = $_POST['Company_Name'];
			$Category = $_POST['Category'];
			$Pet_Category = $_POST['Pets_Category'];
			$Description = $_POST['Description'];
			$Price = $_POST['Price'];
			$Quantity = $_POST['Quantity'];
			$Image_1 = $_POST['Image_1'];
			$Image_2 = $_POST['Image_2'];
			$Image_3 = $_POST['Image_3'];
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
		}*/
		
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
                          <label>Medicine_Name</label>
                          <input type="text" name="Medicine_Name" value="<?php echo $medicine_name ?>" class="form-control" placeholder="Enter Medicine_Name ..." required />
                </div>

                <div class="form-group">    
                          <label>Company</label>
                          <input type="text" name="Company_Name" value="<?php echo $company ?>" class="form-control" placeholder="Enter Company_Name ..." required />
                </div>

               <div class="form-group">    
                          <label>Pets_Category</label>
                          <select name="Pet_Category" class="form-control" required>
                                <option value="0"><?php echo $pet_category ?></option>
                                <option value="Dogs">Dogs</option>
                                <option value="Cats">Cats</option>
                                <option value="Birds">Birds</option>
                          </select>
                </div>
               <!-- address -->
               
               <div class="form-group">   
                          <label>Description</label>
                          <textarea rows="4" class="form-control" name="Description" placeholder="Enter Description here ..."><?php echo $description ?></textarea>
                </div>

                <div class="form-group">  
                     <label>Quantity</label>
                     <input type="text" name="Quantity" value="<?php echo $quantity ?>" class="form-control" placeholder="Enter Quantity ..." required />
                </div>

                <div class="form-group">  
                          <label>Price</label>
                          <input type="text" name="Price" value="<?php echo $price ?>" class="form-control" placeholder="Enter Price ..." required />       
                </div>


               <div class="form-group">  
                     <label>Image_1</label>
                    <input type="file" name="Image_1"  class="form-control" placeholder="Display Image_1 ..."  />
                    <img src="<?php echo $image_1; ?>" id="profile-img-tag" alt="Profile Pic" width="100px" height="100px" style="border:5px solid #ffffff; background-color: #ffffff;" />

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
					<div class="form-group">  
                     <label>Image_2</label>
                    <input type="file" name="Image_2"  class="form-control" placeholder="Display Image_1 ..."  />
                    <img src="<?php echo $image_2; ?>" id="profile-img-tag" alt="Profile Pic" width="100px" height="100px" style="border:5px solid #ffffff; background-color: #ffffff;" />
                    
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
					<div class="form-group">  
                     <label>Image_3</label>
                    <input type="file" name="Image_3"  class="form-control" placeholder="Display Image_1 ..."  />
                    <img src="<?php echo $image_1; ?>" id="profile-img-tag" alt="Profile Pic" width="100px" height="100px" style="border:5px solid #ffffff; background-color: #ffffff;" />
                    
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