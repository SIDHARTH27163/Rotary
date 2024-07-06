
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Rotary Club Dharamshala - Admin | DataTables</title>
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
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php 
  include'dbConfig/dbconfig.php';
 include './themepart/topmenu.php'; 
 include './themepart/sidebar.php'; 
 ?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Gallery Edit/View</h1>
          </div>
          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Gallery</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <?php 
            @session_start();
                 if(isset ($_SESSION ['success']) && ($_SESSION['success']!='')){
                  echo '<h2 class="bg-primary text-white">'.$_SESSION['success'].'</h2>';
                  unset ($_SESSION['success']);
                 }
                 
                       
                 

                 if(isset ($_SESSION ['success']) && ($_SESSION['success']!=''))
                 {
                       echo '<h2 class="bg-danger text-white">'.$_SESSION['success'].'</h2>';
                       unset ($_SESSION['success']);
                 }
            ?>
            <?php
            include 'dbConfig/dbconfig.php';
            $query = "SELECT * FROM gallery";
            $query_run = mysqli_query($connection,$query);
            $location= "uploads/admin/Gallery/";
            
            if(mysqli_num_rows($query_run)>0)
            
            {
                       
                        ?>
                        
              <table id="AdminData" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Title</th>
                  <th>Images</th>
                  <th>Description</th>
                  <th>Date</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php
                while($row = mysqli_fetch_assoc($query_run))
                        {
                  ?>
                  <tr>
                  <td><?php echo $row['Id'] ?></td>
                  <td><?php echo $row['Title'] ?></td>
                  <td><img src="<?php echo $location .$row['image'] ?>" class="img-circle elevation-2" height="150px" width="150px"></td>
                  <td><?php echo $row['Description'] ?></td>
                  <td><?php echo $row['idate'] ?></td>
                  
                  <td>
                    <form action="edit_gallery.php" method="POST">
                      <input type="hidden" name="edit_id" value="<?php echo $row['Id'] ?>">
                    <button type ="submit" name="edit_gallery" class="btn btn-success">Edit</button>
                    </form>
                  </td>
                  <td>
                  <form action="gallerycode.php" onclick="return confirm('Are you sure you wish to delete this Information ?');" method="POST"> 
                      <input type="hidden" name="delete_id" value="<?php echo $row['Id'] ?>">
                  
                  <button type ="submit" name="delete_data" class="btn btn-danger">Delete</button>
                </form></td>

                </tr>
                  <?php
                        }
                        ?>
                </tbody>
              <tfoot>
                <tr>
                <th>Id</th>
                  <th>Title</th>
                  <th>Images</th>
                  <th>Description</th>
                  <th>Date</th>
                  <th>Edit</th>
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
    <strong>Copyright &copy; 2020 <a href="#">Rotary Club Dharamshala</a>.</strong> All rights
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