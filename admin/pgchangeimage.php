
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Project Details Image Edit | Rotary Club Dharamshala</title>
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
                }, 5000);</script>
    
</head>
<body>
    <div id="wrapper">
    <?php
    include'./themepart/topmenu.php';
    include'./themepart/sidebar.php';

    ?>
    <?php 
$mykey1=$_REQUEST['key0'];
$asid2=$_REQUEST['cid'];
?> 


  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Project Detials : Image Updater</h1>
          </div>          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">RCD : Projects Image Updater</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<?php




if(isset($_POST['submit']))
     {
      $edit_images = $_FILES["upload"]['name'];
      $location= "uploads/admin/Gallery/pgupload/";
      $filetmp = $_FILES["upload"]['tmp_name'];
      $extension = explode('.',$edit_images);

                       //checking extension
                       $extension_check= strtolower(end($extension));
                       // allowed extensions
                      $allowed_extensions = array("jpg","jpeg","png","gif");
                      

                       if(!in_array($extension_check,$allowed_extensions))
                          {
                           echo " <div class='alert alert-danger mydiv'><strong>ERROR</strong> - Invalid format. Only jpg / jpeg/ png  format allowed</div>";
                          
                               }

    include "dbConfig/dbconfig.php";


   $query= "UPDATE projectdet SET gimages='$edit_images' WHERE pdid = '$mykey1'";


      $query_run= mysqli_query($connection,$query);
      
       
            if($query_run)
      {
         move_uploaded_file($filetmp,$location.$edit_images);

                        echo "<script>location.href='viewprojectdet.php?ids=$asid2'</script>";
      }
     
    }

    
?>
            
           <!-- Main content -->
              <section class="content">

                    <div class="card">


                      <div class="card-header bg-dark">
                        <h3 class="card-title">Fill This Form To Gallery Image </h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                                    <form action="#" method="post" enctype="multipart/form-data" name="upload">
                                       
                                      <div class="form-group">
                                            <label>Update Image</label>
                                            <input type="file" name="upload"  id="upload"/>
                
                                            <p class="help-block">Example "Recomended Image Size in pixel 400 X 300"</p>
                                        </div>
                                       
                                       
                                        
                                        <button type="submit" class="btn btn-primary" name="submit">Update</button>
                                        
                                    </form>
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