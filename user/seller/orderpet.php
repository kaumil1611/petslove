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
    if(isset($_GET['oid']))
    {

    $oid = $_GET['oid'];

    $v1 = mysqli_query($con,"SELECT * FROM ORDER_DETAILS WHERE ORDER_ID='$oid'");
    $get_data1 = mysqli_fetch_array($v1);
    $oid = $get_data1['ORDER_ID'];
    $sid = $get_data1['SELLER_ID'];
    $bid = $get_data1['BUYER_ID'];
    $pid = $get_data1['PET_ID'];
    $date = $get_data1['DATE'];
    $qua = $get_data1['QUANTITY'];
    $price = $get_data1['PAYMENT_PRICE'];
    $method = $get_data1['PAYMENT_METHOD'];
    $status = $get_data1['SHIPMENT_STATUS'];



    $v2 = mysqli_query($con,"SELECT * FROM PETS WHERE PET_ID='$pid'");
    $get_data2 = mysqli_fetch_array($v2);
    $pid = $get_data2['PET_ID'];
    $sid = $get_data2['SELLER_ID'];
    $rid = $get_data2['REGISTRATION_ID'];
    $breed = $get_data2['BREED'];
    $gender = $get_data2['GENDER'];
    $age = $get_data2['AGE'];
    $color = $get_data2['COLOR'];
    $type = $get_data2['TYPE'];
    $pet_category = $get_data2['PET_CATEGORY'];
    $description = $get_data2['DESCRIPTION'];
    $price = $get_data2['PRICE'];
    $image_1 = $get_data2['IMAGE_1'];
    $image_2 = $get_data2['IMAGE_2'];
    $image_3 = $get_data2['IMAGE_3'];


    $v3 = mysqli_query($con,"SELECT * FROM BUYER WHERE BUYER_ID='$bid'");
    $get_data3 = mysqli_fetch_array($v3);
    $lid = $get_data3['LOGIN_ID'];
    $bname = $get_data3['NAME'];
    $house_no = $get_data3['HOUSE_NO'];
    $soc_name = $get_data3['SOC_NAME'];
    $street_name = $get_data3['STREET_NAME'];
    $landmark = $get_data3['LANDMARK'];
    $city_name = $get_data3['CITY_NAME'];
    $state = $get_data3['STATE'];
    $pincode = $get_data3['PINCODE'];

    $v4 = mysqli_query($con,"SELECT * FROM LOGIN WHERE LOGIN_ID='$lid'");
    $get_data4 = mysqli_fetch_array($v4);
    $email = $get_data4['EMAIL_ID'];
    $phone = $get_data4['PHONE_NO'];

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
      
        <div class="column"></div>
      <div class="col-xs-6">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Pet Detail</h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <th>Shipment status</th>
                  <td>
                    <form method="POST">
                      <select name="status">
                        <option value="accepted">Accepted</option>
                        <option value="dispatch">Dispatch</option>
                        <option value="delivered">Delivered</option>
                        <option value="dcline">Dcline</option>
                      </select>
                  </td>
                </tr>    
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
                  <th>Pet_category</th>
                  <td><?php echo $pet_category; ?></td>
                </tr>
                <tr>
                  <th>Type</th>
                  <td><?php echo $type; ?></td>
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
                  <th>Description</th>
                  <td><?php echo $description; ?></td>
                </tr>
                <tr>
                  <th>Price</th>
                  <td><?php echo $price; ?></td>
                </tr>
                <tr>
                  <th>Image_1</th>
                  <td><img src="<?php echo $image_1; ?>" height="50" width="50" border="1px" alt="image_1"></img> &nbsp;&nbsp;&nbsp;
                  <img src="<?php echo $image_2; ?>" height="50" width="50" border="1px" alt="image_2"></img> &nbsp;&nbsp;&nbsp;
                  <img src="<?php echo $image_3; ?>" height="50" width="50" border="1px" alt="image_3"></img></td>
                </tr> 
                <tr>
                         
              </table>
            </div>
            <!-- /.box-body -->
      
          </div>
          <!-- /.box -->
      <!--div id="pagination_controls"><?php echo $paginationCtrls; ?></div>
  </div-->
        </div>
       
      <!-- /.row (main row) -->

    
      <!-- Small boxes (Stat box) -->
      <!-- Main row -->
      
        
      <div class="col-xs-6">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Buyer Details</h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Name</th>
                  <td><?php echo $bname; ?></td>
                </tr>
                <tr>
                  <th>Email</th>
                  <td><?php echo $email; ?></td>
                </tr>
                <tr>
                  <th>Phone number</th>
                  <td><?php echo $phone; ?></td>
                </tr>
                <tr>
                  <th>House no.</th>
                  <td><?php echo $house_no; ?></td>
                </tr>
                <tr>
                  <th>Society Name</th>
                  <td><?php echo $soc_name; ?></td>
                </tr>
                <tr>
                  <th>Street Name</th>
                  <td><?php echo $street_name; ?></td>
                </tr>
                <tr>
                  <th>Landmark</th>
                  <td><?php echo $landmark; ?></td>
                </tr>
                <tr>
                  <th>City Name</th>
                  <td><?php echo $city_name; ?></td>
                </tr>
                <tr>
                  <th>State</th>
                  <td><?php echo $state; ?></td>
                </tr>
                <tr>
                  <th>Pincode</th>
                  <td><?php echo $pincode; ?></td>
                </tr>            
              </table>
            </div>
            <!-- /.box-body -->
      
          </div>
          <!-- /.box -->
      <!--div id="pagination_controls"><?php echo $paginationCtrls; ?></div>
  </div-->
      </div>
      <div>
        
        <input type="submit" name="submit" value="Shipment status update" class="btn btn-primary">
        </form>        
      </div>
      <?php
        if(isset($_POST['submit']))
    {
      $status = $_POST['status'];
      $id = $_GET['oid'];
      $st = mysqli_query($con,"UPDATE ORDER_DETAILS SET SHIPMENT_STATUS='$status' WHERE ORDER_ID='$id'");
      echo "<script> location.replace('manageorderpets.php') </script>";
     
    }
?> 
          
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
  <?php include "footer.php"; ?>
</body>
</html>