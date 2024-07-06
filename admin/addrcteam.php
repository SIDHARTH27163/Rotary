
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> ADD Rotracr Team Members | Rotary Club Of Dharamshala</title>
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
                }, 5000);</script>
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
            <h1>Add Rotract Team Members</h1>
          </div>
          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">RTM</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <?php $dmbid = $_REQUEST["id"]; ?>
      <?php
include"dbConfig/dbconfig.php";
$sql = "select * from rc_session where id='$dmbid'";
$rs_result = mysqli_query ($connection,$sql);
?>
<?php
while ($row = mysqli_fetch_assoc($rs_result)) {
?>
<?php $dmb_session=$row["rcsession"]; ?>
<?php };?>

          <div class="card">
            <div class="card-header bg-dark">
              <h3 class="card-title">Add Rotract Team Members </h3>
              <a href="view_rcteam.php" class="float-right"><input type="submit" name="view_designated" value="View Rotract Team Members" class="btn btn-primary"></a>
            </div>
            <!-- /.card-header -->

            <div class="card-body">
              <?php
              include'dbConfig/dbconfig.php';

              if(isset($_POST["Add"]))
{

             $dm_id=$dmbid;
              $dm_session=$dmb_session;
              $status='process';
              $name= $_POST['name'];
              $designation = $_POST['designation'];
              

              $file_name = $_FILES['desig_image']['name'];
              $file_tmp = $_FILES['desig_image']['tmp_name'];

              $extension = explode('.',$file_name);
                       //checking extension
                       $extension_check= strtolower(end($extension));
                       // allowed extensions
                      $allowed_extensions = array("jpg","jpeg","png","gif");

                       if(!in_array($extension_check,$allowed_extensions))
                          {
                           echo " <div  class='alert alert-danger mydiv'><strong>ERROR</strong> - Invalid format. Only jpg / jpeg / png format allowed</div>";


                               }

                               else{

  
      
      $query = "INSERT INTO rteam(rcid,rc_session,name,designation,image,date,status) VALUES ('".$dm_id."','".$dm_session."','".$name."', '".$designation."', '".$file_name."', NOW(),'".$status."')";
      $query_run = mysqli_query($connection,$query);

      if($query_run){


      $location = "uploads/admin/Gallery/rteam/";

                         
                       // moving the file to specific folder
                       move_uploaded_file($file_tmp,$location.$file_name);

                        echo " <div class='alert alert-success mydiv'>Rotract Team member  $name Successfully Added.</div>";

    }
    else{
     
     echo " <div class='alert alert-danger mydiv'><strong>Rotract Team Member not added!</strong ></div>";

  }
    }
     
     
      }

?>
              

           <form action="" method="POST"  enctype="multipart/form-data"  >
            <div class="modal-body">

        <div class="form-group">
        <label> NAME OF THE ROTRACT TEAM MEMBER </label>
        <input type="text" name="name" placeholder="Enter Name" class="form-control" required>
        <p class="help-block" style="font-weight:italic">Example : "John Wick"</p>
          
        </div>
        <div class="form-group">
        <label> DESIGNATION </label>
        <input type="text" name="designation" placeholder="Enter Designation" class="form-control" required>
        <p class="help-block" style="font-weight:italic">Example : "President"</p>
          
        </div>
       

        <div class="form-group">
        <label>IMAGE OF THE Rotract Team MEMBER</label>
       <input type="file" name="desig_image" id="desig_image" class="form-control" required>    
        </div>
      
      
      </div>
      <div class="modal-footer">
        <input type="Submit" name="Add" value="Submit" class="btn btn-primary" >
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
 <?php
 include'themepart/footer.php';
 ?>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<?php 
include 'themepart/script.php';?>

<!-- page script -->
</body>
</html>