
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Rotary Club Dharamshala - Admin | Header Information</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="icon" type="image/gif/png" href="../img/title.png">
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
<body class="hold-transition sidebar-mini">
<div class="wrapper">
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
            <h1>Header Section Updation</h1>
          </div>
          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Header Section</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

          <div class="card">
            <div class="card-header bg-dark">
              <h3 class="card-title">Edit Header</h3><br>
              <p class="text-warning"> Edit: Phone number shown on the top of your pages. <br>
                  Edit: Email number shown on the top of your pages. <br>
                  <strong>Note: There is no Option to Delete or Add New You can Edit the Previous Numbers or Emails.</strong></p>
            </div>
            <!-- /.card-header -->
            <div class="card-body">



            <?php
            include 'dbConfig/dbconfig.php';
            $query = "SELECT * FROM header_section";
            $query_run = mysqli_query($connection,$query);
            
            if(mysqli_num_rows($query_run)>0)
            
            {
                       
                        ?>
                        
              <table id="AdminData" class="table table-bordered table-striped">
                <thead>
                <tr>


                  
                  <th>Phone 1</th>
                  <th>Phone 2</th>
                  <th>Email</th>
                  <th> Update</th>
                </tr>
                </thead>
                <tbody>
                <?php
                while($row = mysqli_fetch_assoc($query_run))
                        {
                  ?>
                  <tr>
                  <td><?php echo $row['Phone1'] ?></td>
                  <td><?php echo $row['Phone2'] ?></td>
                  <td><?php echo $row['email'] ?></td>
                  <td><?php echo $row['address'] ?></td>
                  <td><?php echo $row['meeting'] ?></td>
                  <td>
                    <form action="header_edit.php" method="POST">
                      <input type="hidden" name="bod_edit_id" value="<?php echo $row['Id'] ?>">
                    <button type ="submit" name="edit_header" class="btn btn-success">Edit</button>
                    </form>
                  </td>

                </tr>
                  <?php
                        }
                        ?>
                </tbody>
                </tfoot>

              </table>


               <?php
            }
  
            else
          
             {
            echo '<div class="alert alert-danger mydiv"> NO Record Found!</div>';
             }
            ?>

            </div>

            <!-- /.card-body -->
          </div>
          <?php
                if (isset($_GET['success']) && $_GET['success'] == 1) {
                
               echo' <div class="alert alert-success mydiv"> Data updated Successfully!</div>';
              } 

              if(isset($_GET['success']) && $_GET['success'] == 0){

              echo'<div class="alert alert-danger mydiv"> Data not Updated Try Again!</div>';

            }
            ?>
           
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
  include'themepart/footer.php';
  ?>
  <!-- /.control-sidebar -->
</div>
<?php
  include'themepart/script.php';
  ?>
<!-- ./wrapper -->

<!-- jQuery -->

</body>
</html>