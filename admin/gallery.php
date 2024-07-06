
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Rotary Club Dharamshala - Updates  | Gallery</title>
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
<body>
	<div class="wrapper">
  <!-- Navbar -->
  <?php 
  // include'security.php';
 include './themepart/topmenu.php'; 
 include './themepart/sidebar.php';
 // include 'security.php';
include 'dbConfig/dbconfig.php';
 ?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Gallery</h1>
          </div>          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Galllery</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title  ">Upload-Images </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
         
                     		<form action="gallerycode.php" method="POST" enctype="multipart/form-data">
				            <div class="form-group">
				            <label> Title</label>
				          <input type="text" name="title" class="form-control" value="" placeholder="Image Title" required>
				        </div>
				        <div class="form-group">
				        <label> Upload Image</label>
				          <input type="file" name ="image_file" id="Profile_image"value="" class="form-control" required>
				        </div>
				        <label> Description</label>
				        <div class="form-group">
				         
				          <textarea rows="5" class="form-control" name="Description" placeholder="Description about image." required></textarea>
				       </div>
				      <div class="modal-footer">
				        <a href="table.php" class="btn btn-danger">Cancel</a>
				        <button type="Submit" name="upload_gallery" class="btn btn-primary">Upload</button>
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