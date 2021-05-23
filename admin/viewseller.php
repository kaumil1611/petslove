<?php include "header.php"; ?>        
<?php
    include "connection.php";

   


  if(!isset($_SESSION['log']))
  {
    header("location:index.php");
  }
  
  else
  {
    if(isset($_GET['sid']))
    {

    $sid = $_GET['sid'];

    $v1 = mysqli_query($con,"SELECT * FROM LOGIN WHERE LOGIN_ID='$sid'");
    $get_data1 = mysqli_fetch_array($v1);
    $sid = $get_data1['LOGIN_ID'];
    $email = $get_data1['EMAIL_ID'];
    $phone = $get_data1['PHONE_NO'];
    $dp = $get_data1['PROFILE_PIC'];


    $v2 = mysqli_query($con,"SELECT * FROM SELLER WHERE LOGIN_ID='$sid'");
    $get_data2= mysqli_fetch_array($v2);
    $sname = $get_data2['NAME'];
    $shop_no = $get_data2['SHOP_NO'];
    $shop_name = $get_data2['SHOP_NAME'];
    $complex_name = $get_data2['COMPLEX_NAME'];
    $street_name = $get_data2['STREET'];
    $landmark = $get_data2['LANDMARK'];
    $city_name = $get_data2['CITY_NAME'];
    $state = $get_data2['STATE'];
    $pincode = $get_data2['PINCODE'];
    $shopl_no = $get_data2['SHOP_LICENCE_NO'];
  
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
        Seller Detail
        <small>Admin panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Seller Detail</li>
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
              <h3 class="box-title">Seller Detail</h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Seller Name</th>
                  <td><?php echo $sname; ?></td>
                </tr>
                <tr>
                  <th>Email</th>
                  <td><?php echo $email; ?></td>
                </tr>
                <tr>
                  <th>Phone no</th>
                  <td><?php echo $phone; ?></td>
                </tr>
                <tr>
                  <th>Shop Licence Number</th>
                  <td><?php echo $shopl_no; ?></td>
                </tr>
                <tr>
                  <th>Shop no.</th>
                  <td><?php echo $shop_no; ?></td>
                </tr>
                <tr>
                  <th>Shop Name</th>
                  <td><?php echo $shop_name; ?></td>
                </tr>
                <tr>
                  <th>Complex Name</th>
                  <td><?php echo $complex_name; ?></td>
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
                <tr>
                  <th>Profile Pic</th>
                  <td><img src="<?php echo $dp; ?>" height="50" width="50" border="1px" alt="profile pic"></img></td>
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