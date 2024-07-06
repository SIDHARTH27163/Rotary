<!DOCTYPE html>
<?php $aid=$_REQUEST['id']; ?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rotract Events View | Rotary Club of Dharamshala</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="scss/main.css">
    <link rel="stylesheet" href="scss/skin.css">
    <link rel="icon" type="image/gif/png" href="img/title.png">
    <link rel="stylesheet" type="text/css" href="scss/lightbox.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="./script/index.js"></script>
    <script type="text/javascript" src="script/lightbox-plus-jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script data-ad-client="ca-pub-3482929739237150" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    </head>

<body id="wrapper" onload="preload()">
  <div id="loading"></div>

     <?php
        include './themepart/headernull.php';
     ?>

    
<section id="top_banner">
      <div class="banner">
         <div class="inner text-center"> 
            <h2 id="banner-text">Rotract Events</h2>
         </div>
        </div>
        <div class="page_info">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-6">
                      <?php  
include 'admin/dbConfig/dbconfig.php';
$sql = "SELECT * FROM r_cover where reid='$aid'";
$rs_result = mysqli_query ($connection,$sql);



    
####### Fetch Results From Table ########

while ($row = mysqli_fetch_assoc($rs_result)) 
{

$aname=$row['revent_name'];
$astatus=$row['status'];

?>
                        <h4>Event name : <span><?php echo "$aname";?></span></h4>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <?php
            }
              ?>
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

    <section id="portfolio">
        <div class="container">
            <div class="row">
              <table id="AdminData" class="table table-bordered table-striped">
                  <thead class="bg-dark">
                  <?php include './admin/dbConfig/dbconfig.php';
                    $query = "SELECT * FROM revent_desc where reid=$aid and status='process' LIMIT 1";
                     $query_run = mysqli_query($connection,$query);
                     $location= "admin/uploads/admin/Gallery/revent_images/";
            
                      if(mysqli_num_rows($query_run)>0)
            
                         {
                          while($row2 = mysqli_fetch_assoc($query_run))
                       
                        {
            
                       
                           ?>
                           <th style="color:#fff;">Description : <span><?php echo $row2['desc']; ?></span></th></tr>

                           <?php
                         }
                       }
                       ?>
                </thead>
              
<tbody>
  <tr>
                <td>
              <?php include './admin/dbConfig/dbconfig.php';
                    $query = "SELECT * FROM revent_desc where reid=$aid and status='process'";
                     $query_run = mysqli_query($connection,$query);
                     $location= "admin/uploads/admin/Gallery/revent_images/";
            
                      if(mysqli_num_rows($query_run)>0)
            
                         {
                          while($row = mysqli_fetch_assoc($query_run))
                       
                        {
            
                       
                           ?>
                 
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 portfolio-item">
                    <div class="portfolio-one">
                        <div class="portfolio-head">
                            <div class="portfolio-img">
                              <a href="<?php echo $location.$row['images']?>" data-lightbox="rcdGallery" data-title="<?php echo $row['images']?>" data-description="Abc">
                              <img alt="<?php echo $row['images']?>" src="<?php echo $location.$row['images']?>">
                              </a>
                            </div>
                        </div>
                        <!-- End portfolio-head -->
      
                        <!-- End portfolio-content -->
                    </div>
                    <!-- End portfolio-item -->
                </div>
                   <?php 
                        } 
                      }
                      ?>
                    </td>
                  </tr>
                  </tbody>

                  <tfoot class="bg-dark">
                   <tr> <th><a href="rotractevents.php"<i style='color:white;'class='fa fa-arrow-circle-o-left' aria-hidden='true'></i>  Back</a></th></tr>
                  </tfoot>
                  </table>
                
                </div>
    </section>

    <?php 
    include './themepart/abv_footer.php';
    include './themepart/footer.php';
    include './themepart/themer.php';
    ?>
     <script type="text/javascript">
      var preloaderc= document.getElementById('loading');
      function preload(){
        preloaderc.style.display='none';
      }
    </script>
    </body>
    </html>