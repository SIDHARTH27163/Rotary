
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Rotary Club Dharamshala - Updates  |Rotract  Events Cover</title>
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
	 <script type="text/javascript">setTimeout(function() {
    $('.mydiv').fadeOut('slow');
}, 3000);</script>
</head>
<body>
   <?php $bid = $_REQUEST["id"]; ?>
    <?php
include"dbConfig/dbconfig.php";
$sql = "select * from rotract_session where id='$bid'";
$rs_result = mysqli_query ($connection,$sql);
?>
<?php
while ($row = mysqli_fetch_assoc($rs_result)) {
?>
<?php $bname=$row["r_session"]; ?>
<?php };?>
	<div id="wrapper">
    <?php
    include'./themepart/topmenu.php';
    include'./themepart/sidebar.php';

    ?>
            
            <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Rotract Events Cover</h1>
          </div>          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Add Rotract Events Cover</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
                
                      <?php
                      include "./dbConfig/dbconfig.php";

                      if(isset($_POST['submit']))
                      {
                      $aname = $_POST['aname'];
                      $status='process';
                      $images= $_FILES["upload"]['name'];
                      $filetmp = $_FILES["upload"]['tmp_name'];
                      //getting extension
                       $extension = explode('.',$images);
                       //checking extension
                       $extension_check= strtolower(end($extension));
                       // allowed extensions
                      $allowed_extensions = array("jpg","jpeg","png","gif");

                       
                      

                       if(!in_array($extension_check,$allowed_extensions))
                          {
                           echo " <div  class='alert alert-danger mydiv'><strong>ERROR</strong> - Invalid format. Only jpg / jpeg/ png /gif format allowed</div>";


                               }
                              

                      else
                      {
                      $location = "uploads/admin/Gallery/r_cover/";

                      //renaming the file
                         $images= md5($images).'.'.$extension_check;
                         
                       // moving the file to specific folder
                       move_uploaded_file($filetmp,$location.$images);

                       


                       // inserting the data to database
                      $query="INSERT INTO r_cover(sid,revent_name,revent_cover,status) VALUES ('$bname','$aname','$images','$status')";
                      $query_run =mysqli_query($connection,$query);

                      if($query_run)
                        {
                          
                         

                          echo " <div class='alert alert-success mydiv'>Your New Event Cover Is Successfully Added.</div>";
                        }
                        else
                        {
                          echo " <div class='alert alert-danger mydiv'><strong>Cover not added</strong ></div>";
                          
                        }

                      }
                   } 
                      ?>
       <!-- Main content -->
              <section class="content">

                    <div class="card">
                      <div class="card-header bg-dark">
                        <h3 class="card-title  ">Upload-Cover </h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                      
                      
                                              <form action="" method="post" enctype="multipart/form-data" name="upload">
                                                 
                                                  <div class="form-group">
                                                      <label>Cover Name or Title</label>
                                                      <input class="form-control" placeholder="Enter Title" name="aname" required>
                                                          <p class="help-block">Example "Sunset pics"</p>
                                                  
                                                  </div>
                                                 
                                                  <div class="form-group">
                                                      <label>Cover Image</label>
                                                      <input type="file" class="form-control" name="upload"  id="upload" required />
                          
                                                      <p class="help-block">Example "Recomended Image Size in pixel 400 X 300"</p>
                                                  </div>
                                                  
                                                  <button type="submit" class="btn btn-primary" name="submit">Submit Button</button>
                                                  <button type="reset" class="btn btn-default">Reset Button</button>
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