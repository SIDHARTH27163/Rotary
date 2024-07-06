<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>About us | Rotary Club Of Dharamshala</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="scss/main.css">
    <link rel="icon" type="image/gif/png" href="img/title.png">
    <link rel="stylesheet" href="scss/skin.css">
    <link rel="stylesheet" href="admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="./script/index.js"></script>
</head>
<body id="wrapper" >
    <!--remove onload="preload()" from body-->
 <!--<div id="loading"></div> also remove this line-->
      <?php
        include './themepart/header2.php';
     ?>



    <section id="top_banner">
        <div class="banner">
            <div class="inner text-center">
                <h2 id="banner-text">About Us</h2>
            </div>
        </div>

    </section>


    <section id="about-page-section-3">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center ">
                    <div class="section-heading text-center text-jusitfy">
                        <h2>Welcome to <span>Rotary Club of Dharamshala</span>, Club No. 15242,<br><span>  District 3070</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-7  " style="text-align: justify;">
                    <p>
                        <br>
                        <br> 
                        <span><b>Rotary Club of Dharamshala</b></span>, chartered on 1982, as Club Number 15242 is one of the most Elite clubs of District 3070 and has risen to great heights with in the Rotary community with dedicated service to the community and camaraderie amongst its members. The Club comes in to existence by an initiative of Rotary Club of Pathankot and the Club was formally inaugurated by Rotarian Jagdish Kapoor District Governor of District 309 of that time. Rtn. Late Kr. Tara Chand was the appointed as President of the Club and Rtn. Dr. Vijay Sharma was appointed as Secretary of the Club for the year 1982-83.

                        <br>
                        <br>

                        Rotary Club of Dharamshala comprising of more than 60 active members from the business and professional community of Dharamshala. The Rotary motto of <span><b>‘Service Above Self’</b></span> is passionately pursued by Rotary Club of Dharamshala member’s unique philosophy of earnestly fulfilling community responsibilities and a passion for great fellowship and lasting friendship.


                        <br>
                        <br>
                        Over the years of its existence the Rotary Club of Dharmshala has conducted various programs in all the avenues of service. Starting with small service projects like medical examination of school children, providing books and scholarships to school and college students, vocational seminars, the Rotary Club of Dharamshala has come a long way to provide today medical diagnostic services to the under-privileged, annual health camp, tree plantation etc. on a regular and sustainable basis and sponsoring Rotaract and Interact Club to develop community awareness among our youths and to introduce Rotary ideals to them.

                        <br>
                        <br>
                        
                        If you think you might be interested in joining us, Please Fill the form.




                    </p>
                    
                </div>
                
                
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5">
                    <img height="100" width="auto" src="img/logo.png" class="attachment-full img-responsive" alt="logo">
<br><br>

         
               <h2 class = "text-center">Join <span>Us</span></h2>
                    <form action="" method="POST">

            <div class="modal-body">
            <div class="form-group">
            <label> Name</label>
          <input type="text" name="name" class="form-control" value="" placeholder="Enter Name" required>
        </div>
        <div class="form-group">
          <label>Age</label>
          <input type="number" size="4" name="age" min="18" required class="form-control" placeholder="Enter Age">
        </div>
        <div class="form-group">
            <label> Email</label>
          <input type="email" name="email" class="form-control" value="" placeholder="Enter email" required>
        </div>
        <div class="form-group">
            <label> Contact number</label>
          <input type="text" name="Phone" pattern="[7-9]{1}[0-9]{9}" 
       title="Phone number with 7-9 and remaing 9 digit with 0-9" placeholder="Enter Contact Number" required class="form-control">
        </div>
        <div class="form-group">
          <label>Address</label>
          <textarea class="form-control" rows="3" placeholder="Enter Address" name="address" maxlength="10000" required></textarea >
        </div>
        <div class="form-group">
          <label>Why you want to Join Us</label>
          <textarea class="form-control" rows="3" placeholder="Enter Description" name="wju" maxlength="10000" required></textarea >
        </div>
        
        
      
      </div>
      <div class="modal-footer">
        <button type="Submit" name="join_submit" class="btn btn-success">Submit</button>
      </div>
      </form>
                </div>
            </div>
        </div>
    </section>
   
     

   
     <?php 
    include './themepart/abv_footer.php';
    include './themepart/footer.php';
    include './themepart/themer.php';
    ?>
    <!--comment this script-->
    <!--<script type="text/javascript">-->
    <!--  var preloaderc= document.getElementById('loading');-->
    <!--  function preload(){-->
    <!--    preloaderc.style.display='none';-->
    <!--  }-->
    <!--</script>-->
    </body>
    </html>