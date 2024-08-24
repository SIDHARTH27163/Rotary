
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>District Governers : CP  | Rotary Club Of Dharamshala</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome --><link rel="icon" type="image/gif/png" href="../img/title.png">

  
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
            <h1>District Governers: Control Panel</h1>
          </div>          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">District Governers</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
                
                      <?php
                      include "./dbConfig/dbconfig.php";

                      if(isset($_POST['submit']))
                      {
                      $d_session = $_POST['td_session'];
                      $status = "process";

                      $query_session = "SELECT * FROM dist_gov_session Where d_session='$d_session'";

                      $query_session_run = mysqli_query($connection,$query_session);

                      if (mysqli_num_rows($query_session_run) > 0) {

                      echo "<div class='alert alert-warning mydiv'>Session Year already exists enter new Session.</div>";
                       
                        }

                      else{



                       // inserting the data to database
                      
                     

                      $query="INSERT INTO dist_gov_session(d_session,date,status) VALUES ('$d_session',Now(),'$status')";
                      $query_run =mysqli_query($connection,$query);




                      if($query_run)
                        {
                          
                         

                          echo " <div class='alert alert-success mydiv'>Your New Session for District governers Is Successfully Added. Go For Step 2.</div>";
                        }
                        else
                        {
                          echo " <div class='alert alert-danger mydiv'><strong>Session Not entered.</strong ></div>";
                          
                        }
                      }

                      }
                      ?>
       <!-- Main content -->
              <section class="content">

                    <div class="card">
                      <div class="card-header bg-dark">
                        <h3 class="card-title  "><b>Step : 1.</b> District Governers Session.</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                      
                      
                                              <form id="AddSession" action="" method="post"  name="upload">
                                                 
                                                  <div class="form-group">
                                                      <label>Session (Year) </label>
                                                      <input class="form-control" placeholder="Enter the year" name="td_session" pattern ="[0-9]{4}-[0-9]{2}"+" required>
                                                          <p class="help-block">Example: "2020-21"</p>
                                                  
                                                  </div>
                                                  
                                                  <button type="submit" class="btn btn-primary" name="submit">Submit </button>
                                                  <button type="reset" class="btn btn-default">Reset Button</button>
                                              </form>
                                              </div>
                                              
                                              <hr>
                                              <div class="card-header bg-dark">
                        <h3 class="card-title  "><b>Step : 2.</b> Choose session year to add District Governers. </h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                      
                      
                                            <form action="dodlink" method="post" enctype="multipart/form-data" name="upload">
                                       
                          <div class="form-group">
                              <?php
                              if(isset($_POST['dsubmit']))
{
$d_session = $_POST['d_session'];
}
?>
                          <label>Select the Session Year</label>
                           <?php
                       include "dbConfig/dbconfig.php";
 
                       $sql = "select * from dist_gov_session where status='process'";
 
                       $rs_result = mysqli_query ($connection,$sql);
 
                      echo "<select class='form-control' name='d_session'>";
                        echo "<option value='' selected='' disabled=''>Select Session</option>";
                      while ($row = mysqli_fetch_assoc($rs_result)) 
                      {
                      echo "<option value=$row[did]>$row[d_session]</option>";
                                       
                               };
                    echo "</select>";
                    
                    ?>
                                        </div>
                                                                                
                                        <button type="submit" class="btn btn-primary" name="dsubmit">Go Next</button>
                                        
                                    </form>
                                              </div>
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