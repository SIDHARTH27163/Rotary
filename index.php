<?php
include 'admin/dbConfig/dbconfig.php';
function make_query($connection)
{
 $query = "SELECT * FROM slider_images ORDER BY id Desc LIMIT 12";
 $result = mysqli_query($connection, $query);
 return $result;
}

function make_slide_indicators($connection)
{
 $output = ''; 
 $count = 0;
 $result = make_query($connection);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '
   <li data-target="#myCarousel" data-slide-to="'.$count.'" class="active"></li>
   ';
  }
  else
  {
   $output .= '
   <li data-target="#myCarousel" data-slide-to="'.$count.'"></li>
   ';
  }
  $count = $count + 1;
 }
 return $output;
}
function make_slides($connection)
{
 $output = '';
 $count = 0;
 $result = make_query($connection);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '<div class="item active">';
  }
  else
  {
   $output .= '<div class="item">';
  }
  $output .= '
   <img class="fill" src="admin/uploads/admin/Gallery/slider_images/'.$row["images"].'" alt="'.$row["title"].'" />
   <div class="carousel-caption slide-up">
    <h2 class="banner_heading"><span>' . $row["title"] . '</span></h2>
                    <h3 class="banner_txt" style="color:#10ff00;">' . $row["description"] . '</h3>
   </div>
  </div>
  ';
  $count = $count + 1;
 }
 return $output;
}
function themeoftheyear($connection)
{

    $output = '';

    // Date incrementer
    $date2 = date("y");
    $dateinc = $date2 + 1;
    $location = "admin/uploads/admin/Gallery/theme_of_the_year/";
    $time1 = date("Y/07/01");
$time_current1 = date("Y/m/d");
    $date = date("Y") . "-" . $dateinc;

    // Date Decrementer
    $date3 = date("Y");
    $datedec = $date3 - 1;
    $dateprev = $datedec . "-" . date('y');

    // Queries//

    $query = "SELECT * FROM add_theme WHERE theme_session = '$date' || theme_session = '$dateprev'";
    $query_run = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_array($query_run)) {
        if($time_current1>=$time1)
        {
        if ($row['theme_session'] == $date) {

            $output .= '<a href="rthemes.php"> <img id="image_theme" src="' . $location . $row["images"] . '" style="height:150; width:150; "></a>';
        } }else {
            if ($row['theme_session'] == $dateprev) {
                $output .= '<a href="rthemes.php"><img id="image_theme" src="' . $location . $row["images"] .'" style="height:150; width:150; " alt="Cinque Terre"></a>';
            }

        }

    }

    return $output;

}



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

/*Wisher fxn commented here */

function wisher($connection)
{
  $output='';
  $date = date("d-M");
 $query = "SELECT * FROM members";
 $result = mysqli_query($connection, $query);
 $output.='<center><img src="img/title.png" height="100px;" width="100px;"></center> ';
  $output.= '<h1 style ="color:white;">Welcome <br>To <br>Rotary Club of Dharamshala</h1>
  <br> 
  ';
     
  while($row = mysqli_fetch_assoc($result)){
      
 if(($row['dob']==$date )&& ($row['waday']==$date)){
       $output.= '
                  <h2 style="color:#fff;">   '.$row["name"].'</h2><br>
                     <h4 style="color:#fff;">You are a year older, a year wiser, a year smarter.<br>
                      Here’s wishing you a blessed Happy Birthday.<br>
                      </h4>
                      <br>
                      ';
                      $output.= '
                  <h2 style="color:#fff;"> '.$row["name"].' & '.$row['spouse_name'].'</h2><br>
                     <h4 style="color:#fff;">To the beautiful couple in all the land, May your anniversary be Happy and Grand.
                         <br>
                      Happy Anniversary!<br>
                      </h4>
                      <br>';
     
 }

  
  else{
  if($row['waday']==$date){

    $output.= '
                  <h2 style="color:#fff;"> '.$row["name"].' & '.$row['spouse_name'].'</h2><br>
                     <h4 style="color:#fff;">To the beautiful couple in all the land, May your anniversary be Happy and Grand.
                         <br>
                      Happy Anniversary!<br>
                     </h4>
                      <br>
                ';

  }
  
      elseif($row['dob']==$date)
  {
    
    $output.= '
                  <h2 style="color:#fff;">   '.$row["name"].'</h2><br>
                     <h4 style="color:#fff;">You are a year older, a year wiser, a year smarter.<br>
                      Here’s wishing you a blessed Happy Birthday.<br>
                      From: Rotary Club of Dharamshala</h4>
                      <br>
                      ';
  }
  }
  



  }
 $output.=' <button style="margin-bottom:10px;" type="submit" class="closebtn btn btn-danger"> Enter</button>';
  return $output;
 

}

