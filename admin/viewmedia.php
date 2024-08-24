<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Media Control Panel | Rotary Club Dharamshala</title>
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
$sql = "select * from media_session where id='$bid'";
$rs_result = mysqli_query ($connection,$sql);
?>
<?php
while ($row = mysqli_fetch_assoc($rs_result)) {
?>
<?php $b_session=$row["m_session"]; ?>
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
            <h1>Rotary Club Of Dharamshala : Media</h1>
          </div>          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">RCD : Media</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
     
       <!-- Main content -->
              <section class="content">

                    <div class="card">
                      <div class="card-header bg-dark">
                        <h3 class="card-title  ">Rotary Club Of Dharamshala Media:<span class="text-danger">  Control Panel</span> </h3>
                        <a href="mediasession.php"><input type="button" name="media" class="btn btn-primary float-right" value="Add Media"></a>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                 <?php
            include 'dbConfig/dbconfig.php';
            $sql = "select * from media where sid='$b_session' ORDER BY mid DESC"
            ; $query_run = mysqli_query($connection,$sql);
            $location = "uploads/admin/Gallery/Media/";
            $Srno=1;
            
            if(mysqli_num_rows($query_run)>0)
            
            {
                       
         ?>
         

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <td>Sr no.</td>
            <th>Image Name</th>
            <th>Update Image</th>
            
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
       <td> <?php echo $row["images"]; ?> </td>
  
              
                      
                    <td><a href='mchangeimage.php?key0=<?php echo  $row["mid"];?>&asid=<?php echo $row["mid"]; ?>'><img src="uploads/admin/Gallery/Media/<?php echo $row['images']; ?>"  width="100px"/></a></td>
                  
                  <td>
                  <form action="mediacode" onclick="return confirm('Are you sure you wish to delete this Album ?');" method="POST"> 
                      <input type="hidden" name="delete_gid" value="<?php echo $row['mid'] ?>">
                  
                  <button type ="submit" name="delete_gallery" class="btn btn-danger">Delete</button>
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
            <th>Image Name</th>
            <th>Update Image</th>
            <th>Delete</th>
                </tr>
                </tfoot>
              </table>
              <?php
            }
            else
            {
                echo "No Data Found";
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