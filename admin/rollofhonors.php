
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Roll Of Honor : CP  | Rotary Club Of Dharamshala</title>
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
            <h1>Roll Of Honor: Control Panel</h1>
          </div>          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Roll Of Honor</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
                
                      <?php
                      include "./dbConfig/dbconfig.php";

                      if(isset($_POST['submit']))
                      {
                      $dmb_session = $_POST['dmb_session'];
                      $president = $_POST['president'];
                      $Secretary = $_POST['secretary'];
                      $status = "process";

                      $query_session = "SELECT * FROM roll_honor Where year='$dmb_session'";

                      $query_session_run = mysqli_query($connection,$query_session);

                      if (mysqli_num_rows($query_session_run) > 0) {

                      echo "<div class='alert alert-warning mydiv'>Session Year already exists enter new Session.</div>";
                       
                        }

                      else{
                       // inserting the data to database
                      
                     

                      $query="INSERT INTO roll_honor(year,president,secertary,status)VALUES ('$dmb_session','$president','$Secretary','$status')";
                      $query_run =mysqli_query($connection,$query);
        
    


                      if($query_run)
                        {
                          
                         

                          echo " <div class='alert alert-success mydiv'>Data Added  Successfully.</div>";
                        }
                        else
                        {
                          echo " <div class='alert alert-danger mydiv'><strong>Data Not Added Try Again!.</strong ></div>";
                          
                        }
                      }

                      }
                      ?>
       <!-- Main content -->
              <section class="content">

                    <div class="card">
                      <div class="card-header bg-dark">
                        <h3 class="card-title  "> Add Roll Of Honor Session.</h3>

                        <a href="viewrh.php" class="float-right"><input type="button" name="vrh" class="btn btn-primary" value="View RH List"></a>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                      
                      
                                              <form id="AddSession" action="" method="post"  name="upload">
                                                 
                                                  <div class="form-group">
                                                      <label>Session (Year) </label>
                                                      <input type="text" class="form-control" placeholder="Enter the year" name="dmb_session" pattern ="[0-9]{4}-[0-9]{2}"+" required>
                                                          <p class="help-block">Example: "2020-21"</p>
                                                  
                                                  </div>
                                                  <div class="form-group">
                                                      <label>President </label>
                                                      <input type="text" class="form-control" placeholder="Enter the president name" name="president"  required>
                                                          <p class="help-block">Example: "John Wick"</p>
                                                  
                                                  </div>
                                                  <div class="form-group">
                                                      <label>Secretary </label>
                                                      <input type="text" class="form-control" placeholder="Enter the secretary Name" name="secretary"  required>
                                                          <p class="help-block">Example: "John Wick"</p>
                                                  
                                                  </div>
                                                  
                                                  <button type="submit" class="btn btn-primary" name="submit">Submit </button>
                                                  <button type="reset" class="btn btn-default">Reset Button</button>
                                              </form>
                                              </div>
                                              
                                        
                                              
                      <!-- /.card-header -->
                     
                      <!-- /.card-body -->
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