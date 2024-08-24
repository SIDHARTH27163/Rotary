
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Rotary Club Dharamshala - Admin | Board_of_Directors</title>
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
            <h1>Add Board Of Directors And Add Designations</h1>
          </div>
            
          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Board of Directors</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <?php $bid = $_REQUEST["id"]; ?>
      <?php
include"dbConfig/dbconfig.php";
$sql = "select * from bod_session where bid='$bid'";
$rs_result = mysqli_query ($connection,$sql);
?>
<?php
while ($row = mysqli_fetch_assoc($rs_result)) {
?>
<?php $b_session=$row["b_session"]; ?>
<?php };?>

          <div class="card">
            <div class="card-header bg-dark">
              <h3 class="card-title">Add BOARD OF DIRECTORS </h3>
               <button type="button" class="btn btn-primary modals_ btn" data-toggle="modal" data-target="#exampleModal">
  Add Designation
</button>
            </div>
            <!-- /.card-header -->

            <div class="card-body">
                
                  <?php
                
                              if(isset($_POST['submit_desig'])){

$desig = $_POST['designation'];
                                 
                 $query = "INSERT INTO designations(d_name) VALUES ('".$desig."')";
   echo $query;
      $query_run = mysqli_query($connection,$query);

      if($query_run){

                        echo " <div class='alert alert-success mydiv'>Board of Director Designation  $desig Successfully Added.</div>";

    }
    else{
     
     echo " <div class='alert alert-danger mydiv'><strong>Board of Director  not added!</strong ></div>";

  }                 
                                  
                                  
                                  
                                  
                                  

                }
?>
                
                
                
              <?php
              include'dbConfig/dbconfig.php';

              if(isset($_POST["Add"]))
{
$year = date("Y");
               $bo_id=$bid;
               $bod_session=$b_session;
               $status='process';

               $designation = $_POST['designation'];

              $mem_id = $_POST['memid'];

              

                              
//searching starts
   $query1 = "SELECT * FROM members WHERE id='$mem_id'";
  
  // FETCHING DATA FROM DATABASE
  $result = $connection->query($query1);
  
    if ($result->num_rows > 0) 
    {
        // OUTPUT DATA OF EACH ROW
        while($row = $result->fetch_assoc())
        {
            $name=$row["name"] ;
               $contact =$row["phone"];
            $image=$row["image"];
            
            }
        
          $sql="INSERT INTO boardofdirec (bo_id , bod_session , Mem_id , designation , name , contact , year , status) VALUES(
              
              '$bo_id', '$bod_session', '$mem_id' , '$designation' , '$name' , '$contact' , '$year' ,'$status'
              
              )";
              if($connection->query($sql)===TRUE){
                  
                   echo " <div class='alert alert-success mydiv'>Board of Director Successfully Added.</div>"; 
                  
                  
              }else{
                    echo " <div class='alert alert-success mydiv'>Board of Director Designation Not Added.</div>";
              }
    } 
    else {
        echo "0 results";
    }
                  //Searching Ends
                  //inserting starts
                  
                  
                  
                  
               
                  //inserting ends
    
    }
     
     
      

?>


              <form action="" method="POST"  enctype="multipart/form-data"  >
            <div class="modal-body">
<!--
                <div class="form-group">
        <label> Member Id </label>
        <input type="text" name="memid" placeholder="Enter Member Id" class="form-control" required>
        <p class="help-block" style="font-weight:italic">Example : "10214556"</p>
          
        </div>
-->
               
                  <div class="form-group">
                              <?php
                              if(isset($_POST['bodsubmit']))
{
$b_session = $_POST['b_session'];
}
?>
                          <label>Select Member Name, Member Id</label>
                           <?php
                       include "dbConfig/dbconfig.php";
 
                       $sql = "select * from members ";
 
                       $rs_result = mysqli_query ($connection,$sql);
 
                      echo "<select class='form-control' name='memid'>";
                       echo "<option value=''>Please Select </option>";
                      while ($row = mysqli_fetch_assoc($rs_result)) 
                      {
                      echo "<option value=$row[id]>$row[id] $row[name]</option>";
                                       
                               };
                    echo "</select>";
                    
                    ?>
                                        </div>
<!--
        <div class="form-group">
        <label> NAME </label>
        <input type="text" name="name" placeholder="Enter Name" class="form-control" required>
        <p class="help-block" style="font-weight:italic">Example : "John Wick"</p>
          
        </div>
       
-->
        <div class="form-group">
        <label> DESIGNATION </label>
         <?php
                       include "dbConfig/dbconfig.php";
 
                       $sql = "select * from designations ";
 
                       $rs_result = mysqli_query ($connection,$sql);
 
                      echo "<select class='form-control' name='designation'>";
                       echo "<option value=''>Please Select </option>";
                      while ($row = mysqli_fetch_assoc($rs_result)) 
                      {
                      echo "<option value=$row[d_name]>$row[d_name]</option>";
                                       
                               };
                    echo "</select>";
                    
                    ?>
        <p class="help-block" style="font-weight:italic">Example : "President"</p>
          
        </div>
<!--
         <div class="form-group">
        <label> CONTACT </label>
        <input type="text" name="phone" placeholder="Enter Name" class="form-control" pattern="[0-9]{10}" required>
        <p class="help-block" style="font-weight:italic">Example : "7018397725"</p>
          
        </div>
-->

      
      
      
      </div>
      <div class="modal-footer">
        <input type="Submit" name="Add" value="Submit" class="btn btn-primary" >
      </div>
      </form>

      <!--     <form action="" method="POST" id="import_excel" enctype="multipart/form-data"  >-->
      <!--      <div class="modal-body">-->

      <!--  <div class="form-group">-->
      <!--  <label> Upload excel file</label>-->
      <!--    <input  type="file" name ="file_import"  class="form-control" required>-->
      <!--    <br>-->
      <!--    <p> Note: Format should be xlsx or csv or related to excel sheet </p>-->
      <!--    <p> Format of Table columns should be : <table class="table table-bordered bg-dark"><tr>-->
      <!--      <th>Member Id</th>-->
      <!--      <th>Designation</th>-->
      <!--      <th>Name</th>-->
      <!--      <th>Phone/Mobile</th>-->
      <!--    </tr></table></p>-->
      <!--  </div>-->
      
      <!--</div>-->
      <!--<div class="modal-footer">-->
      <!--  <input type="Submit" name="import" value="Import" class="btn btn-primary" >-->
      <!--</div>-->
      <!--</form>-->

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
<!--    designation modal starts-->
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Enter Designation Here</label>
    <input type="text" name="designation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter designation">
    
  </div>
           <button type="submit" name="submit_desig" class="btn btn-primary">Submit</button>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button"  class="btn btn-secondary" data-dismiss="modal">Close</button>
<!--        //<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>
<!--    designation modal ends-->
  </div>
  <!-- /.content-wrapper -->
  <?php
  include'themepart/footer.php';?>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<?php include'themepart/script.php';?>


<!-- page script -->
</body>
</html>