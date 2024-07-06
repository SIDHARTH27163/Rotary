
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Rotaract Club Dharamshala - Updates  | Project</title>
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
	<div id="wrapper">
    <?php $bid = $_REQUEST["id"]; ?>
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
            <h1>Add Project Month Details</h1>
          </div>          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Add Project month details</li>
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
                      $adate = date('Y-m-d H:i:s');
                      $pid=$bid;
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

                               $query_session = "SELECT * FROM rotractpmonth Where name= $aname";

                      $query_session_run = mysqli_query($connection,$query_session);

                      if (mysqli_num_rows($query_session_run) > 0) {

                      echo "<div class='alert alert-warning'>Month Already Added For this Year. please click on add Projects.</div>";
                       
                        }

                              

                      else
                      {
                      $location = "uploads/admin/Gallery/pupload/";

                      //renaming the file
                         $images= md5($images).'.'.$extension_check;
                         
                       // moving the file to specific folder
                       move_uploaded_file($filetmp,$location.$images);

                       


                       // inserting the data to database
                      $query="INSERT INTO rotractpmonth(pid,name,image,date,status) VALUES ('$pid','$aname','$images','$adate','$status')";
                      $query_run =mysqli_query($connection,$query);

                      if($query_run)
                        {
                          
                         

                          echo " <div class='alert alert-success mydiv'>Your New Project Month Details are Successfully Added.  Click On ADD PROJECTS BUTTON To ADD PROJECTS Details.</div>";
                        }
                        else
                        {
                          echo " <div class='alert alert-danger mydiv'><strong>Details not added</strong ></div>";
                          
                        }

                      }
                   } 
                      ?>
       <!-- Main content -->
              <section class="content">

                    <div class="card">
                      <div class="card-header bg-dark">
                        <h3 class="card-title  ">Upload-Images </h3>
                        <a href="rotractaddprojects.php"><input type="button" name="addp" class="float-right btn btn-primary" value="Add Projects"></a>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                      
                      
                                              <form action="" method="post" enctype="multipart/form-data" name="upload">
                                                 
                                                  <div class="form-group">
                                                      <label>Add month</label>
                                                      <select name="aname" class="form-control" required="true">
                                                      <option value="" disabled="" selected="">Select Month</option>
                                                      <option value="January" >January</option>
                                                      <option value="Feburary" >Feburary</option>
                                                      <option value="March" >March</option>
                                                      <option value="April" >April</option>
                                                      <option value="May" >May</option>
                                                      <option value="June" >June</option>
                                                      <option value="July" >July</option>
                                                      <option value="August" >August</option>
                                                      <option value="September" >September</option>
                                                      <option value="October" >October</option>
                                                      <option value="November" >November</option>
                                                      <option value="December" >December</option>
                                                    </select>
                                                  
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