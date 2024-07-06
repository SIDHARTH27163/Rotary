
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Rotary Club Dharamshala - Admin |Add Contributors list</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/gif/png" href="../img/title.png">

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
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php 
 include './themepart/topmenu.php'; 
 include './themepart/sidebar.php'; 
 ?>
 



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   <!-- Button trigger modal -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Contributors</h1>
          </div>
          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">CBL</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <?php $bid = $_REQUEST["id"]; ?>
      <?php

include"dbConfig/dbconfig.php";
$sql = "select * from com_list where id='$bid'";
$rs_result = mysqli_query ($connection,$sql);
?>
<?php
while ($row = mysqli_fetch_assoc($rs_result)) {
?>
<?php
$cid = $row["session"];

$tid = $row["id"];
$cttid = $row['yid'];
$listname = $row['listname'];

 
?>
<?php
 };?>

          <div class="card">
            <div class="card-header bg-dark">
              <h3 class="card-title">Add Contributors </h3>
            </div>
            <!-- /.card-header -->

            <div class="card-body">
         <?php
             $ctid = $tid;
             $ccid = $cid;
             $cttid1 = $cttid;
             $listname1 = $listname;

             if(isset($_POST['submit'])){
             $name = mysqli_real_escape_string($connection,$_POST['ccname']);
             $vcname = mysqli_real_escape_string($connection,$_POST['vcname']);
             $mcname = mysqli_real_escape_string($connection,$_POST['mcname']);
                      $status = "process";

                      $query_session = "SELECT * FROM com_mem Where listid='$ctid'";

                      $query_session_run = mysqli_query($connection,$query_session);

                      if (mysqli_num_rows($query_session_run) > 0) {

                      echo "<div class='alert alert-warning mydiv'>Chair Details Already Entered .</div>";
                       
                        }
                        else{

                      $query = "INSERT INTO com_mem(yid,listid,listname,session,cchair,vchair,cmm,status)VALUES('$cttid1','$ctid','$listname1','$ccid','$name','$vcname','$mcname','$status')";
                      $query_run = mysqli_query($connection,$query);

                      if($query_run)
                      {

                        echo"<div class='alert alert-success mydiv'>Data inserted successfully.</div> ";
                      }
                      else
                      {
                        echo"<div class='alert alert-danger mydiv'>Data couldnot be inserted.</div> ";
                      }
                    }

           }
             

         ?>
              

           <form action="" method="POST" >
            <div class="modal-body">

        <div class="form-group">
        <label>Commettie Chair</label>
          <input  type="text" name ="ccname"  class="form-control" placeholder="Eter the Chairman Name" required>
          <p class="help-block"> Example: "Rtn. Ram"</p>
          
        </div>
        <div class="form-group">
        <label>Vice Chair</label>
          <input  type="text" name ="vcname"  class="form-control" placeholder="Eter the Vice Chairman name" required>
          <p class="help-block"> Example: "Rtn. Ram"</p>
          
        </div>
        <div class="form-group">
        <label>Commettie Members</label>
          <input  type="text" name ="mcname"  class="form-control" placeholder="Eter the Member's Name" required>
          <p class="help-block"> Example: "Rtn. Ram"</p>
          
        </div>
         
      
      
      </div>
      <div class="modal-footer">
        <input type="Submit" name="submit" value="Submit" class="btn btn-primary" >
      </div>
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
  <footer class="main-footer">
    <strong>Copyright &copy; echo "date(Y)";" <a href="#">Rotary Club Dharamshala</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>


<!-- page script -->
</body>
</html>