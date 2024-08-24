<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Charter Members</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="scss/main.css">
    <link rel="stylesheet" href="scss/skin.css">
    <link rel="icon" type="image/gif/png" href="img/title.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="./script/index.js"></script>
    <script src="admin/plugins/datatables/jquery.dataTables.js"></script>
    <script data-ad-client="ca-pub-3482929739237150" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
   
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
                <h2 id="banner-text">Charter Members</h2>
            </div>
        </div>

    </section>
    

    <section id="features" style="padding-bottom:10px;">
        <div class="container">
            <div class="card ">
            <div class="card-header">
              <center><h2 class="card-title">Cahrter <span>Members</span>
                </h2>
            
          </center>
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
    <section id="about-page-section-3">
        <div class="container">
            <div class="row">

              <table id="example2" class="table table-bordered table-striped" >
                <tbody id="show_desig">
                  <?php
                  $location = "admin/uploads/admin/Gallery/Charter_members/";
                 //SQL query to fetch the phone models belongs to the entered brand to the input field
                  $sql = "SELECT * FROM charter_members";
                  // execution of the query. Output a boolean value
                  $res = mysqli_query($connection,$sql);
                  
                  //Concatenate fetched items to the output variable with HTML option tags to display
                  // Check whether there are results or not
                  if(mysqli_num_rows($res)>0){
                    //Fetch the models into an array belongs to a particular brand name/id
                    while ($row = mysqli_fetch_assoc($res))
                     {
                      ?>
                  <tr>
                  <td style="text-align:center; font-family:Arial, sans-serif;"><center><img style="border-radius:100%; border:2px cadetblue solid;" height="263px" width="278px" src="<?php echo $location.$row['image']?>"  alt="<?php echo $row['image']?>"></center>
                  <br>
                  <h3><span><?php echo $row['name'] ?></span></h3>
  
            </td>
            </tr>
            <tr>
                   <td> <p style="letter-spacing:0.2px; color:#000; line-height:2.0em; text-align:justify; font-family:Arial, sans-serif; font-size:18px;" ><?php echo $row['description'] ?></p></td>
                    </tr>
                    <tr><td><hr></td></tr>
                    <?php
                  }
                }
                ?>

                  

                </tbody>
              </table>
                
                
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