
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Add Event Description to gallery  | RCD Event</title>
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
$sql = "select * from i_cover where ieid='$agid'";
$rs_result = mysqli_query ($connection,$sql);
?>
<?php
while ($row = mysqli_fetch_assoc($rs_result)) {
?>
<?php $aname=$row["ievent_name"]; ?>
<?php };?>
            
            <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
     <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Event Description</h1>
          </div>          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Add Event Description</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content grid">
               <?php

              $gid=$agid;
              $gname=$aname;
              $status='process';
              include"dbConfig/dbconfig.php";
              $rd=rand();
              
             
              


              if(isset($_FILES['upload1']))
              {
               
                foreach($_FILES['upload1']['tmp_name'] as $key => $tmp_name)
                {
                  $file_name = $key.$rd.$_FILES['upload1']['name'][$key];
                  $file_tmp =$_FILES['upload1']['tmp_name'][$key]; 

                  $location = "uploads/admin/Gallery/ievent_images/";
                  $desc = $_POST['adesc']; 
                 
                  $extension = explode('.',$file_name);
                  //checking extension
                  
                   $extension_check= strtolower(end($extension));
                    
                       // allowed extensions
                     
                      $allowed_extensions = array("jpg","jpeg","png");
                  
                      
                  if(!in_array($extension_check,$allowed_extensions))
                          {
                           echo " <div class='alert alert-danger mydiv'><strong>ERROR</strong> - Invalid format. Only jpg / jpeg/ png  format allowed</div>";


                               }
                               else
                               {

                                $query="INSERT into ievent_desc(`ieid`,`images`,`desc`,`status`) VALUES('$gid','$file_name','$desc','$status')";
                  $query_run= mysqli_query($connection,$query);
                                 $location = "uploads/admin/Gallery/ievent_images/";

                               
                              
                        if($query_run){
                        move_uploaded_file($file_tmp,$location.$file_name);
                echo " <div class='alert alert-success mydiv'>Your Photos Is Successfully Uploded.</div>";
                
                
                }
                else{
              echo"  <div class='alert alert-warning mydiv'> Photos cannot uploaded Try again!</div>";
              

              }

                  
                   }    
                      }
                  
                  }
                

                
              ?>

      <div class="card">
                      <div class="card-header bg-dark">
                        <h3 class="card-title  ">Fill this form to add Event Description to album: <span class="text-danger"> Multiple selection is also possible</span> </h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <form action="#" method="post" enctype="multipart/form-data" name="upload">
                                       
                                         <div class="form-group">
                                            <label>Gallery Image</label>
                                            
                                                       <textarea class="form-control" rows="3" placeholder="Enter Description" name="adesc" maxlength="1000"></textarea>
                
                                            <p class="help-block" style="font-weight:bold">Max 1000 Character Allow </p>
                                        </div>
                                        <div class="form-group">
                                            <label>Gallery Image</label>
                                            <input type="file" name="upload1[]" multiple  id="upload" required/>
                
                                            <p class="help-block">Example "Recomended Image Size in pixel 400 X 300"</p>
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
          <?php 
                    include './themepart/script.php';
              ?>

          <!-- ./wrapper -->
           </body>
           </html>