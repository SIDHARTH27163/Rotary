
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Rotary Club Dharamshala - Admin |  Members</title>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

   <script type="text/javascript">setTimeout(function() {
                    $('.mydiv').fadeOut('slow');
                }, 5000);</script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php 
 include './themepart/topmenu.php'; 
 include './themepart/sidebar.php'; 
 ?>
 



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   <!-- Button trigger modal -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Members</h1>
          </div>
          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Members</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">


          <div class="card">
            <div class="card-header bg-dark">
              <h3 class="card-title">Add Members</h3>
              <a href="viewmembers.php"class="float-right"><input type="button" name="members" class="btn btn-primary" value="View Members"></a>
            </div>
            <!-- /.card-header -->

            <div class="card-body">
              <?php
              include 'dbConfig/dbconfig.php';
               
               if(isset($_POST['import']))
               {
              
              $name=$_POST['name'];
              $id=$_POST['id'];
              $phone=$_POST['phone'];
              $address=$_POST['address'];
              $email=$_POST['email'];
              $classification=$_POST['Classification'];
              $dob=$_POST['dob'];
              $desig=$_POST['desig'];
                $desc = $_POST['adesc'];
              $jyear=$_POST['jyear'];
              $sname=$_POST['sname'];
              $sdob=$_POST['sdob'];
              $waday=$_POST['wADAY'];
              $bdg=$_POST['bdg'];
              $images= $_FILES["upload"]['name'];
                      $filetmp = $_FILES["upload"]['tmp_name'];
                      //getting extension
                       $extension = explode('.',$images);
                       //checking extension
                       $extension_check= strtolower(end($extension));
                       // allowed extensions
                      $allowed_extensions = array("jpg","jpeg","png","gif");

                       
                      

                       if(!in_array($extension_check,$allowed_extensions))
                          {
                           echo " <div  class='alert alert-danger mydiv'><strong>ERROR</strong> - Invalid format. Only jpg / jpeg/ png /gif format allowed</div>";


                       }else{
                         $query_session = "SELECT * FROM members Where id='$id'";

                             $query_session_run = mysqli_query($connection,$query_session);
 
                      if (mysqli_num_rows($query_session_run) > 0) {

                      echo "<div class='alert alert-warning mydiv'>Member Id already exists.</div>";
                       
                        }
                        else
                        {

             $query = "INSERT INTO members(image, name, desig, id, phone, address,email,classification,descr,dob,jyear,spouse_name, spousedob, waday, bdg) VALUES ('$images','$name','$desig','$id','$phone','$address','$email','$classification','$desc','$dob','$jyear','$sname','$sdob',
             '$waday','$bdg')";

              $query_run = mysqli_query($connection,$query);
//                   echo($query_run);
              if($query_run)
              {
                   $location = "uploads/admin/Gallery/Members/";
                   move_uploaded_file($filetmp,$location.$images);
                echo "<div class='mydiv alert alert-success '> Data Inserted Successfully!</div>";
              }
              else
              {

                echo "<div class='mydiv alert alert-danger'> Data not Inserted! Try Again.</div>";
              }
              } 
            }
               }
              ?>
              

           <form action="" method="POST" enctype="multipart/form-data"  >
            <div class="modal-body">

        
             <div class="form-group">
                                                      <label>Member Image</label>
                                                      <input type="file" class="form-control" name="upload"  id="upload" required />
                          
                                                      <p class="help-block">Example "Recomended Image Size in pixel 400 X 300"</p>
                                                  </div>
                                                  <div class="form-group">
        <label> Name</label>
          <input  type="text" name ="name"  class="form-control"  placeholder = "Enter Name" required>
          <p class="help-block " style="font-size:14px; color:#009;"> Example : Name "Dr. Freak" or "any name of the member"</p>
        </div>
         <div class="form-group">
         <label> Designation</label>
          <input  type="text" name ="desig"  class="form-control"  placeholder = "Enter Designation">
          <p class="help-block " style="font-size:14px; color:#009;"> Example : Name "Manager"</p>
        </div>
        <div class="form-group">
        <label> id</label>
          <input  type="text" name ="id"  class="form-control"  required>
          
          <p class="help-block  " style="font-size:14px; color:#009;"> Example :  "1025468"</p>
        </div>
        <div class="form-group">
        <label> Phone</label>
          <input  type="text" name ="phone"  class="form-control" placeholder="Enter Phone Number">
          
          <p class="help-block  " style="font-size:14px; color:#009;"> Example :  "9876543210 or 012345-5856478 seprate the number by ',' if landline or second number exist"</p>
        </div>
        <div class="form-group">
        <label> Address</label>
          <input  type="text" name ="address"  class="form-control" placeholder="Enter Address"  required>
          
          <p class="help-block  " style="font-size:14px; color:#009;"> Example :  " street name email etc. "</p>
        </div>
         <div class="form-group">
        <label> Email</label>
          <input  type="email" name ="email"  class="form-control" placeholder="Enter E-mail"  >
          
          <p class="help-block  " style="font-size:14px; color:#009;"> Example :  " street name email etc. "</p>
        </div>
        <div class="form-group">
        <label> Classification</label>
          <input  type="text" name ="Classification"  class="form-control"  required>
          
          <p class="help-block  " style="font-size:14px; color:#009;"> Example :  " Doctor Engineer... "</p>
        </div>
        <div class="form-group">
        <label> Description</label>
          <textarea class="form-control" rows="3" placeholder="Enter Description" name="adesc" maxlength="1000"></textarea>
                
                                            <p class="help-block" style="font-weight:bold">Max 1000 Character Allow </p>
        </div>
        <div class="form-group">
        <label> Member DOB</label>
          <input  type="text" name ="dob"  class="form-control" pattern="[0-9]{2}-[A-Z a-z]{3}" placeholder="Enter DOB"  required>
          
          <p class="help-block  " style="font-size:14px; color:#009;"> Example : " ("20-Dec") "</p>
        </div>
        <div class="form-group">
        <label> Joining Year</label>
          <input  type="text" name ="jyear"  class="form-control" pattern="[0-9]{4}"  placeholder="2019" required>
          
          <p class="help-block " style="font-size:14px; color:#009;"> Example : 2003 </p>
        </div>
