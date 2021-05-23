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
        
  if(isset($_GET['del']))
  {
    
    $sql1="DELETE FROM PRODUCTS WHERE PRODUCT_ID=".$_GET['del']."";
    $result=mysqli_query($con,$sql1);
    echo "<script> location.replace('manageproduct.php') </script>";
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
        Manage Products
        <small>Admin panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Manage Products</li>
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
              <h3 class="box-title">Manage Products</h3>

              
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Product Name</th>
          <th>Pet Category</th>
          <th>Company Name</th>
                  <th>Category</th>
                  <th>Action</th>
                </tr>
        
        <?php

          $seller = mysqli_query($con,"SELECT SELLER_ID FROM SELLER WHERE LOGIN_ID='$id'");
          $sid1 = mysqli_fetch_array($seller);
          $sid = $sid1['SELLER_ID'];


        
          $query="SELECT * FROM PRODUCTS WHERE SELLER_ID='$sid'" ;
      
          $result2 = mysqli_query($con,$query);
          $seq=1;
          while($value2 = mysqli_fetch_array($result2))
          {
        ?>
                <tr>
                  <td><?php echo $seq;?></td>
                  <td><?php echo $value2['PRODUCT_NAME'];?></td>
                  <td><?php echo $value2['PET_CATEGORY'];?></td>
          <td><?php echo $value2['COMPANY'];?></td>
                  <td><?php echo $value2['CATEGORY']; ?></td>
          
          
          <td> 
          <a class="btn btn-info btn-xs" href="orderproduct.php?pid=<?php echo $value2['PRODUCT_ID'];?> " 
          onclick="return confirm('sure to view detail?');">VIEW</a> &nbsp;&nbsp;
          <a class="btn btn-success btn-xs" href="editproduct.php?pid=<?php echo $value2['PRODUCT_ID'];?> " 
          onclick="return confirm('sure to edit?');">EDIT</a> &nbsp;&nbsp;
          <a class="btn btn-danger btn-xs" href="?del=<?php echo $value2['PRODUCT_ID'];?>" 
          onclick="return confirm('sure to delete?');">DELETE</a>
          </td>
        </tr>
        
        <?php
          $seq++;
          }
        
        ?>

              </table>
            </div>
            <!-- /.box-body -->
      
      <?php  
        $queryp=mysqli_query($con,"SELECT COUNT(LOGIN_ID) FROM ADMIN WHERE LOGIN_ID != '$id'");
  $rowp = mysqli_fetch_row($queryp);
      
        $rowsp = $rowp[0];
  
  $page_rows = 2;

  $last = ceil($rowsp/$page_rows);

  if($last < 1){
    $last = 1;
  }

  $pagenum = 1;

  if(isset($_GET['pn'])){
    $pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
  }

  if ($pagenum < 1) { 
    $pagenum = 1; 
  } 
  else if ($pagenum > $last) { 
    $pagenum = $last; 
  }

  $limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
  
  $nquery=mysqli_query($con,"SELECT COUNT(LOGIN_ID) FROM ADMIN WHERE LOGIN_ID != '$id' $limit");

  $paginationCtrls = '';

  if($last != 1){
    
  if ($pagenum > 1) {
        $previous = $pagenum - 1;
    $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'" class="btn btn-default">Previous</a> &nbsp; &nbsp; ';
    
    for($i = $pagenum-4; $i < $pagenum; $i++){
      if($i > 0){
            $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn btn-default">'.$i.'</a> &nbsp; ';
      }
      }
    }
  
  $paginationCtrls .= ''.$pagenum.' &nbsp; ';
  
  for($i = $pagenum+1; $i <= $last; $i++){
    $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn btn-default">'.$i.'</a> &nbsp; ';
    if($i >= $pagenum+4){
      break;
    }
  }

    if ($pagenum != $last) {
        $next = $pagenum + 1;
        $paginationCtrls .= ' &nbsp; &nbsp; <a href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'" class="btn btn-default">Next</a> ';
    }
  }
      
      
        /*$sqlp = "SELECT COUNT(login_id) FROM tbl_detail WHERE login_id != '$id'";  
        $rs_result = mysqli_query($con, $sqlp);  
        $rowp = mysqli_fetch_row($rs_result);  
        $total_records = $rowp[0];  
        $total_pages = ceil($total_records / $limit);  
        $pagLink = "<div class='pagination'>";  
        for ($i=1; $i<=$total_pages; $i++) {  
               $pagLink .= "<a href='index.php?page=".$i."'>".$i."</a>";  
        };  
        echo $pagLink . "</div>"; */ 
      ?>
      
          </div>
          <!-- /.box -->
      <div id="pagination_controls"><?php echo $paginationCtrls; ?></div>
  </div>
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