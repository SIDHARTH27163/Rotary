
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Rotary Club Dharamshala - Admin | CMSRID</title>
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
            <h1>Add CMSRID</h1>
          </div>
          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">CMSRID</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <?php $cdid = $_REQUEST["ids"]; ?>
      <?php
include"dbConfig/dbconfig.php";
$sql = "select * from cmsrid where cd_id='$cdid'";
$rs_result = mysqli_query ($connection,$sql);
?>
<?php
while ($row = mysqli_fetch_assoc($rs_result)) {
?>
<?php $cd_session=$row["cd_session"]; ?>
<?php };?>

          <div class="card">
            <div class="card-header bg-dark">
              <h3 class="card-title">Add BOARD OF DIRECTORS </h3>
              <a href="viewcmsrid.php" class="float-right"><input type="button" name="vcms" class="btn btn-primary" value="View CMSRID"></a>
            </div>
            <!-- /.card-header -->

            <div class="card-body">
              <?php
              include'dbConfig/dbconfig.php';

              if(isset($_POST["import"]))
{

  $cd_id=$cdid;
              $cod_session=$cd_session;
              $cod_name = $_POST['name'];
              $cod_served = $_POST['served'];
              $status='process';
              $filename = $_FILES['pic']['name'];
              $filetmp = $_FILES['pic']['tmp_name'];

              //getting extension
                       $extension = explode('.',$filename);
                       //checking extension
                       $extension_check= strtolower(end($extension));
                       // allowed extensions
                      $allowed_extensions = array("jpg","jpeg","png","gif");

                       
                      

                       if(!in_array($extension_check,$allowed_extensions))
                          {
                           echo " <div  class='alert alert-danger mydiv'><strong>ERROR</strong> - Invalid format. Only jpg / jpeg/ png /gif format allowed</div>";


                               }
                               else{

                                $location = "uploads/admin/Gallery/cmsrid/";

                      //renaming the file
                         
                         
                       // moving the file to specific folder
                       move_uploaded_file($filetmp,$location.$filename);

            
  
      
      $query = "INSERT INTO cmsridadd(cd_id,cod_session,name,served,image,date,status) VALUES ('".$cd_id."', '".$cod_session ."','".$cod_name."','".$cod_served."','".$filename."',NOW(),'".$status."')";
      $query_run = mysqli_query($connection,$query);
     
       if($query_run)
                        {
                          

                         echo " <div class='alert alert-success mydiv'><strong>Data added Succesfully click on CMSRID LIST</strong ></div>";
                        }
                        else
                        {
                          echo " <div class='alert alert-danger mydiv'><strong>Data not added!</strong ></div>";
                          
                        }
                             }



}  
?>
              

           <form action="" method="POST"  enctype="multipart/form-data"  >
            <div class="modal-body">

        <div class="form-group">
        <label>  Name Of The Club Member</label>
          <input  type="text" name ="name"  class="form-control" required>
          <p class="help-block">Example : "Dr. John Wick"</p>
          
        </div>
        <div class="form-group">
        <label> Club Member Served as:</label>
          <input  type="text" name ="served"  class="form-control" required>
          <p class="help-block">Example : "Dist Gov etc."</p>
          
        </div>

        <div class="form-group">
        <label> Club Member Image</label>
          <input  type="file" name ="pic"  class="form-control" required>
          
        </div>

      
      </div>
      <div class="modal-footer">
        <input type="Submit" name="import" value="Submit" class="btn btn-primary" >
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
include 'themepart/script.php';
?>


<!-- page script -->
</body>
</html>