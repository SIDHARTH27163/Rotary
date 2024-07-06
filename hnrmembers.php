<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Honrary Members</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="scss/main.css">
    <link rel="icon" type="image/gif/png" href="img/title.png">
    <link rel="stylesheet" href="scss/skin.css">
    <link rel="stylesheet" href="admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="./script/index.js"></script>
    <script src="admin/plugins/datatables/jquery.dataTables.js"></script>
    <script data-ad-client="ca-pub-3482929739237150" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script src="admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
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
        include './themepart/headernull.php';
     ?>
 <section id="top_banner">
        <div class="banner">
            <div class="inner text-center">
                <h2 id="banner-text">Honorary Members</h2>
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
    <section id="about-page-section-3">
        <div class="container">
            <div class="row">
              <?php
            
            $sql = "select * from hrnm ";
             $query_run = mysqli_query($connection,$sql);
            $Srno=1;
            $location = "uploads/admin/Gallery/Hrnm/";
            if(mysqli_num_rows($query_run)>0)
            
            {
                       
         ?>
         

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Sr no.</th>
            <th> Honorary Member Year</th>
            <th>Designation</th>
            <th> Name</th>
            <th> Image</th>
                </tr>
                </thead>
                <tdmy>

        <?php
               
                while($row = mysqli_fetch_assoc($query_run))
                       
                        {
         ?>
                
             <tr>
                   <td> <?php echo $Srno++ ; ?> </td>
       <td> <?php echo $row["session"]; ?> </td>
  <td> <?php echo $row['designation']; ?> </td>
  <td> <?php echo $row["Name"]; ?> </td>
<td><a href='admin/uploads/admin/Gallery/Hrnm/<?php echo $row['image'];?>'><img style="border-radius:100%; border:3px solid cadetblue;" src="admin/uploads/admin/Gallery/Hrnm/<?php echo $row['image']; ?>" height="150px";  width="150px"/></a></td>
              
            </tr>
          
         <?php  
      
                }
                       
             ?>
                </tdmy>
                <!-- <tfoot>
                <tr>
                      <th>Sr no.</th>
            
            <th> Honrary Member Session</th>
            <th> Name</th>
            <th> Description</th>
            <th> Image</th>
                </tr>
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