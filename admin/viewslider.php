<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Slider Manager | Rotary Club Dharamshala</title>
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
  
</head>
<body>
  <div id="wrapper">
    <?php
    include'./themepart/topmenu.php';
    include'./themepart/sidebar.php';
    include'dbConfig/dbconfig.php';

    ?>

  <div class="content-wrapper">

    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Rotary Club Of Dharamshala : Slider Manager</h1>
          </div>          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">RCD : Slider Manager</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<!-- MODAL -->


 
    <div class="modal fade" id="AdminModal<?php echo $row['albumid'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="update_album">Update Slider Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      
    </div>
  </div>
</div>




       <!-- Main content -->
              <section class="content">

                    <div class="card">
                      <div class="card-header bg-dark">
                        <h3 class="card-title  ">Slider Images:<span class="text-danger">  Control Panel</span> </h3>
                        <br>
                        <p class="help-block text text-warning text-bold">Note: *** Only Title and Description can be updated on click Edit Option. ***</p>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <?php
                       if (isset($_GET['success']) && $_GET['success'] == 1) {
                
               echo' <div class="alert alert-success mydiv"> Data updated Successfully!</div>';
              } 

              if(isset($_GET['success']) && $_GET['success'] == 0){

              echo'<div class="alert alert-danger mydiv">No Updation In Data Try Again!</div>';

            }
   
                        ?>

                        <script type="text/javascript">setTimeout(function() {
                          $('.mydiv').fadeOut('slow');
                      }, 3000);</script>
                      <?php
                      if(isset($_POST['delete']))
                      {
                        $id = $_POST['delete_id'];
    
      $query = "DELETE FROM slider_images WHERE id='$id'";

      $query_run= mysqli_query($connection,$query);
       
    
                      }
                      ?>
                    
            
                 <?php
            include 'dbConfig/dbconfig.php';
            $sql = "select * from slider_images where status='process'  ORDER BY id DESC";
             $query_run = mysqli_query($connection,$sql);
            $location = "uploads/admin/Gallery/slider_images/";
            $Srno=1;
            
            if(mysqli_num_rows($query_run)>0)
            
            {
                       
         ?>
         

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Sr no.</th>
            <th>Title</th>
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
       <td> <?php echo $row["title"]; ?> </td>
       <td> <?php echo $row["description"]; ?> </td>
              
                      
                    <td><img src="uploads/admin/Gallery/slider_images/<?php echo $row['images']; ?>" height="100px"  width="100px"/></td>
                  <td>
                    <form method="POST" action="slideredit">
                     <input type="hidden" name="e_id" value="<?php echo $row['id'] ?>">
                    <button type ="submit" name="edit_slider" class="btn btn-primary">Edit</button>
                  </form>
                  </td>
                  <td>
                  <form action="" onclick="return confirm('Are you sure you wish to delete this Slider Image ?');" method="POST"> 
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
                     <th>Sr no.</th>
            <th>Title</th>
            <th>Description</th>
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
              echo "No record Found";
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