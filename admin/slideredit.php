
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

<section class="content">

                    <div class="card">
                      <div class="card-header bg-dark">
                        <h3 class="card-title  ">Slider Editor:<span class="text-danger">  Control Panel</span> </h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <?php 
              
                     if(isset($_POST['edit_slider']))
                     {
                      $id = $_POST['e_id'];
                      $query = "SELECT * FROM slider_images WHERE id='$id'";
                      $query_run = mysqli_query($connection,$query);
                      foreach($query_run as $row)
                      {
                        ?>
                      
                    <form action="slidercode" method="POST" enctype="multipart/form-data">

                   <input type="hidden" name="e_id" value="<?php echo $row['id'] ?>">
            <div class="modal-body">
            <div class="form-group">
            <label> Title</label>
          <input type="text" name="title" class="form-control" value="<?php echo $row['title'] ?>" placeholder="Enter Slider Title" required>
         <p class="help-block">Example "Friendship day"</p>
        </div>
        <div class="form-group">
          <label> Description</label>

          <p class="help-block text-danger" style="font-weight:bold;">Max 1000 Character Allow </p>
            <textarea class="form-control" rows="3" placeholder="Enter Description" name="desc" maxlength="1000" required><?php echo $row['description'] ?></textarea >
        </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="Submit" name="slider_update" class="btn btn-success">Update</button>
      </div>
      </form>
            <?php 


                      }
                     }

                     ?>
                 
                         
                      </div>
                      <!-- /.card-body -->
                    </div>
                    </section>
                    <!-- /.card -->
                  </div>
                

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