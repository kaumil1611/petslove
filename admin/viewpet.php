<?php include "header.php"; ?>        
<?php
    include "connection.php";

  if(!isset($_SESSION['log']))
  {
    header("location:index.php");
  }
  
  else
  {
    if(isset($_GET['petid']))
    {

    $petid = $_GET['petid'];

    $v1 = mysqli_query($con,"SELECT * FROM PETS WHERE PET_ID='$petid'");
    $get_data1 = mysqli_fetch_array($v1);
    $pid = $get_data1['PET_ID'];
    $sid = $get_data1['SELLER_ID'];
    $rid = $get_data1['REGISTRATION_ID'];
    $breed = $get_data1['BREED'];
    $gender = $get_data1['GENDER'];
    $age = $get_data1['AGE'];
    $color = $get_data1['COLOR'];
    $type = $get_data1['TYPE'];
    $pet_category = $get_data1['PET_CATEGORY'];
    $description = $get_data1['DESCRIPTION'];
    $price = $get_data1['PRICE'];
    $image_1 = $get_data1['IMAGE_1'];
    $image_2 = $get_data1['IMAGE_2'];
    $image_3 = $get_data1['IMAGE_3'];

    $v2 = mysqli_query($con,"SELECT * FROM SELLER WHERE SELLER_ID='$petid'");
    $get_data2= mysqli_fetch_array($v2);
    $sname = $get_data2['NAME'];

    }
    
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
        Pet Detail
        <small>Admin panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pet Detail</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <!-- Main row -->
      <div class="row">
      <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Pet Detail</h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Registration ID</th>
                  <td><?php echo $rid; ?></td>
                </tr>
                <tr>
                  <th>Breed</th>
                  <td><?php echo $breed; ?></td>
                </tr>
                <tr>
                  <th>Gender</th>
                  <td><?php echo $gender; ?></td>
                </tr>
                <tr>
                  <th>Age</th>
                  <td><?php echo $age; ?></td>
                </tr>
                <tr>
                  <th>Color</th>
                  <td><?php echo $color; ?></td>
                </tr>
                <tr>
                  <th>Type</th>
                  <td><?php echo $type; ?></td>
                </tr>
                <tr>
                  <th>Pet Category</th>
                  <td><?php echo $pet_category; ?></td>
                </tr>
                <tr>
                  <th>Price</th>
                  <td><?php echo $price; ?></td>
                </tr>
                <tr>
                  <th>Description</th>
                  <td><?php echo $description; ?></td>
                </tr>
                <tr>
                  <th>Image_1</th>
                  <td><img src="<?php echo $image_1; ?>" height="50" width="50" border="1px" alt="image_1"></img></td>
                </tr>
                <tr>
                  <th>Image_2</th>
                  <td><img src="<?php echo $image_2; ?>" height="50" width="50" border="1px" alt="image_2"></img></td>
                </tr>
                <tr>
                  <th>Image_3</th>
                  <td><img src="<?php echo $image_3; ?>" height="50" width="50" border="1px" alt="image_3"></img></td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
      
          </div>
          <!-- /.box -->
      <!--div id="pagination_controls"><?php echo $paginationCtrls; ?></div>
  </div-->
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