
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Joinings Details | Rotary Club Dharamshala</title>
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
    <?php
    include'./themepart/topmenu.php';
    include'./themepart/sidebar.php';

    ?>
    <?php include 'dbConfig/dbconfig.php'; ?>


  <div class="content-wrapper">



    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Admin Details</h1>
          </div>          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">RCD : Joining Details</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
     
       <!-- Main content -->

             

       
              <section class="content">

                    
                    <div class="card">
                      <div class="card-header bg-dark">
                        <h3 class="card-title  ">Rotary Club Of Dharamshala Jonings Details:</h3>

                        
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <?php
                        if(isset($_POST['delete'])){

                        $delete_id= $_POST['delete_admin'];

                        $query = "DELETE FROM joining_details WHERE join_id='$delete_id'";

      $query_run= mysqli_query($connection,$query);
       
            if($query_run)
      {
                        
                       echo"<script>window.location.href ='ViewJoinings.php'</script>";
      }
      else
      {
                        echo"<script>window.location.href ='ViewJoinings.php'</script>";
      }
                      }

                        ?>
                
                 <?php
              include 'dbConfig/dbconfig.php';
                 $Srno = 1;
            
            $sql = "select * from joining_details";
             $query_run = mysqli_query($connection,$sql);
            $Srno=1;
            
            
            if(mysqli_num_rows($query_run)>0)
            
            {
                       
         ?>
         

              <table id='example1' class='table table-bordered table-striped'>
                <thead>
                <tr>
                    <th>Sr no.</th>

            <th> ID</th>
            
            
            <th> Name</th>
            <th>E-Mail</th>
            <th>Age</th>
            <th>Contact</th>
            <th>Address</th>
            <th>Joining Reason </th>
            <th>Status</th>
            <th>Delete</th>
            
                </tr>
                </thead>
                <tbody>

               <?php
               
                while($row = mysqli_fetch_assoc($query_run))
                       
                        {
                   ?>
                
             <tr>
             <td><?php echo $Srno++ ;?> </td>
                  <td><?php echo $row['join_id'] ?></td> 
                  <td><?php echo $row['name'] ?></td>
                  <td><?php echo $row['email'] ?></td>
                  <td><?php echo $row['age'] ?></td>
                  <td><?php echo $row['cn'] ?></td>
                  <td><?php echo $row['address'] ?></td>
                  <td><?php echo $row['wju'] ?></td>
                  <td><?php echo $row['status'] ?></td>
                 
                  
                  <td>
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" onclick="return confirm('Are you sure you wish to delete this Album ?');" method="POST">
                    <input type="hidden" name="delete_admin" value="<?php echo $row['join_id']?>">
                    <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                  </td>
                  </form>
                  
                  
                      

  
              
            </tr>
          
         <?php  
             
                }


                       
             ?>
                </tbody>
                <tfoot>
                <tr>
                      <th>Sr no.</th>
          
           <th> ID</th>
            
            
            <th> Name</th>
            <th>E-Mail</th>
            <th>Age</th>
            <th>Contact</th>
            <th>Address</th>
            <th>Joining Reason </th>
            <th>Status</th>
            <th>Delete</th>
            
          
            
                </tr>
                </tfoot>
              </table>
              <?php

            }
            else{
           echo "No Record Found";
          } 
            ?>
                         
                                              </div>
                      <!-- /.card-dmy -->
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