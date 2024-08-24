<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Rotary Club Dharamshala - Admin | Header Edit</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
   <link rel="icon" type="image/gif/png" href="../img/title.png">
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
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Header information</h1>
          </div>          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Edit Header part</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
        <!-- Main content -->
    <section class="content">

          <div class="card">
            <div class="card-header bg-dark">
              <h3 class="card-title">Edit Contact  & Email</h3>

            </div>
            <!-- /.card-header -->

            <div class="card-body">
         
              <?php 
              include'dbConfig/dbconfig.php';
              
                     if(isset($_POST['edit_header']))
                     {
                     	$id = $_POST['bod_edit_id'];
                     	$query = "SELECT * FROM header_section WHERE Id='$id'";
                     	$query_run = mysqli_query($connection,$query);
                     	foreach($query_run as $row)
                     	{
                     		?>

                     		<form action="headercode" method="POST" enctype="multipart/form-data">

                     			<input type="hidden" name="bod_edit_id" value="<?php echo $row['Id'] ?>">
				            <div class="form-group">
                 <label> Phone 1</label>
                  <input type="text" name="edit_phone1" class="form-control" value="<?php echo $row['Phone1'] ?>" placeholder="Phone 1" pattern="[0-9]{10}" required>
                  <p class="help-block"> Example: 9876543210 only 10 digits </p>
                </div>
                    <div class="form-group">
                 <label> Phone 2</label>
                  <input type="text" name="edit_phone2" class="form-control" value="<?php echo $row['Phone2'] ?>" placeholder="Enter Phone 2" pattern="[0-9]{10}" required>
                  <p class="help-block"> Example: 9876543210 only 10 digits</p>
                </div>
				           
				        <div class="form-group">
				        <label> email</label>
				          <input type="email" name="edit_email" class="form-control" value="<?php echo $row['email'] ?>" placeholder="abc@email.com" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[a-z]{2,}$" required > 
				        </div>

                   <div class="form-group">
        <label> Address</label>
          <textarea name="edit_address" rows="" placeholder="Enter Address"  maxlength="10000" class="form-control" required ></textarea>
        <p class="help-block" style="font-weight:italic">Max 10000 Character Allowed.<br>   <span class="text-danger text-bold">   NOTE: Use spaces between words and also make new lines b/w paragraphs.</span> </p>
      
          
        </div>
                 <div class="form-group">
        <label> Meeting</label>
          <textarea name="edit_meeting" rows="" placeholder="Enter Meeting place"  maxlength="10000" class="form-control" required ></textarea>
        <p class="help-block" style="font-weight:italic">Max 10000 Character Allowed.<br>   <span class="text-danger text-bold">   NOTE: Use spaces between words and also make new lines b/w paragraphs.</span> </p>
      
          
        </div>
				       
				      <div class="modal-footer">
				        <a href="header.php" class="btn btn-danger">Cancel</a>
				        <button type="Submit" name="header_update" class="btn btn-primary">Update</button>
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