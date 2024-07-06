<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Album Control Panel | Rotaract Club Dharamshala</title>
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
$sql = "select * from rotractgallery_session where id='$bid'";
$rs_result = mysqli_query ($connection,$sql);
?>
<?php
while ($row = mysqli_fetch_assoc($rs_result)) {
?>
<?php $bname=$row["gallery_session"]; ?>
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
            <h1>Rotaract Club Of Dharamshala : Albums</h1>
          </div>          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">RCD : Albums</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
                
       <!-- Main content -->
              <section class="content">

                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title  ">Rotaract Club Of Dharamshala Albums:Control Panel </h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">

           
                           <?php

                              include"./dbConfig/dbconfig.php";
                              $query = "select * from rotracttbl_album where sid='$bname' ORDER BY albumid DESC";
                              $query_run = mysqli_query($connection,$query);
                              $location = "uploads/admin/Gallery/aupload/";
                              $Srno=1;

                              if(mysqli_num_rows($query_run)>0)
                              {
                            ?>
            <table id="example1" class="table table-bordered table-striped ">
            <thead>
            <tr>
            <td>Sr no.</td>
            <th>Album Year</th>
            <th>Album_name</th>
            <th>Description</th>
            <th>Images</th>
            <th>Edit</th>
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
      <td> <?php echo $row["sid"]; ?> </td>
       <td> <?php echo $row["name"]; ?> </td>
            <td><?php echo $row["adesc"]; ?></td>
            <td><img src="<?php echo $location .$row['image'] ?>"  height="80px" width="80px"></td>
            <td>
  
              <button class="btn btn-primary" data-toggle="modal" type="button" data-target="#AdminModal<?php echo $row['albumid']?>">Edit</button>
                      
                    
                  </td>
                  <td>
                  <form action="rotractalbumcode.php" onclick="return confirm('Are you sure you wish to delete this Album ?');" method="POST"> 
                      <input type="hidden" name="delete_id" value="<?php echo $row['albumid'] ?>">
                  
                  <button type ="submit" name="delete_album" class="btn btn-danger">Delete</button>
                </form>
              </td> 

              
       </tr>
        <?php
 include'rotractalbumedit.php';
        
}
?>
                    
       </tbody>

<tfoot>
           <tr>
            <td>Sr no.</td>
             <th>Album Year</th>
            <th>Album_name</th>
            <th>Description</th>
            <th>Images</th>
            <th>Edit</th>
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