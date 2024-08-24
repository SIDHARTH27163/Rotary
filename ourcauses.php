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
    <title>Our Causes | RCD</title>

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

<!--
<body id="wrapper" onload="preload()">
  <div id="loading"></div>
-->
<body id="wrapper" >
     <?php
        include './themepart/header3.php';
     ?>

    
<section id="top_banner">
      <div class="banner">
         <div class="inner text-center"> 
            <h2 id="banner-text">Our Causes</h2>
         </div>
        </div>
        <div class="page_info">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-6">
                        <h4 >OUR <span>CAUSES</span></h4>
                    </div>
                </div>
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
    <section id="portfolio">
        <div class="container">
          <div class="row">
                <div class="section-heading text-center">
                    <div class="col-md-12 col-xs-12">
                        <h1>Our <span>Causes</span></h1>
                        
                        <p class="subheading">Rotary is dedicated to <?php include 'admin/dbConfig/dbconfig.php';
                        $sql = "SELECT COUNT(*) as total FROM our_causes";
                        $sql_run = mysqli_query($connection,$sql);
                        $info = mysqli_fetch_assoc($sql_run);
                        echo $info['total'] ; ?> areas of focus to build international relationships, improve lives, and create a better world to support our peace efforts and end polio forever.</p>
                    </div>
                </div>
            </div>
            <div class="row">
             
              <?php include './admin/dbConfig/dbconfig.php';
                    $query = "SELECT * FROM our_causes where status='process'";
                     $query_run = mysqli_query($connection,$query);
                     $location= "admin/uploads/admin/Gallery/Our_causes/";
            
                      if(mysqli_num_rows($query_run)>0)
            
                         {
                          while($row = mysqli_fetch_assoc($query_run))
                       
                        {
                          $aid=$row['ocid'];
                          $astatus=$row['status'];
                       
                           ?>
                 
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 portfolio-item">
                    <div class="portfolio-one">
                        <div class="portfolio-head">
                            <div class="portfolio-img">
                              <a href="<?php echo $location.$row['images']?>" data-lightbox="rcdGallery" data-title="<?php echo $row['title']?>">
                                <img height="220px;" alt="<?php echo $row['title']?>" src="<?php echo $location.$row['images']?>">
                              </a>
                            </div>
                             <div class="portfolio-content">
                            <h5 class="title text-center"><b><?php echo $row['title'] ?> </b></h5>
                            <p style="font-size:20px;"><i><?php custom_echo ($row['descr'],80)?></i></p>
                        </div>
                        </div>
                        <!-- End portfolio-head -->
                        <div class="portfolio-content">
                            <center><p><?php echo"<a href='ocview.php?id=$aid'> <button type='submit' class='btn btn-warning' name='view_more'>learn more  <i style='color:white;'class='fa fa-arrow-circle-o-right' aria-hidden='true'></i></button></a>"?></p></center>
                            
                        </div>
                        <!-- End portfolio-content -->
                    </div>
                    <!-- End portfolio-item -->
                </div>
                   <?php 
                        } 
                      }
                      ?>
                    
                 
                  
                
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