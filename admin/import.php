<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Rotary Club Dharamshala - Admin | Board_of_Directors</title>
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
            <h1>Add Board Of Directors</h1>
          </div>
          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Board of Directors</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

          <div class="card">
            <div class="card-header bg-dark">
              <h3 class="card-title">Add BOARD OF DIRECTORS </h3>
            </div>
            <!-- /.card-header -->

            <div class="card-body">
              <?php
              include'dbConfig/dbconfig.php';

              if(isset($_POST["import"]))
{

 
             

  $file = $_FILES['file_import']['name'];

 $extension = explode(".",$file); 

 $extension_check= strtolower(end($extension));

 $allowed_extension = array("xls", "xlsx", "csv"); //allowed extension

 if(in_array($extension_check, $allowed_extension)) //check selected file extension is present in allowed extension array
 {
  $file_tmp = $_FILES["file_import"]["tmp_name"]; // getting temporary source of excel file

  include("PhpExcel/Classes/PHPExcel/IOFactory.php"); // Add PHPExcel Library in this code

  $objPHPExcel = PHPExcel_IOFactory::load($file_tmp); // create object of PHPExcel library by using load() method and in load method define path of selected file

  foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
  {
   $highestRow = $worksheet->getHighestRow();
   for($row=1; $row<=$highestRow; $row++)
   {
    $name = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
    $id= mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
    $phone = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(2, $row)->getValue());
    $address = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(3, $row)->getValue());
    $classification = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(4, $row)->getValue());
    $dob = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(5, $row)->getValue());
    $jyear = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(6, $row)->getValue());
    $spouse_name = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(7, $row)->getValue());
    $spousedob = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(8, $row)->getValue());
    $waday = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(9, $row)->getValue());
    $bdg = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(10, $row)->getValue());

    if(!empty($name)) // if none of the data are empty
    {
      
      $query = "INSERT INTO members(name,id,phone,address,classification,dob,jyear,spouse_name,spousedob,waday,bdg) VALUES ('".$name."','".$id."','".$phone."', '".$address."', '".$classification."','".$dob."','".$jyear."', '".$spouse_name."', '".$spousedob."', '".$waday."' , '".$bdg."')";
      $query_run = mysqli_query($connection,$query);
     
      if($query_run){
      $message = '<div class="alert alert-success">The inserted Successfully! | <a href="viewbod.php"> View list of Board Directors</a></div>';
    }

      
    }
   }
  } 
  $target_dir = "uploads/admin/Documents/ExcelFiles/"; //file upload folder
  $target_file = $target_dir .time().basename($_FILES["file_import"]["name"]); // target file to be uploaded

  //upload the file
  if (move_uploaded_file($_FILES["file_import"]["tmp_name"], $target_file)) {
       $fmessage= "<div class='alert alert-success'>The file  has been uploaded Successfully!</div><br>";
    } else {
       $fmessage= '<div class="alert alert-danger">Sorry, there was an error uploading your file!</div><br>';
    }

 }
 else
 {
  $message = '<div class="alert alert-danger">Invalid File</div>'; //if non excel file then
 }
 echo $message;
 echo @$fmessage;
}
?>
              

           <form action="" method="POST" id="import_excel" enctype="multipart/form-data"  >
            <div class="modal-body">

        <div class="form-group">
        <label> Upload excel file</label>
          <input  type="file" name ="file_import"  class="form-control" required>
          <br>
          <p> Note: Format should be xlsx or csv or related to excel sheet </p>
          <p> Format of Table columns should be : <table class="table table-bordered bg-dark"><tr>
            <th>Designation</th>
            <th>Name</th>
            <th>Phone/Mobile</th>
          </tr></table></p>
        </div>
      
      </div>
      <div class="modal-footer">
        <input type="Submit" name="import" value="Import" class="btn btn-primary" >
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