<?php $aid=$_REQUEST['id']; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Media | Rotary Club of Dharamshala</title>

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

<body id="wrapper">
  

     <?php
        include './themepart/header4.php';
     ?>

    
<section id="top_banner">
      <div class="banner">
         <div class="inner text-center"> 
            <h2 id="banner-text">Media</h2>
         </div>
        </div>
        <div class="page_info">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-6">
                                    <?php  
include 'admin/dbConfig/dbconfig.php';
$sql = "SELECT * FROM media_session where id='$aid'";
$rs_result = mysqli_query ($connection,$sql);



    
####### Fetch Results From Table ########

while ($row = mysqli_fetch_assoc($rs_result)) 
{

$aname=$row['m_session'];


?>
                        <h4>Year : <span><?php echo "$aname";?></span></h4>
                        <?php
}
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
                  
              
<tbody>
  <tr >
                <td>
              <?php include './admin/dbConfig/dbconfig.php';
                    $query = "SELECT * FROM media where  sid='$aname' order by mid desc";
                     $query_run = mysqli_query($connection,$query);
                     $location= "admin/uploads/admin/Gallery/Media/";
            
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
                   <tr> <th><a href="index.php"<i style='color:white;'class='fa fa-arrow-circle-o-left' aria-hidden='true'></i>  Back</a></th></tr>
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