/* Wisher comment ends here */


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="scss/main.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="scss/skin.css?v=<?php echo time(); ?>">
    <link rel="icon" type="image/gif/png" href="img/title.png">
    <link rel="stylesheet" href="admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>-->
    <script src="./script/index.js"></script>

    <script src="admin/plugins/datatables/jquery.dataTables.js"></script>
    <script src="admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    <script data-ad-client="ca-pub-3482929739237150" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<!--    new scripts-->
    <!-- Latest compiled and minified CSS -->
<!--
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

 Optional theme 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
-->

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<!--    new scripts-->
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

<body id="wrapper" > 

   <!--<div id="loading"> onload="preload()"</div> -->


  
 <!-- Commented wihser portion birthday and aniversery --> 
 <!--<div id="popupmain" style="display:none;"> -->
    <!-- <div id="popupwisher"> -->
     <!--<?php echo wisher($connection); ?>   -->
     <!-- </div>-->
   <!--</div>-->
   <!--Comment ends here -->


<?php

include './themepart/header1.php';

?>
    
<?php
include 'admin/dbConfig/dbconfig.php';
                                    $location = "admin/uploads/admin/Gallery/Latest_News/";
                                    $query = "SELECT * FROM notice_board ORDER BY id DESC LIMIT 10";
                                    $query_run = mysqli_query($connection, $query);
                                    if (mysqli_num_rows($query_run) > 0) {
                                         while ($row = mysqli_fetch_array($query_run)) {
                                        
                                            
                                       

?>
 <div class="modal fade" id="<?php echo $row['id'];  ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="color:#fff;" id="myModalLabel"> <?php echo $row['Title'] ?>  </h4>
      </div>
      <div class="modal-body">
         
        <center><img src="<?php echo $location.$row['file']?>" width="100%;" id="modal_image" ></center>
        


      </div>
     
    </div>
  </div>
</div>
<?php
}
}
?>

<!-- for news -->
<?php
include 'admin/dbConfig/dbconfig.php';
                                    $location = "admin/uploads/admin/Gallery/Media/";
                                    $query = "SELECT * FROM media ORDER BY mid DESC LIMIT 8";
                                    $query_run = mysqli_query($connection, $query);
                                    if (mysqli_num_rows($query_run) > 0) {
                                         while ($row = mysqli_fetch_array($query_run)) {
                                        
                                            
                                       

?>
 <div class="modal fade" id="<?php echo $row['mid'];  ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="color:#fff;" id="myModalLabel"> <?php echo $row['images']?>  </h4>
      </div>
      <div class="modal-body">
         
        <center><img src="<?php echo $location.$row['images']?>" width="100%;" id="modal_image" ></center>
        


      </div>
     
    </div>
  </div>
</div>
<?php
}
}
?>
<!-- for news modal ends  -->
<!--    wave s starts-->
<!--
    <svg xmlns="http://www.w3.org/2000/svg" class="wave" viewBox="0 0 1440 215">
  <path fill="#0099ff" fill-opacity="1" d="M0,160L60,144C120,128,240,96,360,74.7C480,53,600,43,720,80C840,117,960,203,1080,213.3C1200,224,1320,160,1380,128L1440,96L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
