
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
            <h1>Edit Board Of Directors Information</h1>
          </div>          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Edit BOD</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Edit BOD Info</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
         
              <?php 
              include'security.php';
              @session_start();
                     if(isset($_POST['bod_edit_data']))
                     {
                     	$id = $_POST['bod_edit_id'];
                     	$query = "SELECT * FROM boardofdirec WHERE Id='$id'";
                     	$query_run = mysqli_query($connection,$query);
                     	foreach($query_run as $row)
                     	{
                     		?>

                     		<form action="bodcode.php" method="POST" enctype="multipart/form-data">

                     			<input type="hidden" name="bod_edit_id" value="<?php echo $row['Id'] ?>">
				            <div class="form-group">
                 <label> designation</label>
                  <input type="text" name="bod_edit_designation" class="form-control" value="<?php echo $row['designation'] ?>" placeholder="Designation" required>
                </div>
                    <div class="form-group">
                 <label> name</label>
                  <input type="text" name="bod_edit_name" class="form-control" value="<?php echo $row['name'] ?>" placeholder="Enter name" required>
                </div>
				           
				        <div class="form-group">
				        <label> Phone</label>
				          <input type="Phone" name="bod_edit_phone" class="form-control" value="<?php echo $row['contact'] ?>" placeholder="Mobile no." required > 
				        </div>
				       
				      <div class="modal-footer">
				        <a href="table.php" class="btn btn-danger">Cancel</a>
				        <button type="Submit" name="bod_edit_update" class="btn btn-primary">Update</button>
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