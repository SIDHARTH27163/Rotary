
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Matching Grants Footer CP | Rotary Club Dharamshala</title>
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
<dmy>
  <div id="wrapper">
    <?php
    include'./themepart/topmenu.php';
    include'./themepart/sidebar.php';

    ?>
    <?php include 'dbConfig/dbconfig.php'; ?>


  <div class="content-wrapper">


  
    

    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Matching Grants Footer</h1>
          </div>          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">RCD : Matching Grants Footer</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
     
       <!-- Main content -->

             

       
              <section class="content">

                    
                    <div class="card">
                      <div class="card-header bg-dark">
                        <h3 class="card-title  ">Rotary Club Of Dharamshala Matching Grants Footer:<span class="text-danger">  Control Panel</span></h3>

                        <a href="matching_grants_footer.php" class="float-right"><input type="button" name="cmem" class="btn btn-primary" value="Add More"></a>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                
                 <?php
              include 'dbConfig/dbconfig.php';
                 $Srno = 1;
            
            $sql = "select * from mgrcdf where status='process'";
             $query_run = mysqli_query($connection,$sql);
            $Srno=1;
            
            if(mysqli_num_rows($query_run)>0)
            
            {
                       
         ?>
         

              <table id='example1' class='table table-bordered table-striped'>
                <thead>
                <tr>
                    <th>Sr no.</th>

            <th>Title</th>
            <th> Description</th>
            <th> Edit</th>
            
                </tr>
                </thead>
                <tbody>

               <?php
               
                while($row = mysqli_fetch_assoc($query_run))
                       
                        {
                   ?>
                
             <tr>
             <td><?php echo $Srno++ ;?> </td>
                  <td><b><u><?php echo $row['title'] ?></u></b></td>
                    <td><p><?php echo $row['descr'] ?></p></td>
                 
                  <td>
    <button class="btn btn-primary" data-toggle="modal" type="button" data-target="#AdminModal<?php echo $row['mgfid']?>">Edit</button>
  </td>
                  
                      

  
              


          
         <?php  

         include'updatemgf.php';
      
                }
                       
             ?>
             
                </tbody>
                <tfoot>
                <tr>
                      <th>Sr no.</th>
          
            <th>Title</th>
            <th> Description</th>
            <th> Edit</th>
            
                </tr>
                </tfoot>
              </table>
              <?php
            }
            ?>
                         
                                              </div>
                      <!-- /.card-dmy -->
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

</dmy>
</html>