</svg>
-->
<!-- wave ends-->
<!-- corusel starts here -->
   <div class="banner">
   <div class="row">
    <div class="col-sm-6 banner-top">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <?php echo make_slide_indicators($connection); ?>
    </ol>

    <div class="carousel-inner">
     <?php echo make_slides($connection); ?>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
     <span><i class="fa fa-angle-left" aria-hidden="true"></i></span>
     <span class="sr-only">Previous</span>
    </a>

    <a class="right carousel-control" href="#myCarousel" data-slide="next">
     <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
     <span class="sr-only">Next</span>
    </a>

   </div>
    </div>
    <div class="col-sm-6 text-align banner-top-right">
    <!-- text on right -->
    <div class="text-align">
                    <div class="section-heading">
                        <h2>What is <span>Rotary</span> ?</h2>
                    </div>
                    <p style="text-align: justify">
                        
                        <br> 
                        Rotary is a global network of 1.2 million neighbors, friends, leaders, and problem-solvers who see a world where people unite and take action to create lasting change – across the globe, in our communities, and in ourselves.</p>

                        
                        <br>
                      <p style="text-align: justify">
                        Solving real problems takes real commitment and vision. For more than 110 years, Rotary's people of action have used their passion, energy, and intelligence to take action on sustainable projects. From literacy and peace to water and health, we are always working to better our world, and we stay committed to the end.
</p>
                      <br>
                      

<h2>Our <span>Mission</span></h2>

<br>

<p style="text-align: justify">
We provide service to others, promote integrity, and advance world understanding, goodwill, and peace through our fellowship of business, professional, and community leaders.
</p><br>
<div class="section-heading row">
                        <h4>Read More About <span><a href="What_is_rotary.php" class="view_button">Rotary </a></span></h2>
                    </div>
                </div>
    <!-- text on right ends -->
    </div>
   
   </div>

   </div>
   <!-- crousel ends here -->
   <!--main banner ads-->
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
   <!--main banner ads ends-->
<!--   first panel starts-->

<!--    second panel starts-->
<section id="about">
        <div class="image-holder col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-left">
            <div class="background-imgholder">
                <img src="img/aboutus1.png" alt="about" class="responsive" style="display:none;" />
            </div>
        </div>

        <div class="container-fluid">

            <div class="col-md-7 col-md-offset-5 col-sm-8 col-sm-offset-2 col-xs-12 text-inner ">
                <div class="text-block">
                    <div class="section-heading">
                        <h1>ABOUT <span>US</span></h1>
                        <p class="subheading"><span>Rotary Club of Dharamshala</span>, Club No. 15242,<br><span>  District 3070</span></p>
                    </div>

                    <ul class="aboutul">
                        <li style="text-align:justify;"><p><span><b>Rotary Club of Dharamshala</b></span>, chartered on 1982, as Club Number 15242 is one of the most Elite clubs of District 3070 and has risen to great heights with in the Rotary community with dedicated service to the community and camaraderie amongst its members.</p></li>
                    </ul>
                    
                     
                   <a href="aboutus"><button type="button" name="aboutus" class="btn btn-primary slide">Learn More  <i class="fa fa-caret-right"></i> </button>
                   </a>


                </div>
            </div>
        </div>
    </section>
<!--    second panel ends-->

<!--   third panel starts-->
    <section id="testimonial" class="testimonial">
        <div class="container">
            <div class="section-heading text-center">
                <div class="col-md-12 col-xs-12">
                    <h1> Our Designated Members</h1>
                </div>
            </div>

            <div class="row">
                <?php 

