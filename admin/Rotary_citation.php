
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Rotary Club Dharamshala - Admin | RoTary Citation</title>
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
  <link rel="stylesheet" href="fancybox/jquery.fancybox.css">
  <script src="js/jquery.min.js"></script>

<!-- Fancybox JS library -->
<script src="fancybox/jquery.fancybox.js"></script>
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
   <?php
 include ('dbConfig/dbconfig.php');
     
      if (isset($_POST['Rcupload']))
      {
            $dateof_upload = $_POST['date_rc'];
            $title = $_POST['title'];
            $location="uploads/admin/Rotary_citation/";
            $filename=$_FILES["image_file"]['name'];
            $filetmp = $_FILES["image_file"]['tmp_name'];
            $status = 'process';
          



      
                   $query = "INSERT INTO rcdrc(image,title,uploaded_on,status)VALUES('$filename','$title','$dateof_upload','$status')";
                   $query_run = mysqli_query($connection,$query);
                   
                   
                   if($query_run)
                  {
                    

                        move_uploaded_file($filetmp,$location.$filename);
                         echo "<div class='alert alert-success mydiv'> Data inserted successfully.</div>"; 
                  }


                  else 
                  {
                        
                      echo "<div class='alert alert-danger     mydiv'> Data not inserted successfully.</div>";   
                  }
             
      }


     ?>
<!-- Modal -->
<div class="modal fade" id="AdminModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="AdminRegisteration">Add Rotary Citation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
            <div class="form-group">
            <label> Year Or Session</label>
          <input type="text" name="date_rc" required class="form-control">
        </div>
        <div class="form-group">
            <label> Title</label>
          <input type="text" name="title" class="form-control" placeholder="title" required>
        </div>
        <div class="form-group">
        <label> Upload Image</label>
          <input type="file" name ="image_file" id="Profile_image" class="form-control" required>
        </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="Submit" name="Rcupload" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Rotary Citation Data</h1>
          </div>
          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Rotary Citation Data</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Rotary Citation 
              <button class="btn btn-primary" data-toggle="modal" data-target="#AdminModal"> ADD Images </button> </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                     <?php
                                                         if(isset($_POST['delete']))
     {
      $id = $_POST['id'];
    
      $query = "DELETE FROM rcdrc WHERE id='$id'";

      $query_run= mysqli_query($connection,$query);
       
           }
    ?>
         
                      <?php
                      $Srno =1;
            include 'dbConfig/dbconfig.php';
            $query = "SELECT * FROM rcdrc";
            $query_run = mysqli_query($connection,$query);
            $location= "uploads/admin/Rotary_citation/";
            if(mysqli_num_rows($query_run)>0)
            
            {
                       
                        ?>
                        
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr no.</th>
                  <th>Session</th>
                  <th>Title</th>
                  <th>Images</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php
                while($row = mysqli_fetch_assoc($query_run))
                        {
                  ?>
                  <tr>
                    <td><?php echo $Srno++;?></td>
                  <td><?php echo $row['uploaded_on'] ?></td>
                  <td><?php echo $row['title'] ?></td>
                  <td><a href="<?php echo $location .$row['image'] ?>"><img src="<?php echo $location .$row['image'] ?>"  height="150px" width="200px"></a></td>
                  <td><form action="" onclick="return confirm('Are you sure you wish to delete this User ?');" method="POST"> 
                      <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                  
                  <button type ="submit" name="delete" class="btn btn-danger">Delete</button>
                </form></td>
                </tr>
                  <?php
                        }
                        ?>
                </tbody>
                  <tfoot>
                <tr>
                    <th>Sr. no.</th>
                  <th>Session</th>
                  <th>Title</th>
                  <th>Images</th>
                  <th>Delete</th>
                </tr>
                </tfoot>
              </table>

               <?php
            }

            else
          
             {
            echo ' No Record Found.';
             }
            ?>

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
    <strong>Copyright &copy; <?php echo date("Y")."-"; $date = date("Y"); $date+=1; echo $date ; ?> <a href="#">Rotary Club Dharamshala</a>.</strong> All rights

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
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>