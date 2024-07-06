
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Latest News  </title>
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
            <h1>Add Upcoming Events </h1>
          </div>          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Add Latest News</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
                
                      <?php
                      include "./dbConfig/dbconfig.php";

                      if(isset($_POST['submit']))
                      {
                           $title = $_POST['aname'];
                           $edate = $_POST['edate'];
                           $eloc = $_POST['eloc'];
                           $date = date('d-m-y');
                           $status='process';
                      // inserting the data to database
                    
                          
                           $query="INSERT INTO rotary_events(status,title,e_date,e_loc , created_at) VALUES ('$status','$title','$edate','$eloc','$date')";
                      $query_run =mysqli_query($connection,$query);
                          if($query_run)
                        {
                          
                         

                          echo " <div class='alert alert-success mydiv'>Your Event  Successfully Added. Go For Step 2.</div>";
                        }
                        else
                        {
                          echo " <div class='alert alert-danger mydiv'><strong>Event Not entered.</strong ></div>";
                          
                        }
                      
                   } 
                      ?>
       <!-- Main content -->
              <section class="content">

                    <div class="card">
                      <div class="card-header bg-dark">
                        <h3 class="card-title  ">Add Upcoming Events </h3>
                        <a href="view_rotary_events.php" class="float-right"><input type="submit" class="btn btn-primary" value="View Events"></a>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                      
                      
                                              <form action="" method="post" enctype="multipart/form-data" name="upload">
                                                 
                                                  <div class="form-group">
                                                      <label>Event cTitle</label>
                                                      <input class="form-control" placeholder="Enter Title" name="aname" required>
                                                          <p class="help-block">Example "Upcoming Rotary Events"</p>
                                                  
                                                  </div>
                                                  <div class="form-group">
                                                      <label>Event Date</label>
                                                      <input type="date" class="form-control" placeholder="Enter Title" name="edate" required>
                                                          <p class="help-block">Example "Upcoming Rotary Events Date"</p>
                                                  
                                                  </div>
                                                  <div class="form-group">
                                                      <label>Event Location</label>
                                                      <input class="form-control" placeholder="Enter Address" name="eloc" required>
                                                          <p class="help-block">Example "Upcoming Rotary Event Location/Address"</p>
                                                  
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