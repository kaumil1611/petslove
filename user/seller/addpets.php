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
  <title>Seller| Add Pets</title>
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
        Add Pets
        <small>Seller panel control</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Pets</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
       <div class="row">
     <div class="box box-warning">
            <div class="box-header with-border">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
      <br/>
      <?php
        if(isset($_GET['flag'])){
        if($_GET['flag']==1)
          {
            echo "<center><font style='color:green; text-align:center'>Pet Added Successfully</font></center><br/>";
          
          }
        }

      ?>  
      <br/>
              <form role="form" method="POST" action="insert_pet.php" enctype="multipart/form-data" >
                <!-- text input -->
               <div class="form-group">  
                          <label>Registration_Id</label>
                          <input type="text" name="Registration_Id" class="form-control" placeholder="Enter Registration_Id ..." required />
                </div>

                <div class="form-group">    
                          <label>Breed</label>
                          <input type="text" name="Breed_Name" class="form-control" placeholder="Enter Breed_Name ..." required />
                </div>

                <div class="form-group">
                          <label>Gender</label>
                              <div class="radio">
                                  <label>
                                    <input type="radio" name="Gender" id="optionsRadios1" value="Male" checked>Male
                                  </label>
                              </div>
                              <div class="radio">
                                  <label>
                                    <input type="radio" name="Gender" id="optionsRadios2" value="Female">
                                      Female
                                  </label>
                              </div>
                  
                </div>
               <!-- address -->
               
               <div class="form-group">  
                     <label>Age</label>
                     <input type="text" name="Age" class="form-control" placeholder="Enter Age ..." required />
                </div>

                <div class="form-group">  
                     <label>Color</label>
                      <select name="Color" class="form-control" required>
                                <option value="0">--SELECT--</option>
                                <option value="Black">Black </option>
                                <option value="Red">Red </option>
                                <option value="Green">Green </option>
                                <option value="White">White </option>
                          </select>
                </div>

                <div class="form-group">    
                          <label>Type</label>
                          <select name="Type" class="form-control" required>
                                <option value="0">--SELECT--</option>
                                <option value="Small Breed">Small Breed</option>
                                <option value="Medium Breed">Medium Breed</option>
                                <option value="Large Breed">Large Breed</option>
                                <option value="Giant Breed">Giant Breed</option>
                          </select>
                </div>

                <div class="form-group">    
                          <label>Category</label>
                          <select name="Category" class="form-control" required>
                                <option value="0">--SELECT--</option>
                                <option value="Dogs">Dogs</option>
                                <option value="Cats">Cats</option>
                                <option value="Birds">Birds</option>
                          </select>
                </div>

                <div class="form-group">  
                          <label>Price</label>
                          <input type="text" name="Price" class="form-control" placeholder="Enter Price ..." required />       
                </div>

                <div class="form-group">   
                          <label>Description</label><br/>
                          <textarea rows="4" class="form-control" name="Description" placeholder="Enter Description here ..."></textarea>
                </div>

               <div class="form-group">  
                     <label>Image_1</label>
                     <input type="file" name="Image_1" class="form-control" placeholder="Display Image_1 ..."  />
                </div>

                <div class="form-group"> 
                    <label>Image_2</label>
                    <input type="file" name="Image_2" class="form-control" placeholder="Display Image_2 ..." />
                </div>

                <div class="form-group">  
                    <label>Image_3</label>
                    <input type="file" name="Image_3" class="form-control" placeholder="Display Image_3 ..."  />
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
  <!-- Control Sidebar -->
   <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
<!-- ./wrapper -->
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