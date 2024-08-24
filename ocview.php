<!DOCTYPE html>
<?php $aid=$_REQUEST['id']; ?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Our Causes View | Rotary Club of Dharamshala</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="scss/main.css">
    <link rel="stylesheet" href="scss/skin.css">
    <link rel="icon" type="image/gif/png" href="img/title.png">
    <link rel="stylesheet" type="text/css" href="scss/lightbox.min.css">
      <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="./script/index.js"></script>
    <script type="text/javascript" src="script/lightbox-plus-jquery.min.js"></script>
        <script src="admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
        <script data-ad-client="ca-pub-3482929739237150" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
          $(function () {
            $("#example1").DataTable();
            $('#example2').DataTable({
              "paging": true,
              "lengthChange": false,
              "searching": false,
              "ordering": true,
              "info": true,
              "autoWidth": false,
            });
          });
</script>
    </head>

<body id="wrapper">
  <!--<div id="loading"></div>-->

     <?php
        include './themepart/headernull.php';
     ?>

    
<section id="top_banner">
      <div class="banner">
         <div class="inner text-center">
                               <?php  
include 'admin/dbConfig/dbconfig.php';
$sql = "SELECT * FROM our_causes where ocid='$aid'";
$rs_result = mysqli_query ($connection,$sql);



    
####### Fetch Results From Table ########

while ($row = mysqli_fetch_assoc($rs_result)) 
{
$aname=$row['title'];
$astatus=$row['status'];
$asid = $row['ocid'];

?> 
            <h2 id="banner-text"><?php echo "$aname";?></h2>
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
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-align">
                    <div class="section-heading text-center">
                      

                        <h2><span><?php echo $row['title'] ?></span></h2>
                    </div>
                    <?php
                  }
                  ?>

                 

                    <div class="subheading text-center">
                       <?php include './admin/dbConfig/dbconfig.php';
                    $query = "SELECT * FROM ocdet where title='$aname' group by title";
                     $query_run = mysqli_query($connection,$query);

            
                      if(mysqli_num_rows($query_run)>0)
            
                         {
                          while($row2 = mysqli_fetch_assoc($query_run))
                       
                        {

              $title = $row2['title'];
            
                       
                           ?>
                       <br>
                        <h6><?php echo $row2['subh'] ?></h6>
                       
                    </div>
                    <br><br>
                    <p style="text-align: justify; font-size: 16px;"><?php echo $row2['descr'] ?></p>
                        
                     



                    
                    
                </div>
               <?php

             }
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
     
    </body>
    </html>