

 <!DOCTYPE html>
<html>
<?php 
include './themepart/head-section.php';
 ?>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php 
 include './themepart/topmenu.php'; 
 include './themepart/sidebar.php';
 include 'security.php';
 ?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Gallery Information</h1>
          </div>          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Edit-> Gallery</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Gallery Information</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
         
              <?php 
              include'security.php';
              @session_start();
                     if(isset($_POST['edit_gallery']))
                     {
                     	$id = $_POST['edit_id'];
                     	$query = "SELECT * FROM gallery WHERE Id='$id'";
                     	$query_run = mysqli_query($connection,$query);
                     	foreach($query_run as $row)
                     	{
                     		?>

                     		<form action="gallerycode.php" method="POST" enctype="multipart/form-data">

                     			<input type="hidden" name="edit_id" value="<?php echo $row['Id'] ?>">
				            <div class="form-group">
				            <label> Title</label>
				          <input type="text" name="edit_title" class="form-control" value="<?php echo $row['Title'] ?>" placeholder="Enter Name">
				        </div>
				        <div class="form-group">
				         <label>Update Date</label>
				          <input type="datetime-local" name="edit_date" class="form-control" value="<?php echo $row['idate'] ?>">
				        </div>
				        <div class="form-group">
				        <label>Update Description</label>
				          <textarea name="edit_description" class="form-control" value="<?php echo $row['Description'] ?>" placeholder="Update Description" ></textarea> 
				        </div>
				        <div class="form-group">
				        <label> Update Image</label>
				          <input type="file" name ="image_file" id="Profile_image"value="<?php echo $row['image'] ?>" class="form-control">
				        </div>
				      <div class="modal-footer">
				        <a href="galleryview.php" class="btn btn-danger">Cancel</a>
				        <button type="Submit" name="update_gallery_info" class="btn btn-primary">Update</button>
				      </div>
      </form>

                     		<?php 

                     	}
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
		<?php 
 					include './themepart/footer.php';
 		?>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
	<?php 
 		include './themepart/script.php';
 		?>
<!-- jQuery -->

</body>
</html>