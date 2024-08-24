<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>RDC | Contact Us</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="scss/main.css">
    <link rel="icon" type="image/gif/png" href="img/title.png">
    <link rel="stylesheet" href="scss/skin.css">
    <link rel="stylesheet" href="admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script data-ad-client="ca-pub-3482929739237150" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script src="./script/index.js"></script>
</head>
<!--
<body id="wrapper" onload="preload()">
  <div id="loading"></div>
-->
<body id="wrapper" >

<?php
        include './themepart/header5.php';
     ?>


    <section id="top_banner">
        <div class="banner">
            <div class="inner text-center">
                <h2 id="banner-text">Contact us</h2>
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
                        <h2>Contact <span>Us</span></h2>
                    </div>
                    <br>
                    <br>
                  <p style="text-align: center; font-size: 22px;"> Thank you for <span>visiting</span> our website. Do you have questions or comments about <span>Rotary</span> or our <span>Club</span>, or about this <span>Website</span>? We'd like to hear  from you! Please <span>Contact</span> us:<br><br>
                    <?php
                      $query = "SELECT * FROM header_section";
                      $query_run = mysqli_query($connection,$query);
                      $row = mysqli_fetch_assoc($query_run);
                      ?>
                      
                      <div class="card-body">
                        <p class="text-center" style="font-size: 20px;"><span><b>Add</span>ress :</b>  <?php echo $row['address']?></p>
                    <br>
                    <p class="text-center" style="font-size: 20px;"><b><span>E-</span>mail :</b> <?php echo $row['email']?> </p> 
                    
                    <p class="text-center" style="font-size: 20px; line-height: 30px;"><b><span>Meeting</span> Place :</b> <?php echo $row['meeting']?></p> 
                      </div>
                     <br>
                     <br>
                     <br>
                      <div class="card-body">
                        <p class="text-center" style="font-size: 25px; font-style:italic;"> You may also contact us via email by clicking the below icon:</span> </p>
                        <br>
                        <br>
                        <span><a href="mailto:<?php echo $row['email'] ?>"><i class="fa fa-envelope text-center" style="font-size:55px;"></i></a></span>
                      </div>
                    

                   
                    
                </div>
            </div>
        </div>
    </section>

   
     

   
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