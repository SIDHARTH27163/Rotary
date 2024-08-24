
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Rotary Club Dharamshala - Admin | Theme of the year</title>
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
   <!-- Button trigger modal -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Theme</h1>
          </div>
          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Theme Of The Year</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">


          <div class="card">
            <div class="card-header bg-dark">
              <h3 class="card-title">Add THEME OF THE YEAR </h3>
              <a href = "viewtheme.php" class="float-right"><input type="Submit" name="import" value="View Themes" class="btn btn-primary" ></a>
            </div>
            <!-- /.card-header -->

            <div class="card-body">
              <?php
              include'dbConfig/dbconfig.php';

              if(isset($_POST["import"]))
{


              $status='process';
              $name = mysqli_real_escape_string($connection,$_POST["name"]);
              $t_session = mysqli_real_escape_string($connection,$_POST['theme_session']);

  $file = $_FILES['file_import']['name'];


 $extension = explode(".",$file); 

 $extension_check= strtolower(end($extension));

 $allowed_extension = array("jpeg", "jpg", "gif", "mp4" , "png" , "wmv" , "m4v" , "flv"); //allowed extension

   if(!in_array($extension_check,$allowed_extension))
                          {
                           echo " <div  class='alert alert-danger mydiv'><strong>ERROR</strong> - jpeg / jpg / gif / mp4 /png / wmv / m4v / flv / formats allowed</div>";


                               }
 


  

    else
        {
      
      $query = "INSERT INTO add_theme(theme_session,name,images,date,status) VALUES ('".$t_session."','".$name."', '".$file."',NOW(),'".$status."')";
      $query_run = mysqli_query($connection,$query);
     
      if($query_run){
      $message = '<div class="alert alert-success mydiv">The inserted Successfully!</div>';

      $target_dir = "uploads/admin/Gallery/theme_of_the_year/"; //file upload folder
  $target_file = $target_dir.basename($_FILES["file_import"]["name"]); // target file to be uploaded

  //upload the file
  if (move_uploaded_file($_FILES["file_import"]["tmp_name"], $target_file)) {
       $fmessage= "<div class='alert alert-success mydiv'>The file  has been uploaded Successfully!</div><br>";
    } else {
       $fmessage= '<div class="alert alert-danger mydiv">Sorry, there was an error uploading your file!</div><br>';
    }
        }
  

 echo $message;
 echo @$fmessage;
}
}
?>
              

           <form action="" method="POST" id="import_excel" enctype="multipart/form-data"  >
            <div class="modal-body">

              <div class="form-group">
              <label>Theme (Year) </label>
              <input class="form-control" placeholder="Enter the year" name="theme_session" pattern ="[0-9]{4}-[0-9]{2}" required>
              <p class="help-block">Example: "2020-21"</p>
                                                  
              </div>

       <div class="form-group">
        <label> Title of the image</label>
          <input  type="text" name ="name"  class="form-control" placeholder="Enter Title" required>
        </div>

        <div class="form-group">
        <label> Upload Theme File</label>
          <input  type="file" name ="file_import"  class="form-control" required>
          <p class="help-block">Example "Recomended Image Size in pixel 400 X 300 or greater"</p>


        </div>
      
      </div>
      <div class="modal-footer">
        <input type="Submit" name="import" value="Upload" class="btn btn-primary" >
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
  include 'themepart/footer.php';
  ?>

 
  <!-- /.control-sidebar -->
</div>
<?
include'themepart/script.php';
?>

<!-- page script -->
</body>
</html>