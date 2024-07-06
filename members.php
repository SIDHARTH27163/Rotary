
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Members</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="scss/main.css">
    <link rel="stylesheet" href="scss/skin.css">
    <link rel="icon" type="image/gif/png" href="img/title.png">
    <link rel="stylesheet" href="admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="./script/index.js"></script>
    <script src="admin/plugins/datatables/jquery.dataTables.js"></script>
    <script src="admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    <script data-ad-client="ca-pub-3482929739237150" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
          $(function () {
            $("#example1").DataTable();
            $('#example2').DataTable({
              "paging": false,
              "lengthChange": false,
              "searching": false,
              "ordering": false,
              "info": false,
              "autoWidth": false,
            });
          });
</script>
</head>

<!--
<body id="wrapper" onload="preload()">
  <div id="loading"></div>
-->
<body id="wrapper" >
  


     <?php
        include './themepart/header2.php';
     ?>
 <section id="top_banner">
        <div class="banner">
            <div class="inner text-center">
                <h2 id="banner-text">ROTARY CLUB MEMBERS</h2>
            </div>
        </div>

    </section>
    
  <div class="container">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2356230708034464"
     crossorigin="anonymous"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="fluid"
     data-ad-layout-key="-e0-15-2i-bn+13e"
     data-ad-client="ca-pub-2356230708034464"
     data-ad-slot="5260543222"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
 
    <section id="about-page-section-3" >
        <div class="container">
            <div class="row">
               <?php
              include 'admin/dbConfig/dbconfig.php';
                 $Srno = 1;
            
            $sql = "select * from members";
             $query_run = mysqli_query($connection,$sql);
            $Srno=1;
            $location = "admin/uploads/admin/Gallery/Members/";
            
            if(mysqli_num_rows($query_run)>0)
            
            {
                       
         ?>

              <table id="example1" class="table table-bordered table-striped " >
                
                 <thead>

                   <tr>
                    <th>Sr no.</th>
                     <th>Name</th>
                     <th> Member ID</th>
                     
                     
                    <th> Joining Year</th>
                    <th>Image</th>
                    
                   </tr>
                 </thead>
                 <tbody>
                  <?php
               
                while($row = mysqli_fetch_assoc($query_run))
                       
                        {
                   ?>
                   <div class="modal fade" id="<?php echo $row['mid'];  ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="color:#fff;" id="myModalLabel">Rotary Club Member : <?php echo $row['name'] ?></h4>
      </div>
      <div class="modal-body">
         
        <center><img src="<?php echo $location.$row['image']?>" height="200px" width="200px" style="border-radius: 100%;"></center>
        <br>
        <h4 style="text-align: center; color:#000;"><span><?php echo $row['name'] ?></span></h4>
        <h6 style="text-align: center; color:#000;"><span><?php echo $row['desig'] ?></span></h6>
        
      <hr>
        <h6 style="text-align:center; color:#000;"><span>Member ID</span> : <?php echo $row['id']?>   |   <span>Joining Year</span> : <?php echo $row['jyear']?></h6>

        <h6 style="text-align: center; color:#000;"><span>Classification</span> : <?php echo $row['classification'] ?></h6>
        <h6 style="text-align: center;color:#000;"><span>Email</span> : <span style="color:#000;  text-transform: lowercase;"><?php echo $row['email'] ?></span>    |   <span>Contact</span> : <?php echo $row['phone']?></h6>
        <hr>
        <h6 style="color:#000;"><span>Profile<span></span> :</h6> <p style="color:#000; text-align: justify; font-size: 18px;"><?php echo $row['descr'] ?></p>
        <hr>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
  
             <tr>
             <td><?php echo $Srno++ ;?> </td>
                  <td><?php echo $row['name'] ?></td>
                  <td><?php echo $row['id'] ?></td>
                  
                  <td><?php echo $row['jyear'] ?></td>
                  <td><center><img src="<?php echo $location.$row['image'] ?>" height="150px;"width="150px;" style="border-radius:100%; border:3px solid cadetblue;"><br><br><a href="#<?php echo $row['mid']; ?>" class="btn btn-warning btn-small"  data-toggle="modal">Read more</a></center></td>
                 
                  
                      

  
              
            </tr>
            

          
         <?php  
      
                }
                       
             ?>

                </tbody>
                <!-- <tfoot>
                  <th> Sr no.</th>
                    <th>Name</th>
                     <th> Member ID</th>
                     <th> Phone</th>
                    <th> Joining Year</th>
                    <th> Classification</th>
                </tfoot> -->
              </table>
                <?php
            }
            ?>
                
                
            </div>
        </div>
    </section>
     <div class="container">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2356230708034464"
     crossorigin="anonymous"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="fluid"
     data-ad-layout-key="-e0-15-2i-bn+13e"
     data-ad-client="ca-pub-2356230708034464"
     data-ad-slot="5260543222"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

    <?php 
    include './themepart/abv_footer.php';
    include './themepart/footer.php';
    include './themepart/themer.php';
    ?>
     <!-- Loading Function Script comment-->
      <!--<script type="text/javascript">-->
    <!--  var preloaderc= document.getElementById('loading');-->
    <!--  function preload(){-->
    <!--    preloaderc.style.display='none';-->
    <!--  }-->
    <!--</script>-->
    
    </body>
    </html>