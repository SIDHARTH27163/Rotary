<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Rotract Event Control Panel | Rotary Club Dharamshala</title>
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
  
</head>
<body>
  <div id="wrapper">
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
    <?php
    include'./themepart/topmenu.php';
    include'./themepart/sidebar.php';

    ?>

  <div class="content-wrapper">

    <!-- Moddal -->

    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Rotract Events</h1>
          </div>          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">RCD : Rotract Events</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

         <?php
    
    if(isset($_POST['submit']))
{
$ename = $_POST['gname'];
}
      ?>       
       <!-- Main content -->
              <section class="content">

                    <div class="card">
                      <div class="card-header bg-dark">
                        <h3 class="card-title  "> Rotract Events:<span class="text-danger">  Control Panel</span> </h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <form action="reslink.php" method="post" enctype="multipart/form-data" name="upload">
                                       
                                        <div class="form-group">
                                            <label>Select Event Name or Title</label>
                           <?php
include './dbConfig/dbconfig.php';
$sql = "select * from r_cover where sid='$bname'";
$rs_result = mysqli_query ($connection,$sql);
echo "
<select class='form-control' name='gname'>";
while ($row = mysqli_fetch_assoc($rs_result)) {


echo "<option value='$row[reid]'>$row[revent_name]</option>";
                                        };
                    echo "</select>";
                    
                    ?>
                                        </div>
                                                                                
                                        <button type="submit"  class="btn btn-primary" name="submit">Go Next</button>
                                        
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