$time = date("Y/07/01");
$time_current = date("Y/m/d");
$dateex = date("y");

    $dateincre = $dateex + 1;
    $datep = date("Y") . "-" . $dateincre;
    $dateYearCurrent = date("Y");

    $location = "admin/uploads/admin/Gallery/designated_members/";
    $datenew = date("Y");
    $datedecre = $datenew - 1;
    $dateprevi = $datedecre . "-" . date('y');

    $query = "SELECT * FROM desig_members";
    $query_run = mysqli_query($connection, $query);

    if(mysqli_num_rows($query_run)>0)
    {

    while ($row = mysqli_fetch_array($query_run)) {
         $id = $row['id'];
        
        
            ?>
           
        <div class="modal fade" id="<?php echo $id;  ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="color:#fff;" id="myModalLabel">DESIGNATED MEMBER : <?php echo $row['name'] ?></h4>
      </div>
      <div class="modal-body">
         
        <center><img src="<?php echo $location.$row['image']?>" height="200px" width="200px" style="border-radius: 100%;"></center>
        <br>
        <h4 style="text-align: center;"><?php echo $row['name'] ?></h4>

        <h5 style="text-align: center;"><span><?php echo $row['designation'] ?></span></h5>
        <br>
        <p style="color:#000; text-align: justify; font-size: 18px;"><?php echo $row['description'] ?></p>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>


       
<?php

if($time_current>=$time)
{
    if($row['dm_session']==$datep)
    {
       
        ?>
           
  <div class="col-lg-4 col-xs-12 col-md-4 col-sm-12 block " style="margin-top:30px;">
                    <div class="testimonial_box">
                        <p><?php custom_echo($row["description"],100) ?>
                        
                        <a href="#<?php echo $id; ?>" class="btn btn-warning btn-small"  data-toggle="modal">Read more</a>
                    </p>
                    </div>
                    <div class="arrow-down"></div>
                    <div class="testimonial_user">
                        <div class="user-image"><img src="<?php echo $location.$row["image"]?>" style="border-radius: 100%;" alt="user" class="img-responsive" /></div>
                        <div class="user-info">
                            <h5><?php echo $row["name"]?></h5>
                            <p class="desg"><?php echo $row["designation"] ?></p>
                        </div>
                    </div>
                </div>
<?php
}

}
else
{
    if($row['dm_session']==$dateprevi)
    {
        
    ?>
    <div  class="col-lg-4 col-xs-12 col-md-4 col-sm-12 block " style="margin-top:30px;">
                    <div class="testimonial_box">
                        <p><?php custom_echo($row["description"],100) ?>
                        
                        <a href="#<?php echo $id; ?>" class="btn btn-warning btn-small"  data-toggle="modal">Read more</a>
                    </p>
                    </div>
                    <div class="arrow-down"></div>
                    <div class="testimonial_user">
                        <div class="user-image"><img src="<?php echo $location.$row["image"]?>" style="border-radius: 100%;" alt="user" class="img-responsive" /></div>
                        <div class="user-info">
                            <h5><?php echo $row["name"]?></h5>
                            <p><?php echo $row["designation"] ?></p>
                        </div>
                    </div>
                </div>
<?php
}
}
}
}
?>


            </div>
        </div>

    </section>
<!--    third panel ends-->
<div class="container">
   <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2356230708034464"
     crossorigin="anonymous"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="autorelaxed"
     data-ad-client="ca-pub-2356230708034464"
     data-ad-slot="2894234334"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<!--   videos panel starts-->
    <section id="process"  style="padding-top:10px; padding-bottom:10px;">
        <div class="container">
            <div class="section-heading text-center">
                <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12" style="" >
                    <h1><span>Vi</span>de<span>os</span></h1>
                   
                </div>
            </div>
       
            <div class="row"style="">
                <br>
                     <?php
