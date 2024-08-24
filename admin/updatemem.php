
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Members Edit | Rotary Club Dharamshala</title>
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
            <h1>Rotary Club Of Dharamshala : Members Edit</h1>
          </div>          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">RCD : Members edit</li>
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
              
                     if(isset($_POST['edit']))
                     {
                      $id = $_POST['e_id'];
                      $query = "SELECT * FROM members WHERE mid='$id'";
                      $query_run = mysqli_query($connection,$query);
                      foreach($query_run as $row)
                      {
                        ?>
                      
                <form action="upcode.php" method="POST" enctype="multipart/form-data">
                                 

                                     <input type="hidden" name="bod_id" value="<?php echo $row['mid'] ?>">
                                     <div class="modal-body">
                                  <div class="form-group">
                                     <label> Name</label>
                                     <input  type="text" name ="name"  class="form-control" value="<?php echo $row['name'] ?>"  placeholder = "Enter Name" required>
                                      <br>
                                      <p class="help-block text-danger"> Example : Name "Dr. Freak" or "any name of the member"</p>
                                 </div>
                                 <div class="form-group">
                                    <label> id</label>
                                    <input  type="text" name ="id"  class="form-control" value="<?php echo $row['id'] ?>" required>
                                    <br>
                                    <p class="help-block text-danger"> Example :  "1025468"</p>
                                 </div>
                                  <div class="form-group">
                                     <label> Designation</label>
                                     <input  type="text" name ="desig"  class="form-control" value="<?php echo $row['desig'] ?>"  placeholder = "Enter Designation" >
                                      <br>
                                      <p class="help-block text-danger"> Example : Name "Member"</p>
                                 </div>
                                 <div class="form-group">
                                    <label> Phone</label>
                                    <input  type="text" name ="phone"  class="form-control" placeholder="Enter Phone Number" value="<?php echo $row['phone'] ?>" >
                                     <br>
                                     <p class="help-block text-danger"> Example :  "9876543210 or 012345-5856478 seprate the number by ',' if landline or second number exist"</p>
                                 </div>
                                 <div class="form-group">
                                   <label> Address</label>
                                   <input  type="text" name ="address"  class="form-control" placeholder="Enter Address" value="<?php echo $row['address'] ?>" >
                                   <br>
                                  <p class="help-block text-danger"> Example :  " street name email etc. "</p>
                                  </div>
                                  
                                    <div class="form-group">
                                   <label> E-mail</label>
                                   <input  type="email" name ="email"  class="form-control" placeholder="Enter Address" value="<?php echo $row['email'] ?>"  >
                                   <br>
                                  <p class="help-block text-danger"> Example :  " street name email etc. "</p>
                                  </div>
                                  
                                  <div class="form-group">
                                    <label> Classification</label>
                                     <input  type="text" name ="Classification"  class="form-control" value="<?php echo $row['classification'] ?>" required>
                                      <br>
                                      <p class="help-block text-danger"> Example :  " Doctor Engineer... "</p>
                                   </div>
                                     <div class="form-group">
        <label> Description</label>
          <textarea class="form-control" rows="3" placeholder="Enter Description" name="adesc" maxlength="10000"><?php echo $row['descr'] ?></textarea>
                
                                            <p class="help-block" style="font-weight:bold">Max 10000 Character Allow </p>
        </div>
                                   <div class="form-group">
                                     <label> Member DOB</label>
                                     <input  type="text" name ="dob"  class="form-control" pattern="[0-9]{2}-[A-Z a-z]{3}"value="<?php echo $row['dob'] ?>" placeholder="Enter DOB"  required>
                                    <br>
                                    <p class="help-block text-danger"> Example : " ("20-Dec") "</p>
                                   </div>
                                   <div class="form-group">
                                     <label> Joining Year</label>
                                     <input  type="text" name ="jyear"  class="form-control" pattern="[0-9]{4}" value="<?php echo $row['jyear'] ?>"  placeholder="2019" required>
                                     <br>
                                      <p class="help-block text-danger"> Example : 2003 </p>
                                  </div>
                                  <div class="form-group">
                                    <label> Spouse name</label>
                                     <input  type="text" name ="sname"  class="form-control" placeholder="Enter Spouse name"value="<?php echo $row['spouse_name'] ?>" >
                                    <br>
                                    <p class="help-block text-danger"> Example : "Mrs. Jack" </p>
                                  </div>

                                    <div class="form-group">
                                           <label> Spouse DOB</label>
                                            <input  type="text" name ="sdob"  class="form-control" pattern="[0-9]{2}-[A-Z a-z]{3}" value="<?php echo $row['spousedob'] ?>" placeholder=" Enter Spouse-Dob" >
                                           <br>
                                           <p class="help-block text-danger"> Example : 20-Dec </p>
                                      </div>
                                  <div class="form-group">
                                       <label> WA DAY</label>
                                        <input  type="text" name ="wADAY"  class="form-control" pattern="[0-9]{2}-[A-Z a-z]{3}" value="<?php echo $row['waday'] ?>"  placeholder=" Enter WA DAY" >
                                       <br>
                                      <p class="help-block text-danger"> Example : 20-Dec </p>
                                  </div>
                                     <div class="form-group">
                                      <label> Blood group</label>
                                       <input  type="text" name ="bdg"  class="form-control" value="<?php echo $row['bdg'] ?>"   placeholder=" Enter Blood Group" required>
                                       <br>
                                       <p class="help-block text-danger"> Example : A+ , o+ </p>
                                    </div>
      
                                 </div>
                                  <div class="modal-footer">
                                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                   <button type="Submit" name="mem_update" class="btn btn-success">Update</button>
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
 
                                 