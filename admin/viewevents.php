<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Events Control Panel | Rotary Club Dharamshala</title>
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
    <?php $asid=$_REQUEST['ids']; ?>

  <div class="content-wrapper">

    <!-- Moddal -->

    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Rotary Club Of Dharamshala : Events </h1>
          </div>          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">RCD : Events </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
            
  
       <!-- Main content -->
              <section class="content">

                    <div class="card">
                      <div class="card-header bg-dark">
                        <h3 class="card-title  ">Rotary Club Of Dharamshala Events :<span class="text-danger">  Control Panel</span> </h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                         <?php
                         include 'dbConfig/dbconfig.php';
                      if(isset($_POST['delete']))
                      {
                        $id = $_POST['delete_id'];
    
      $query = "DELETE FROM event_desc WHERE id='$id'";

      $query_run= mysqli_query($connection,$query);
       
    
                      }
                      ?>
                        

                        
                 <?php
            include 'dbConfig/dbconfig.php';
            $sql = "select * from event_desc where status='process' and eid='$asid' ORDER BY id DESC";
             $query_run = mysqli_query($connection,$sql);
            $location = "uploads/admin/Gallery/event_images/";
            $Srno=1;
            
            if(mysqli_num_rows($query_run)>0)
            
            {
                       
         ?>

         

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <td>Sr no.</td>
            <th>Images</th>
            <th>Description</th>
            
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
       
  
              
                      
                    <td><a href='echangeimage.php?key0=<?php echo  $row["id"];?>&asid=<?php echo $row["eid"]; ?>'><img src="uploads/admin/Gallery/event_images/<?php echo $row['images']; ?>"  width="150px"/></a></td>

                    <td> <?php echo $row["desc"]; ?> </td>
                  
                  <td>
                <form action="" onclick="return confirm('Are you sure you wish to delete this Events ?');" method="POST"> 
                      <input type="hidden" name="delete_id" value="<?php echo $row['id'] ?>">
                  
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
                           <td>Sr no.</td>
            <th>Images</th>
            <th>Description</th>
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