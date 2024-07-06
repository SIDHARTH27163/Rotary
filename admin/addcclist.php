
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Club Commettie Session : CP  | Rotary Club Of Dharamshala</title>
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
    <?php $bid = $_REQUEST["id"]; ?>
            
            <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php
include"dbConfig/dbconfig.php";
$sql = "select * from com_session where id='$bid'";
$rs_result = mysqli_query ($connection,$sql);
?>
<?php
while ($row = mysqli_fetch_assoc($rs_result)) {
?>
<?php $b_session=$row["cm_session"]; ?>
<?php };?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Club Commettie Title: Control Panel</h1>
          </div>          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Commettie Title</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
                
                      <?php
                      include "./dbConfig/dbconfig.php";

                      if(isset($_POST['submit']))
                      {
                          $cid=$bid;
              $cod_session=$b_session;
              $status='process';

                      $title = mysqli_real_escape_string($connection,$_POST['title']);
                      $status = "process";
  $query_session = "SELECT * FROM com_list Where listname='$title'";

                      $query_session_run = mysqli_query($connection,$query_session);

                      if (mysqli_num_rows($query_session_run) > 0) {

                      echo "<div class='alert alert-warning mydiv'>Chair Title Already Exists Go For Step 2.</div>";
                       
                        }
                     
else{
                      
                       // inserting the data to database
                      
                     

                      $query="INSERT INTO com_list(yid,session,listname,status) VALUES ('$cid','$cod_session','$title','$status')";
                      $query_run =mysqli_query($connection,$query);




                      if($query_run)
                        {
                          
                         

                          echo " <div class='alert alert-success mydiv'>Your New Title for Club Commetie Is Successfully Added. Go For Step 2.</div>";
                        }
                        else
                        {
                          echo " <div class='alert alert-danger mydiv'><strong>Title Not entered.</strong ></div>";
                          
                        }
                      
}
                      }
                      ?>
       <!-- Main content -->
              <section class="content">

                    <div class="card">
                      <div class="card-header bg-dark">
                        <h3 class="card-title  "><b>Step : 1.</b> Add Club Commetties title.</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                      
                      
                                              <form id="AddSession" action="" method="post"  name="upload">
                                                 
                                                  <div class="form-group">
                                                      <label>Title </label>
                                                      <input type="text" class="form-control" placeholder="Enter the Title" name="title"  required>
                                                          <p class="help-block">Example: "Commettie Title"</p>
                                                  
                                                  </div>
                                                  
                                                  <button type="submit" class="btn btn-primary" name="submit">Submit </button>
                                                  <button type="reset" class="btn btn-default">Reset Button</button>
                                              </form>
                                              </div>
                                              
                                              <hr>
                                              <div class="card-header bg-dark">
                        <h3 class="card-title  "><b>Step : 2.</b> Choose Title to add Members. </h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                      
                      
                                            <form action="commlink.php" method="post" enctype="multipart/form-data" name="upload">
                                       
                          <div class="form-group">
                              <?php
                              if(isset($_POST['bodsubmit']))
{
$title = $_POST['title'];
}
?>
                          <label>Select the Commettie tile to add  members :</label>
                           <?php
                       include "dbConfig/dbconfig.php";
 
                       $sql = "select * from com_list where session= '$b_session'";
 
                       $rs_result = mysqli_query ($connection,$sql);
 
                      echo "<select class='form-control' name='title'>";
                      while ($row = mysqli_fetch_assoc($rs_result)) 
                      {
                      echo "<option value=$row[id]>$row[listname]</option>";
                                       
                               };
                    echo "</select>";
                    
                    ?>
                                        </div>
                                                                                
                                        <button type="submit" class="btn btn-primary" name="bodsubmit">Go Next</button>
                                        
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