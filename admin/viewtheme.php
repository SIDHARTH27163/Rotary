<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Themes Controller | Rotary Club Dharamshala</title>
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
<body>
  <div id="wrapper">
    <?php
    include'./themepart/topmenu.php';
    include'./themepart/sidebar.php';

    ?>

  <div class="content-wrapper">


    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Rotary Club Of Dharamshala : Themes</h1>
          </div>          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">RCD : Themes</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
     
       <!-- Main content -->
              <section class="content">

                    <div class="card">
                      <div class="card-header bg-dark">
                        <h3 class="card-title  ">Rotary Club Of Dharamshala Theme Of The Year:<span class="text-danger">   Control Panel</span> </h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <span>
                         
                         <?php 
                           include'dbConfig/dbconfig.php';
                          if(isset($_POST['delete_id'])){

                      $id = $_POST['delete_tid'];
    
      $query = "DELETE FROM add_theme WHERE id='$id'";

      $query_run= mysqli_query($connection,$query);
       
            if($query_run)
      {
                        
                        echo"<div class='alert alert-success mydiv'>Theme Deleted  Successfully</div>";
      }
      else
      {
                       echo"<div class='alert alert-danger mydiv'>Theme not Deleted Try Again!</div>";
                      
      }
    }
        ?></span>
                 <?php
            include 'dbConfig/dbconfig.php';
            $sql = "select * from add_theme where status='process' ORDER BY id DESC"; 
            $query_run = mysqli_query($connection,$sql);
            $location = "uploads/admin/Gallery/theme_of_the_year/";
            $Srno=1;
            
            if(mysqli_num_rows($query_run)>0)
            
            {
                       
         ?>
         

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Sr no.</th>
                    <th>Theme Year</th>
            <th>Image Title</th>
            <th>Image</th>
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
                   <td> <?php echo $row["theme_session"]; ?> </td>
       <td> <?php echo $row["name"]; ?> </td>
  
              
                      
                    <td><a href='tchangeimage.php?key0=<?php echo  $row["id"];?>&dm_id=<?php echo $row["id"]; ?>'><img src="uploads/admin/Gallery/theme_of_the_year/<?php echo $row['images']; ?>"  width="80px"/></a></td>

                    <td><button class="btn btn-primary" data-toggle="modal" type="button" data-target="#theme_update<?php echo $row['id']?>"> Edit</button></td>
                  
                  <td>
                  <form action="" onclick="return confirm('Are you sure you wish to delete this Album ?');" method="POST">
                   

                      <input type="hidden" name="delete_tid" value="<?php echo $row['id'] ?>">
                  
                  <button type ="submit" name="delete_id" class="btn btn-danger">Delete</button>
                </form>
              </td>
              
            </tr>

          
         <?php   
                  
 
          include 'update.php';
 
          
           
                }
                       
             ?>
                </tbody>
                <tfoot>
                <tr>
                           <th>Sr no.</th>
                           <th> Theme Year</th>
            <th>Image Title</th>
            
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