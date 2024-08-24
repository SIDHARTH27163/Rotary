
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CMS List | Rotary Club Dharamshala</title>
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
    <?php $cod_id=$_REQUEST['ids']; ?>
    <?php include 'dbConfig/dbconfig.php'; ?>


  <div class="content-wrapper">
 <?php
                      if(isset($_POST['delete_cmsrid']))
                      {
                        $id = $_POST['delete_gid'];
    
      $query = "DELETE FROM cmsridadd WHERE id='$id'";

      $query_run= mysqli_query($connection,$query);
       
    
                      }
                      ?>

    
    <!-- Moddal -->
   

    <!-- / Modal -->
<?php 
              $sql = "select * from cmsridadd where status='process' and cd_id='$cod_id'";
             $query_run = mysqli_query($connection,$sql);
             $row1 = mysqli_fetch_assoc($query_run);
                        ?> 
    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>CMSRID For Session : <span><?php echo $row1['cod_session'];?><span></h1>
          </div>          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">RCD : CMSRID</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
     
       <!-- Main content -->

             

       
              <section class="content">

                    
                    <div class="card">
                      <div class="card-header bg-dark">
                        <h3 class="card-title  ">Rotary Club Of Dharamshala BOD:<span class="text-danger">  Control Panel</span></h3>
                        
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                 <?php
            
            $sql = "select * from cmsridadd where status='process' and cd_id='$cod_id'";
             $query_run = mysqli_query($connection,$sql);
            $Srno=1;
            $location="uploads/admin/Gallery/cmsrid/";
            
            if(mysqli_num_rows($query_run)>0)
            
            {
                       
         ?>
         

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Sr no.</th>
            
            <th> Name</th>
            <th> Session</th>
            <th> Served</th>
            <th> Image</th>
            <th> Edit</th>
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
                   <td> <?php echo $row["cod_session"]; ?> </td>

  <td> <?php echo $row["name"]; ?> </td>
  <td> <?php echo $row["served"]; ?> </td>
  <td><a href='cmschangeimage.php?key0=<?php echo  $row["id"];?>&asid=<?php echo $row["cd_id"]; ?>'><img src="uploads/admin/Gallery/cmsrid/<?php echo $row['image']; ?>"  width="100px"/></a></td>
  <td>
    <button class="btn btn-primary" data-toggle="modal" type="button" data-target="#AdminModal<?php echo $row['id']?>">Edit</button>
  </td>
  <td> <form action="" onclick="return confirm('Are you sure you wish to delete this Image ?');" method="POST"> 
                      <input type="hidden" name="delete_gid" value="<?php echo $row['id'] ?>">
                  
                  <button type ="submit" name="delete_cmsrid" class="btn btn-danger">Delete</button>
                </form></td>
              
            </tr>
          
         <?php  
         include'updatecms.php';
      
                }
                       
             ?>
                </tbody>
                <tfoot>
                <tr>
                   <td><b>Sr no.</b></td>
                   <th> Session</th>
             <th> Name</th>
            <th> Served</th>
            <th> Image</th>
            <th> Edit</th>
            <td>Delete</td>
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