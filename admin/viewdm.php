

<?php

function custom_echo($x, $length)
{
  if(strlen($x)<=$length)
  {
    echo $x;
  }
  else
  {
    $y=substr($x,0,$length) . '...';
    echo $y;
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Album Control Panel | Rotary Club Dharamshala</title>
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
                }, 5000);</script>
  
</head>
<dmy>
  <div id="wrapper">
    <?php
    include'./themepart/topmenu.php';
    include'./themepart/sidebar.php';

    ?>
    <?php $dm_id=$_REQUEST['ids']; ?>
    <?php include 'dbConfig/dbconfig.php'; ?>


  <div class="content-wrapper">


  <!-- Moddal 1 -->
 <?php
      $sql = "select * from desig_members where status='process' and dm_id='$dm_id'";
             $query_run = mysqli_query($connection,$sql);
             $row2 = mysqli_fetch_assoc($query_run);
             $location = "uploads/admin/Gallery/Designated_members/";

      ?>

    <!-- Moddal -->
    


    <!-- Moddal -->
    
<?php 
              $sql = "select * from desig_members where status='process' and dm_id='$dm_id'";
             $query_run = mysqli_query($connection,$sql);
             $row1 = mysqli_fetch_assoc($query_run);
                        ?> 
    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Designated Members For Session : <span><?php echo $row1['dm_session'];?><span></h1>
          </div>          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">RCD : Designated Members</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
     
       <!-- Main content -->

             

       
              <section class="content">

                    
                    <div class="card">
                      <div class="card-header bg-dark">
                        <h3 class="card-title  ">Rotary Club Of Dharamshala dm:<span class="text-danger">  Control Panel</span></h3>
                        <form method="POST">
                           <button class="btn btn-primary float-right"  type="submit" name="create_pdf"><i class="fa fa-download" aria-hidden="true"></i> Download List</button>
                         </form>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                 <?php
            
            $sql = "select * from desig_members where status='process' and dm_id='$dm_id'";
             $query_run = mysqli_query($connection,$sql);
            $Srno=1;
            $location = "uploads/admin/Gallery/designated_members/";
            if(mysqli_num_rows($query_run)>0)
            
            {
                       
         ?>
         

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Sr no.</th>
            <th>Designated Member Id</th>
            <th> Designated Member Session</th>
            <th> Designation</th>
            <th> Name</th>
            <th> Description</th>
            <th> Image</th>
            <th> Edit</th>
                </tr>
                </thead>
                <tdmy>

        <?php
               
                while($row = mysqli_fetch_assoc($query_run))
                       
                        {
         ?>
                
             <tr>
                   <td> <?php echo $Srno++ ; ?> </td>
       <td> <?php echo $row["dm_id"]; ?> </td>
       <td> <?php echo $row["dm_session"]; ?> </td>
  <td> <?php echo $row["designation"]; ?> </td>
  <td> <?php echo $row["name"]; ?> </td>
  <td> <?php custom_echo($row['description'], 150); ?> </td>
<td><a href='dchangeimage.php?key0=<?php echo  $row["id"];?>&dm_id=<?php echo $row["dm_id"]; ?>'><img src="uploads/admin/Gallery/designated_members/<?php echo $row['image']; ?>"  width="100px"/></a></td>
  <td>
    <button class="btn btn-primary" data-toggle="modal" type="button" data-target="#AdminModal<?php echo $row['id']?>">Edit</button>
  </td>
              
            </tr>
          
         <?php  
                 include'updatedm.php';
                }
                       
             ?>
                </tdmy>
                <tfoot>
                <tr>
                      <th>Sr no.</th>
            <th>Designated Member Id</th>
            <th> Designated Member Session</th>
            <th> Designation</th>
            <th> Name</th>
            <th> Description</th>
            <th> Image</th>
            <th> Edit</th>
                </tr>
                </tfoot>
              </table>
              <?php
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