<!DOCTYPE html>
<?php $aid=$_REQUEST['id']; ?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gallery View | Rotary Club of Dharamshala</title>

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

<body id="wrapper" >
     <?php
        include './themepart/headernull.php';
     ?>

    
<section id="top_banner">
      <div class="banner">
         <div class="inner text-center"> 
            <h2 id="banner-text">GALLERY</h2>
         </div>
        </div>
        <div class="page_info">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-6">
                      <?php  
include 'admin/dbConfig/dbconfig.php';
$sql = "SELECT * FROM tbl_album where albumid='$aid'";
$rs_result = mysqli_query ($connection,$sql);



    
####### Fetch Results From Table ########

while ($row = mysqli_fetch_assoc($rs_result)) 
{
$aimage=$row['image'];
$aname=$row['name'];
$adesc=$row['adesc'];
$astatus=$row['status'];

?>
                       
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
              <table id="AdminData" class="table table-bordered table-striped">
                  <thead class="bg-dark">
                    <tr>
                    <th style="color:#fff;">Description : <span><?php echo "$adesc"; ?></span></th></tr>
                </thead>
              <?php
            }
              ?>
<tbody>
  <tr>
                <td>
              <?php include './admin/dbConfig/dbconfig.php';
                    $query = "SELECT * FROM tbl_gallery where aid=$aid and status='process'";
                     $query_run = mysqli_query($connection,$query);
                     $location= "admin/uploads/admin/Gallery/gupload/";
            
                      if(mysqli_num_rows($query_run)>0)
            
                         {
                          while($row = mysqli_fetch_assoc($query_run))
                       
                        {
            
                       
                           ?>
                 
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 portfolio-item">
                    <div class="portfolio-one">
                        <div class="portfolio-head">
                            <div class="portfolio-img">
                              <a href="<?php echo $location.$row['gimages']?>" data-lightbox="rcdGallery"  data-description="Abc">
                              <img alt="<?php echo $row['gimages']?>" src="<?php echo $location.$row['gimages']?>">
                              </a>
                            </div>
                        </div>
                        <!-- End portfolio-head -->
      <!--data-title="<?php echo $row['gimages']?>"-->
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
                   <tr> <th><a href="g@llery.php"<i style='color:white;'class='fa fa-arrow-circle-o-left' aria-hidden='true'></i>  Back</a></th></tr>
                  </tfoot>
                  </table>
                
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