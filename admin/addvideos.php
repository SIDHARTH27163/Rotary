
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Add Videos Link | RCD Videos</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

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
            
            <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
     <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Videos Details</h1>
          </div>          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Add videos links</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content grid">
               <?php

              
include'dbConfig/dbconfig.php';

              if(isset($_POST['submit']))
              {
                   $title = $_POST['title'];
                   $link = $_POST['link'];
                   $status ="process";
                
                  
                      
                 
                               

                    $query="INSERT into videos(`title`,`link`,`status`) VALUES('$title','$link','$status')";
                  $query_run= mysqli_query($connection,$query);
                                

                               
                              
                        if($query_run){
                echo " <div class='alert alert-success mydiv'>Data  Successfully Uploded. </div>";
                
                
                }
                else{
              echo"  <div class='alert alert-warning mydiv'> Data  uploaded Try again!</div>";
              

              }

                  
                   }    
                     
                

                
              ?>

      <div class="card">
                      <div class="card-header bg-dark">
                        <h3 class="card-title  ">Add videos links</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <form action="#" method="post" enctype="multipart/form-data" name="upload">
                                       
                                        
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="title" placeholder="Enter Title" required class="form-control" />
                
                                            <p class="help-block">Example "Enter Title"</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Youtube Video ID</label>
                                            <textarea name="link" rows="" placeholder="Enter Id"  maxlength="10000" class="form-control" required ></textarea>
        <p class="help-block" style="font-weight:italic"> Example :  q5oMThaHiBA  </p>
       
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary" name="submit">Submit Button</button>
                                      </form>


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
           </body>
           </html>