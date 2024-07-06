
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Contact Us  | RCD </title>
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
            <h1>Contact Us Details</h1>
          </div>          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Contact</li>
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
                   $address = $_POST['address'];
                   $email = $_POST['email'];
                   $meeting = $_POST['meeting'];
                
                  
                      
                 
                               

                    $query="INSERT into contact(`address`,`email`,`meeting`) VALUES('$address','$email','$meeting')";
                  $query_run= mysqli_query($connection,$query);
                                

                               
                              
                        if($query_run){
                echo " <div class='alert alert-success mydiv'>Data  Successfully Uploded.</div>";
                
                
                }
                else{
              echo"  <div class='alert alert-warning mydiv'> Data  uploaded Try again!</div>";
              

              }

                  
                   }    
                     
                

                
              ?>

      <div class="card">
                      <div class="card-header bg-dark">
                        <h3 class="card-title  ">Contact Details</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <form action="#" method="post" enctype="multipart/form-data" name="upload">
                                       
                                        
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" name="address" placeholder="Enter Address" required class="form-control" />
                
                                            <p class="help-block">Example "Enter Address"</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Meeting Hours</label>
                                            <textarea name="meeting" rows="" placeholder="Enter Description"  maxlength="10000" class="form-control" required ></textarea>
        <p class="help-block" style="font-weight:italic">Max 10000 Character Allowed.<br>   <span class="text-danger text-bold">   NOTE: Use spaces between words and also make new lines b/w paragraphs.</span> </p>
        <p class="help-block text-bold text-danger" style="font-weight:italic">Use Special notations <br>
         NOTE: use double  break tag using keyword br in arow brackets : for paragraphs spacing
          <br> 
              span tag : for bold/ highlight and color  of the text related to theme.


         </p>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" name="email" placeholder="Enter Address" required class="form-control" />
                
                                            <p class="help-block">Example "Email@.com"</p>
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