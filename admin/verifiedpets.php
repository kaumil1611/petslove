<?php include "header.php"; ?>        
<?php
        
  if(isset($_GET['del']))
  {
    
    $sql1="DELETE FROM PETS WHERE PET_ID=".$_GET['del']."";
    $result=mysqli_query($con,$sql1);
    echo "<script> location.replace('managepets.php') </script>";
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
        Verified Pets
        <small>Admin panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Verified Pets</li>
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
              <h3 class="box-title">Verified Pets</h3>

              
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Breed</th>
                  <th>Seller Name</th>
                  <th>Registration ID</th>
                  <th>Pet_category</th>
                  <th>Action</th>
                </tr>
        
        <?php
        
          $query="SELECT PETS.PET_ID,PETS.BREED,PETS.REGISTRATION_ID,PETS.PET_CATEGORY,SELLER.NAME FROM PETS INNER JOIN SELLER ON PETS.SELLER_ID=SELLER.SELLER_ID WHERE PETS.VERIFIED=1";
          
          $result2 = mysqli_query($con,$query);
          $seq=1;
          while($value2 = mysqli_fetch_array($result2))
          {
        ?>
                <tr>
                  <td><?php echo $seq;?></td>
                  <td><?php echo $value2['BREED'];?></td>
                  <td><?php echo $value2['NAME'];?></td>
          <td><?php echo $value2['REGISTRATION_ID'];?></td>
                  <td><?php echo $value2['PET_CATEGORY']; ?></td>
          
          
          <td> 
          <a class="btn btn-info btn-xs" href="viewpet.php?petid=<?php echo $value2['PET_ID'];?> " 
          onclick="return confirm('sure to view detail?');">VIEW</a> &nbsp;&nbsp;
          <a class="btn btn-danger btn-xs" href="?del=<?php echo $value2['PET_ID'];?>" 
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