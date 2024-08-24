<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>President Report : CP| Rotary Club Dharamshala</title>
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

  <div class="content-wrapper">

    <!-- Moddal -->

    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage Secretary Report</h1>
          </div>          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">RCD : Secretary Report</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
                
       <!-- Main content -->
              <section class="content">

                    <div class="card">
                      <div class="card-header bg-dark">
                        <h3 class="card-title  ">Secretary Report Control Panel </h3>
                        <a href="add_secretary_report.php" class="float-right"><input type="submit" class="btn btn-primary" value="Add Secretary Report"></a>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <?php
                        include 'dbConfig/dbconfig.php';
                        if(isset($_POST['delete_notice']))
     {
      $id = $_POST['delete_id'];
    
      $query = "DELETE FROM secretary_report WHERE id='$id'";

      $query_run= mysqli_query($connection,$query);
       
            if($query_run)
      {

        echo " <div class='alert alert-success mydiv'>ID : $id => Notice/Advertisement Deleted Successfully</div>";

      }
      else
      {
        echo " <div class='alert alert-danger mydiv'>ID : $id => Notice/Advertisement Not Deleted!</div>";
      }
      
    }
    ?>

                           <?php

                              include"./dbConfig/dbconfig.php";
                              $query = "select * from secretary_report where status='process' ORDER BY id DESC";
                              $query_run = mysqli_query($connection,$query);
                              $location = "uploads/admin/Documents/secretaryreport/";
                              $Srno=1;
                              

                              if(mysqli_num_rows($query_run)>0)
                              {
                            ?>
            <table id="example1" class="table table-bordered table-striped ">
            <thead>
            <tr>
            <th>Sr no.</th>
            <th>Date</th>
            <th>Secretary Name</th>
            <th>Files</th>
            <th>Delete</th>
            </tr>
            </thead>

<tbody>
  <?php
while($row = mysqli_fetch_assoc($query_run))
                       
                        {
?>
    <tr>
      <td> <?php echo $Srno++ ; ?> </td>
      <td> <?php echo $row["date"]; ?> </td>
       <td> <?php echo $row["name"]; ?> </td>
            <td class="text-center"><a href="<?php echo $location.$row['file']?>"><i class="fa fa-eye" style="font-size: 30px;"></i></td>
                  <td>
                  <form action="" onclick="return confirm('Are you sure you wish to delete this Album ?');" method="POST"> 
                      <input type="hidden" name="delete_id" value="<?php echo $row['id'] ?>">
                  
                  <button type ="submit" name="delete_notice" class="btn btn-danger">Delete</button>
                </form>
              </td> 

              
       </tr>
        <?php
         
}
?>
                    
       </tbody>

<tfoot>
           <tr>
            <td>Sr no.</td>
            <th>Title</th>
            <th>Files</th>
            <th>Delete</th>
                </tr>
                </tfoot>
                </table>
        <?php
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