
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Rotary Club Dharamshala - Admin | Interact Events Cover</title>
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
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <?php $bid = $_REQUEST["id"]; ?>
    <?php
include"dbConfig/dbconfig.php";
$sql = "select * from interact_session where id='$bid'";
$rs_result = mysqli_query ($connection,$sql);
?>
<?php
while ($row = mysqli_fetch_assoc($rs_result)) {
?>
<?php $bname=$row["i_session"]; ?>
<?php };?>
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
            <h1> Interact Events Cover : Control Panel</h1>
          </div>
          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active"> Interact Events Cover</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

          <div class="card">
            <div class="card-header bg-dark">
              <h3 class="card-title"> Interact Events Cover </h3>
              
                 <a href="addieventcover.php"><input type="button" name="event" class="btn btn-primary float-right" value="Add Event  Cover"></a>
                  </div>
            <!-- /.card-header -->
            <div class="card-body">
          
            <?php
            include 'dbConfig/dbconfig.php';
            $query = "SELECT * FROM i_cover where sid='$bname'";
            $query_run = mysqli_query($connection,$query);
            $Srno = 1;
            $location = "uploads/admin/Gallery/i_cover/";
            if(mysqli_num_rows($query_run)>0)
            
            {
                       
                        ?>
                        
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th> Sr no. </th>
                  <th>Event Name</th>
                  <th>Event Cover</th>
                  <th>Edit</th></tr>
            
                </thead>
                <tbody>
                <?php
                while($row = mysqli_fetch_assoc($query_run))
                        {
                  ?>
                  <tr>
                    <td> <?php echo $Srno++ ;?> </td>
                  <td><?php echo $row['ievent_name'] ?></td>
                  <td><img src="<?php echo $location.$row['ievent_cover'] ?>" width="100px"></td>
                  <td>
                    <button class="btn btn-primary" data-toggle="modal" type="button" data-target="#AdminModal<?php echo $row['ieid']?>">Edit</button>
                  </td>

                </tr>
                  <?php
                  include'icover_edit.php';
                        }
                        ?>
                </tbody>
                <tfoot>
                  <tr>
                  <th> Sr no. </th>
                  <th>Event Name</th>
                  <th>Event Cover</th>
                  <th>Edit</th>
                </tr>
                </tfoot>
              </table>

               <?php
            }

            else
          
             {
            echo ' No Record Found.';
             }
            ?>

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
 <?php include'themepart/footer.php'; ?>
  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php include'themepart/script.php'; ?>
<!-- jQuery -->

</body>
</html>