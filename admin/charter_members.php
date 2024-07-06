
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Rotary Club Dharamshala - Admin | Charter members</title>
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
            <h1>Add Charter members</h1>
          </div>
          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Charter members</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">


          <div class="card">
            <div class="card-header bg-dark">
              <h3 class="card-title">Add Charter Members </h3>
              <a href="viewcm.php" class="float-right"><input type="button" class="btn btn-primary" name="button" value="View Charter's List"></a>
            </div>
            <!-- /.card-header -->

            <div class="card-body">
              <?php
                
              include'dbConfig/dbconfig.php';

              if(isset($_POST["import"]))
{

              
              
              $status='process';
              $description = $_POST['description'];
              $name =$_POST['name'];
              $file_name = $_FILES['pic']['name'];
              $file_tmp = $_FILES['pic']['tmp_name'];

              //getting extension
                       $extension = explode('.',$file_name);
                       //checking extension
                       $extension_check= strtolower(end($extension));
                       // allowed extensions
                      $allowed_extensions = array("jpg","jpeg","png","gif");

                       
                      

                       if(!in_array($extension_check,$allowed_extensions))
                          {
                           echo " <div  class='alert alert-danger mydiv'><strong>ERROR</strong> - Invalid format. Only jpg / jpeg/ png /gif format allowed</div>";


                               }
                               else{



                        $location = "uploads/admin/Gallery/Charter_members/";

                      //renaming the file
                         
                         
                       // moving the file to specific folder
                       move_uploaded_file($file_tmp,$location.$file_name);

            
  
      
      $query = "INSERT INTO charter_members(name,image,description,year,status) VALUES ('".$name."', '".$file_name ."','".$description."',NOW(),'".$status."')";
      $query_run = mysqli_query($connection,$query);
     
       if($query_run)
                        {
                          

                         echo " <div class='alert alert-success mydiv'><strong>Data added Succesfully click on Charters List</strong ></div>";
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
        <label> Name Of Charter Member</label>
          <input  type="text" name ="name"  class="form-control" required>
          <br>
          <p class="help-block"> Example : "John Wick"</p>
          
        </div>
         <div class="form-group">
        <label> Description</label>
          <textarea name="description" rows="" placeholder="Enter Description"  maxlength="10000" class="form-control" required ></textarea>
        <p class="help-block" style="font-weight:italic">Max 10000 Character Allowed.<br>   <span class="text-danger text-bold">   NOTE: Use spaces between words and also make new lines b/w paragraphs.</span> </p>
        <p class="help-block text-bold text-danger" style="font-weight:italic">Use Special notations <br>
         NOTE: use double  break tag using keyword br in arow brackets : for paragraphs spacing
          <br> 
              span tag : for bold/ highlight and color  of the text related to theme.


         </p>
          
        </div>
        <div class="form-group">
        <label> Upload C-Members's Image</label>
          <input  type="file" name ="pic"  class="form-control" required>
          <br>
          <p> Note: Format should be .jpg .jpeg .png .gif </p>
          
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
  <footer class="main-footer">s
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