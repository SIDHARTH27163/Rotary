
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Contributors List Control Panel | Rotary Club Dharamshala</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

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
    <?php
    include'./themepart/topmenu.php';
    include'./themepart/sidebar.php';

    ?>
    <?php $asid=$_REQUEST['ids']; ?>

  <div class="content-wrapper">

    <!-- Moddal -->

    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Rotary Club Of Dharamshala : Contributors List </h1>
          </div>          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">RCD : Contributors List </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
            
  
       <!-- Main content -->
              <section class="content">

                    <div class="card">
                      <div class="card-header bg-dark">
                        <?php
                        include 'dbConfig/dbconfig.php';
                        $query2 = "SELECT * From con_det Where ttid=$asid";
                        $query_run2 = mysqli_query($connection,$query2);
                        $row2= mysqli_fetch_assoc($query_run2)
                        ?>

                        <h3 class="card-title "> <?php echo $row2['tid'] ?></h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                         <?php
                         include 'dbConfig/dbconfig.php';
                      if(isset($_POST['delete']))
                      {
                        $id = $_POST['delete_id'];
    
      $query = "DELETE FROM con_det WHERE conid='$id'";

      $query_run= mysqli_query($connection,$query);
       
    
                      }
                      ?>
                        

                        
                 <?php
            include 'dbConfig/dbconfig.php';
            $sql = "select * from con_det where ttid='$asid' ORDER BY conid DESC";
             $query_run = mysqli_query($connection,$sql);
            $Srno=1;
            
            if(mysqli_num_rows($query_run)>0)
            
            {
                       
         ?>

         

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <td>Sr no.</td>
            
            <th>name</th>
            <th>amount</th>
            <th>Date</th>
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
       
  
              
                      
                    
                    <td> <?php echo $row["name"]; ?> </td>
                    <td> <?php echo $row["amount"]; ?> </td>
                    <td> <?php echo $row["date"]; ?> </td>
                  
                  <td>
                <form action="" onclick="return confirm('Are you sure you wish to delete this Events ?');" method="POST"> 
                      <input type="hidden" name="delete_id" value="<?php echo $row['conid'] ?>">
                  
                  <button type ="submit" name="delete" class="btn btn-danger">Delete</button>
                </form>
              </td>
              
            </tr>
          
         <?php   
                       
                }
                       
             ?>
                </tbody>
                <tfoot>
                <tr>
                  <th colspan="2"> Total Amount(in ₹) :</th>
                  <?php
                   $sum = "SELECT SUM(amount) FROM con_det";
              $run_query = mysqli_query($connection,$sum);
              $row3 = mysqli_fetch_assoc($run_query);
              ?>
                  <th colspan="3"><?php echo $row3['SUM(amount)'] .' ₹' ;?></th>     
                </tr>
                </tfoot>
              </table>
              <?php
            }
            else
            {
              echo"No Data Found";
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