<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Add images to gallery  | RCD Gallery</title>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
    <?php $agid=$_REQUEST['id']; ?>
<?php
include"dbConfig/dbconfig.php";
$sql = "select * from rotractprojectyear where id='$agid'";
$rs_result = mysqli_query ($connection,$sql);
?>
<?php
while ($row = mysqli_fetch_assoc($rs_result)) {
?>
<?php $aname=$row["projectyear"]; ?>
<?php };?>
            
            <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
     <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Images and Description Of Project</h1>
          </div>          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Add Details</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

                    <div class="card">
                      <div class="card-header bg-dark">
                        <h3 class="card-title  ">Rotaract Club Of Dharamshala Albums:Control Panel </h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">

                         
            
            
                           <?php

                              include"./dbConfig/dbconfig.php";
                              $query = "select * from rotractprojectdet where status='process' and aid='$agid' ORDER BY pdid DESC";
                              $query_run = mysqli_query($connection,$query);
                              $location = "uploads/admin/Gallery/pgupload/";
                              $Srno=1;
                              $name=$aname;
                              if(mysqli_num_rows($query_run)>0)
                              {
                            ?>
            <table id="example1" class="table table-bordered table-striped ">
            <thead>
            <tr>
            <td>Sr no.</td>
            <th>Year</th>
            <th>Month</th>
            <th>Title</th>
            <th>Description</th>
            <th>Images</th>
            <th>Edit</th>
            <th>Delete</th>
            </tr>
            </thead>

<tbody>
  <?php
while($row2 = mysqli_fetch_assoc($query_run))
                       
                        {
?>
    <tr>
      <td> <?php echo $Srno++ ; ?> </td>
       <td> <?php echo $aname ?> </td>
       <td> <?php echo $row2['gname'] ?> </td>
       <td> <?php echo $row2['title'] ?> </td>
       <td> <?php echo $row2['description'] ?> </td>
            <td><a href='pgchangeimage.php?key0=<?php echo  $row2["pdid"];?>&cid=<?php echo $row2["pdid"]; ?>'><img src="uploads/admin/Gallery/pgupload/<?php echo $row2['gimages']; ?>"  width="200px"/></a></td>
            <td>
  
              <button class="btn btn-primary" data-toggle="modal" type="button" data-target="#AdminModal<?php echo $row2['pdid']?>">Edit</button>
                      
                    
                  </td>
                  <td>
                  <form action="rotractprojectcode.php" onclick="return confirm('Are you sure you wish to delete this Album ?');" method="POST"> 
                      <input type="hidden" name="delete_id" value="<?php echo $row['pdid'] ?>">
                  
                  <button type ="submit" name="delete_album" class="btn btn-danger">Delete</button>
                </form>
              </td> 

              
       </tr>
        <?php
 include'rotractupdateprojectdet.php';
        
}
?>
                    
       </tbody>

<tfoot>
           <tr>
            <td>Sr no.</td>
            <th>Year Month</th>
            <th>Images</th>
            <th>Edit</th>
            <th>Delete</th>
                </tr>
                </tfoot>
                </table>
        <?php
}
else
{
 echo" No record Found.";
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
           <?php 
                    include './themepart/script.php';
              ?>
          <!-- ./wrapper -->
           </body>
           </html>