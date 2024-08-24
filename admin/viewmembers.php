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
        <title>Members List | Rotary Club Dharamshala</title>
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
  
</head>

<body>
      <div id="wrapper">
          <?php
          include'./themepart/topmenu.php';
          include'./themepart/sidebar.php';

          ?>
          <?php include 'dbConfig/dbconfig.php'; ?>


              <div class="content-wrapper">

                        
                                <!-- Modal Class -->
                 

                                        <section class="content-header">
                                              <div class="container-fluid">
                                                  <div class="row mb-2">
                                                      <div class="col-sm-6">
                                                           <h1>MEMBERS LIST</h1>
                                                      </div>          
                                                          <div class="col-sm-6">
                                                               <ol class="breadcrumb float-sm-right">
                                                                  <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                                                                  <li class="breadcrumb-item active">RCD : Members List</li>
                                                              </ol>
                                                         </div>
                                                      </div>
                                             </div><!-- /.container-fluid -->
                                        </section>


                                        <section class="content">

                    
                                              <div class="card">
                                                    <div class="card-header bg-dark">
                                                          <h3 class="card-title  ">Rotary Club Of Dharamshala Members:<span class="text-danger">  Control Panel</span></h3>
                                                              <a href="members.php"><button class="btn btn-primary float-right"  type="submit" > Add More Members</button>
                                                               </a>
                                                               <form action="pdf_gen.php" method="POST">
                                                                 <button type="submit" name="gen_pdf" class="btn btn-success float-right" style="margin-right: 10px;"><i class="fa fa-download" aria-hidden="true"></i> PDF</button> 
                                                               </form>
                                                       </div>

                                                       <div class="card-body">
                                                        <?php
                                                         if(isset($_POST['delete']))
     {
      $id = $_POST['id'];
    
      $query = "DELETE FROM members WHERE mid='$id'";

      $query_run= mysqli_query($connection,$query);
       
           }
    ?>
         
                                                                        <?php
                    
                                                                         $sql = "select * from members";
                                                                         $query_run = mysqli_query($connection,$sql);
                                                                           $Srno=1;
                                                                           $location = "uploads/admin/Gallery/Members/";
                    
                                                                              if(mysqli_num_rows($query_run)>0)
                    
                                                                                     {
                               
                                                                         ?>




                                                                 <table id="example1" class="table table-bordered table-striped">
                                                                           <thead>
                                                                                  <tr>
                                                                                          <th>Sr no.</th>
                                                                                          <th>Image</th>
                                                                                          <th>Name</th>
                                                                                          <th> Member ID</th>
                                                                                          <th> Phone</th>
                                                                                          <th> Address</th>
                                                                                          <th> E-mail</th>
                                                                                          <th>Classification</th>
                                                                                          <th>Description</th>
                                                                                          <th>DOB</th>
                                                                                          <th> Joining year</th>
                                                                                          <th> Spouse Name</th>
                                                                                          <th> Spouse DOB</th>
                                                                                          <th> WA DAY</th>
                                                                                          <th> Blood Group</th>
                                                                                          <th> Edit</th>
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
                                                                                   <td><a href="memchangeimage.php?key0=<?php echo  $row["mid"];?>&cid=<?php echo $row["mid"]; ?>'"><img src="<?php echo $location.$row['image']?>" height="100px;"  width="100px;"/></a></td>   
                                                                                   <td> <?php echo $row["name"]; ?> </td>
                                                                                    <td> <?php echo $row["id"]; ?> </td>
                                                                                    <td> <?php echo $row["phone"]; ?> </td>
                                                                                    <td> <?php echo $row["address"]; ?></td>
                                                                                     <td> <?php echo $row["email"]; ?></td>
                                                                                       <td> <?php echo $row["classification"]; ?> </td>
                                                                                       <td><?php custom_echo($row["descr"],80) ?></td>
                                                                                      <td> <?php echo $row["dob"]; ?> </td>
                                                                                       <td> <?php echo $row["jyear"]; ?> </td>
                                                                                   <td> <?php echo $row["spouse_name"]; ?> </td>
                                                                                 <td> <?php echo $row["spousedob"]; ?> </td>
                                                                                   <td> <?php echo $row["waday"]; ?> </td>
                                                                                    <td> <?php echo $row["bdg"]; ?> </td>
                                                                                    <td>
                                                                                   <form method="POST" action="updatemem.php">
                     <input type="hidden" name="e_id" value="<?php echo $row['mid'] ?>">
                    <button type ="submit" name="edit" class="btn btn-primary">Edit</button>
                  </form>
                                                                                    </td>

                                                                                    <td><form action="" onclick="return confirm('Are you sure you wish to delete this User ?');" method="POST"> 
                      <input type="hidden" name="id" value="<?php echo $row['mid'] ?>">
                  
                  <button type ="submit" name="delete" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                </form>
                                                                
                                                                                    </td>
                                                                             </tr>
                                                                             <?php
                                                                              }
                                            
                                                                                ?>
                                                                             
                                                                             </tbody>

                                                                             <tfoot>
                                                                                 <tr>
                                                                                   <td><b>Sr no.</b></td>
                                                                                   <th>Image</th>
                                                                                    <th>Name</th>
                                                                                     <th> Member ID</th>
                                                                                       <th> Phone</th>
                                                                                       <th> Address</th>
                                                                                      <th> Classification</th>
                                                                                       <th>Description</th>
                                                                                      <th>Member DOB</th>
                                                                                      <th> Joining year</th>
                                                                                      <th> Spouse Name</th>
                                                                                      <th> Spouse DOB</th>
                                                                                       <th> WA DAY</th>
                                                                                       <th> Blood Group</th>
                                                                                        <th> Edit</th>
                                                                                        <th> Delete</th>

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
                                             </section>


                </div>
                <!-- / Content wrapper -->
       </div>

        <!-- main wraappr -->
         


</body>
</html>