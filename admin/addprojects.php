
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Rotary Club Dharamshala -Add Projects  | Projects</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">setTimeout(function() {
    $('.mydiv').fadeOut('slow');
}, 3000);</script>
	
</head>
<body>
	<div id="wrapper">
    <?php
    include'./themepart/topmenu.php';
    include'./themepart/sidebar.php';

    ?>
            
            <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
     <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Projects</h1>
          </div>          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Project Month Selector</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
<?php
    
    if(isset($_POST['submit']))
{
$ename = $_POST['gname'];
}
?>
                    <div class="card">
                      <div class="card-header bg-dark" >
                        <h3 class="card-title   ">Select Project Month </h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">

                         <form action="pmlink.php" method="post" enctype="multipart/form-data" name="upload">
                                       
                          <div class="form-group">
                          <label>Select Month</label>
                           <?php
                       include "dbConfig/dbconfig.php";
                       $sql = "select * from pmonth where status='process' order by pid desc";
                       $rs_result = mysqli_query ($connection,$sql);
                      echo "<select class='form-control' name='gname'>";
                      while ($row = mysqli_fetch_assoc($rs_result)) 
                      {
                      echo "<option value=$row[pid]>$row[name]    $row[date]</option>";
                                       
                               };
                    echo "</select>";
                    
                    ?>
                                        </div>
                                                                                
                                        <button type="submit" class="btn btn-primary" name="submit">Go Next</button>
                                        
                                    </form>



                         </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </section>
              <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
              <?php 
                    include './themepart/footer.php';
              ?>
            <!-- /.control-sidebar -->
          </div>
          <!-- ./wrapper -->
            <?php 
              include './themepart/script.php';
              ?>

</body>
</html>
                