$query = "SELECT * FROM videos ORDER BY id DESC Limit 3";
    $result = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_array($result)) {

$text = $row['link'];
    ?>
    <div class="col-md-4 col-xs-12 col-lg-4 col-sm-4">
                <iframe width="100%" height="200" style="border: inset; " src="https://youtube.com/embed/<?php echo $text; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                  <?php
     }
         ?>
                <br>
                <br>
                <div class=" col-xs-12 col-md-12 col-lg-12 col-sm-12 ">
                    <div class="row">
                
                 
                 <div class=" col-xs-12 col-md-6 col-lg-6 col-sm-6" style="margin-top:10px; margin-bottom:10px;">
                <center><a href="https://vimeopro.com/rotary/rotary-videos"><input type="button" name="videos" value=" Rotary International Videos >>" class="btn btn-primary " style="margin:0px; padding:5px; font-size:12px;"></a></center></div>
                <div class=" col-xs-12 col-md-6 col-lg-6 col-sm-6" style="margin-top:10px; margin-bottom:10px;">
                <center> <a href="videos.php"><input type="button" name="videos" value=" Rotary Club of Dharamshala Videos >>" class="btn btn-primary"style="margin:0px; padding:5px;font-size:12px;"></a></center></div>
                </div>
                </div>
                
         
         <br>
         <br>
                 
         </div>
       
         
                
                
                
               
                
            </div>

    </section>
<!--    videos panel ends here-->

<!--    end panel starts-->
 <section  class="bottom-info" style=" padding-top:10px; padding-bottom:10px;">
      <div class="container" >
  <div class="row">
   
 <!-- rotary in news starts -->
 <div class="col-sm-6" >
        <div class="card" style="padding: 8px; ">
     
        <h6 class="card-header bg-dark" style="color:#fff; line-height: 44.5px; text-align: center;"><span>Rotary in </span> News ! </h6>

        <div class="card-body" style="border: 10px solid transparent;
  padding-right:10px;
  padding-left:10px;
 height:230px;

  
  border-image: url(img/border.png) 40 stretch;">

        
                  


                                <?php
                                    include 'admin/dbConfig/dbconfig.php';
                                    $location = "admin/uploads/admin/Gallery/Media/";
                                    $query = "SELECT * FROM media ORDER BY mid DESC LIMIT 10";
                                    $query_run = mysqli_query($connection, $query);
                                    if (mysqli_num_rows($query_run) == 0) {

                                        echo "<center class='text-danger' style='font-size:18px;'>No new Notices</center>";

                                    } else {
                                        ?>
                                                                        <marquee id='scroll_news' style="font-family:Book Antiqua; font-size:16px ;"  scrolldelay="350" direction="left" loop="true">
                                                                            <?php

                                        while ($row = mysqli_fetch_array($query_run)) {

                                            ?>
                                           

                                                                    
                                                                        
                                                                        <a href="#<?php echo $row['mid']; ?>"onMouseOver="document.getElementById('scroll_news').stop();" onMouseOut="document.getElementById('scroll_news').start();" style="margin-right:10px;" data-toggle="modal">
                                                                             <img  id="latest_news_image" height ="200px;" width="350px;" alt="<?php echo $row['images']?>" src="<?php echo $location.$row['images']?>"></a>
                                                                        
                                                                    
                                                                    

                                                                    <?php
                                    }
                                    }
                                    ?>
                                </marquee>



                </div>
                     </div>
                 </div>
 <!-- rotary in news ends -->
<div class="row">
      
         
<!-- news starts -->
    <div class="col-sm-6" >
        <div class="card" style="padding: 8px; ">
     
        <h6 class="card-header bg-dark" style="color:#fff; line-height: 44.5px; text-align: center;"><span>Upcoming</span> Rotary Events And Advertisement</h6>

        <div class="card-body scroll" style="border: 10px solid transparent;
  padding-right:10px;
  padding-left:10px;
  height:230px;
  
  border-image: url(img/border.png) 40 stretch;">

        
                  


                                <?php
                                    include 'admin/dbConfig/dbconfig.php';
                                   // $location = "admin/uploads/admin/Gallery/Latest_News/";
                                    $query = "SELECT * FROM rotary_events ORDER BY id DESC LIMIT 1";
                                    $query_run = mysqli_query($connection, $query);
                                    if (mysqli_num_rows($query_run) == 0) {

                                        echo "<center class='text-w' style='font-size:20px; color:white; font-weight: 700;'></center>";

                                    } else {
                                        ?>
                                                                        <div  style="font-family:Book Antiqua; font-size:16px ;"  >
                                                                            <?php

                                        while ($row = mysqli_fetch_array($query_run)) {

                                            ?>
                                           

                                                                    
                                                                        
                                                                        <h2 style="color:white"> Event Title:
                                                                        <?php echo $row['title']; ?>
                                        </h2>
                                        <h4 style="color:white">Date:
                                                                        <?php echo $row['e_date']; ?>
                                        </h4>                            
                                        <h5 style="color:white">Location:
                                                                        <?php echo $row['e_loc']; ?>
                                        </h5>         
                                                                    

                                                                    <?php
                                    }
                                    }
                                    ?>
                                               <div class="row col-sm-12">
                                                                            