<div class="form-group">
        <label> Spouse name</label>
          <input  type="text" name ="sname"  class="form-control" placeholder="Enter Spouse name" >
          
          <p class="help-block  " style="font-size:14px; color:#009;"> Example : "Mrs. Jack" </p>
        </div>

        <div class="form-group">
        <label> Spouse DOB</label>
          <input  type="text" name ="sdob"  class="form-control" pattern="[0-9]{2}-[A-Z a-z]{3}"  placeholder=" Enter Spouse-Dob" >
          
          <p class="help-block  " style="font-size:14px; color:#009;"> Example : 20-Dec </p>
        </div>
        <div class="form-group">
        <label> WA DAY</label>
          <input  type="text" name ="wADAY"  class="form-control" pattern="[0-9]{2}-[A-Z a-z]{3}"  placeholder=" Enter WA DAY" >
          
          <p class="help-block  " style="font-size:14px; color:#009;"> Example : 20-Dec </p>
        </div>
         <div class="form-group">
        <label> Blood group</label>
          <input  type="text" name ="bdg"  class="form-control"   placeholder=" Enter Blood Group" required>
          
          <p class="help-block  " style="font-size:14px; color:#009;"> Example : A+ , o+ </p>
        </div>
      
      </div>
      <div class="modal-footer">
        <!-- <input type="Submit" name="import" value="Import" class="btn btn-primary" > -->
        <button type="Submit" name="import" class="btn btn-primary">Submit</button>
      </div>
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
  <footer class="main-footer">
    <strong>Copyright &copy; <?php echo date("Y");?> <a href="#">Rotary Club Dharamshala</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>


<!-- page script -->
</body>
</html>