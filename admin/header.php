<?php

  include "connection.php";
  
  session_start();
  
  if(!isset($_SESSION['log']))
  {
    header("location:index.php");
  }
  
  else
  {
    $log = $_SESSION['log'];
    
    $sql = "SELECT * FROM LOGIN WHERE EMAIL_ID='$log'";
    $result = mysqli_query($con,$sql);
    $value = mysqli_fetch_array($result);
    
    $id = $value['LOGIN_ID'];
    $i = $value['PROFILE_PIC'];

    
    $qry = "SELECT * FROM ADMIN WHERE LOGIN_ID='$id'";
    $result1 = mysqli_query($con,$qry);
    $value1 = mysqli_fetch_array($result1);

    $n = $value1['NAME'];
    
    $user = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(LOGIN_ID) FROM LOGIN WHERE ROLE=3 "));
    $seller = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(LOGIN_ID) FROM LOGIN WHERE ROLE=2 AND ACTIVE=1"));
    $products = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(PRODUCT_ID) FROM PRODUCTS"));
    $pets = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(PET_ID) FROM PETS WHERE VERIFIED=1"));
    $medicine = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(MEDICINE_ID) FROM MEDICINE"));
    $order = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(ORDER_ID) FROM ORDER_DETAILS"));
    

    

  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Panel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="dashboard.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>P</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>Panel</span>
    </a>
    
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
           <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
      
              <img src="<?php echo $i; ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"> <?php echo $n; ?> </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo $i; ?>" class="img-circle" alt="User Image">

                <p>
                  
                  <small><?php echo $n; ?></small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-6 text-center">
                    <a href="changepass.php">Change Password</a>
                  </div>
                  <div class="col-xs-6 text-center">
                    <a href="editprofile.php">Edit Profile</a>
                  </div>
                  
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
               
                <div class="pull-left">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo $i; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $n; ?></p>
          </div>
      </div>
      <!-- search form -->
     
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="">
          <a href="dashboard.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
         
        </li>
       
       <!-- USER -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>ADMIN</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="addadmin.php"><i class="fa fa-circle-o"></i>Add Another Admin</a></li>
            <li><a href="manageadmin.php"><i class="fa fa-circle-o"></i>Manage Admin</a></li>
          </ul>
        </li>
        <!-- USER end  -->
        <!-- admin -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>USER</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!--li><a href="adduser.php"><i class="fa fa-circle-o"></i>Add User</a></li-->
            <li><a href="manageusers.php"><i class="fa fa-circle-o"></i>Manage User</a></li>
          </ul>
        </li>
        <!-- admin end -->
        <!-- seller-->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>SELLER</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!--li><a href="addseller.php"><i class="fa fa-circle-o"></i>Add Seller</a></li-->
            <li><a href="manageseller.php"><i class="fa fa-circle-o"></i>Manage Seller</a></li>
            <li><a href="verifiedseller.php"><i class="fa fa-circle-o"></i>Verified Seller</a></li>
          </ul>
        </li>
        <!--seller end-->
        <!-- product-->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>PRODUCTS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="manageproduct.php"><i class="fa fa-circle-o"></i>Manage Products</a></li>
          </ul>
        </li>
        <!-- product end -->
        <!-- pets -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>PETS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="managepets.php"><i class="fa fa-circle-o"></i>Manage Pets</a></li>
            <li><a href="verifiedpets.php"><i class="fa fa-circle-o"></i>Verified Pets</a></li>
           
          </ul>
        </li>
        <!-- pets end -->
        <!-- medicine -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>MEDICINE</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="managemedicine.php"><i class="fa fa-circle-o"></i>Manage Medicine</a></li>
          </ul>
        </li>
        <!-- medicine end -->





       </ul>

    </section>
    <!-- /.sidebar -->

  </aside>
  