<!--    Advertisement block on home page. Upcoming Evernts session                                                                         <center class=" col-sm-4 th">
                                                                            <?php echo themeoftheyear($connection); ?>
                                                                            </center>   
                                                    <center class="th scroll col-sm-8">
                                                        
                                                        
                                                        <center class='text-w' style='font-size:18px; color:white; font-weight: bold;'>Advertise With US</center>
                                                        <button  class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
 Place Advertisement
</button>
                                                                           
                                                                            </center>
                                                     <img src="img/logo.png" width="235px" alt="" class="d-inline-block align-middle mr-2">
                                                                            </div>                    
                                </div>
Advertisement column Ends here
-->

                </div>
                     </div>
                 </div>
    
                 <!-- news ends  -->
                 <!-- theme of the year starts -->
<!--
                 <div class="col-sm-4"  >
         <div class="card" style="padding: 8px;  ">
  <a href="rthemes.php"><h6 class="card-header bg-dark" style="color:#fff; line-height: 34.5px;"><marquee behavior="alternate"> <span>Advertise</span> With <span>Us</span></marquee></h6></a>
  <div class="card-body" style="border: 10px solid transparent;
  
 height:230px;
 padding-top:5px;
  
  border-image: url(img/border.png) 40 stretch;">
    <center>
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
 Palce Add Here
</button>
        <center class="th">
                                                                            <?php echo themeoftheyear($connection); ?>
                                                                            </center>
      </center>
  </div>
</div>
</div>
-->
                 <!-- theme of the year ends -->
      </div>
  </div>
</div>
    </section>
<!--   end panel ends here-->
    
<!--    add modal-->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">About Contact</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          Please Contact Us on Email :<a href="mailto:rotaryclubofdharamshala@gmail.com">rotaryclubofdharamshala@gmail.com</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>
<!--add Modal-->
    <?php
include './themepart/abv_footer.php';
include './themepart/footer.php';
?>


    <div id="panel">
        <div id="panel-admin">
            <div class="panel-admin-box">
                <div id="tootlbar_colors">
                    <button class="color" style="background-color:#1abac8;" onclick="mytheme(0)"></button>
                    <button class="color" style="background-color:#ff8a00;" onclick="mytheme(1)"> </button>
                    <button class="color" style="background-color:#b4de50;" onclick="mytheme(2)"> </button>
                    <button class="color" style="background-color:#e54e53;" onclick="mytheme(3)"> </button>
                    <button class="color" style="background-color:#1abc9c;" onclick="mytheme(4)"> </button>
                    <button class="color" style="background-color:#159eee;" onclick="mytheme(5)"> </button>
                </div>
            </div>

        </div>
        <a class="open" href="#"><span><i class="fa fa-gear fa-spin"></i></span></a>
    </div>
    
    <script type="text/javascript">
    //   var preloaderc= document.getElementById('loading');
    //   function preload(){
    //     preloaderc.style.display='none';
    //   }
      
      $(document).ready(function(){
        setTimeout(function(){
           $('#popupmain').css('display','block');
        },5000);

      });
      $('.closebtn').click(function(){
        $('#popupmain').css('display','none');
      });
    </script>
    
</body>
</html>