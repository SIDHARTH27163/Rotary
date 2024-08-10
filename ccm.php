<?php
include'./admin/dbConfig/dbconfig.php';
function fill_session($connection)

{
 $output ='';
 $query= "SELECT DISTINCT cm_session from com_session ORDER BY cm_session DESC";
 $result = mysqli_query($connection,$query);

 while($row = mysqli_fetch_array($result))
 {

  $output .='<option value="'.$row["cm_session"].'">'.$row["cm_session"].'</option>';
 }
 return $output; 


} 


?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Club Committee | RCD</title>

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
    <script src="admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    <script data-ad-client="ca-pub-3482929739237150" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
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
        include './themepart/header2.php';
     ?>
 <section id="top_banner">
        <div class="banner">
            <div class="inner text-center">
                <h2 id="banner-text">CLUB Commeties</h2>
            </div>
        </div>

    </section>
    

    <section id="features" style="padding-bottom:5px;">
        <div class="container">
            <div class="card">
            <div class="card-header">
              <center><h2 class="card-title"><span>CLUB</span> Committee 
                

               <h4> <select name="dm_session" id="session_select" onchange="this.value">
                  <option value="" disabled="" selected="">Select year</option>
            <?php 
                
                echo fill_session($connection);
            ?> 
                </select></h4> </h2>
            
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
    <section id="about-page-section-3" style="padding:0px;">
        <div class="container">
            <div class="row">
              <table id="example2" class="table table-bordered table-striped " >
                
                 <thead>
                   <tr>
                    <th style="text-align: center; font-size: 20px;" >Committee</th>
                    <th style="text-align: center; font-size: 20px;" >Chairs & Members</th>
                  </tr>
                 </thead>
                 <tbody id="show_desig">

                </tbody>
                <!-- <tfoot>
                  <th> Sr no.</th>
                    <th> Served as</th>
                    <th>Image</th>
                </tfoot> -->
              </table>
                
                
            </div>
        </div>
        <br>
    </section>
   

    <?php 
    include './themepart/abv_footer.php';
    include './themepart/footer.php';
    include './themepart/themer.php';
    ?>
    <script type="text/javascript">
  
  $(document).ready(function(){
    $('#session_select').change(function(){
      var bid = $(this).val();
      // alert(bid);
      $.ajax({
        url: "cmmdata_data",   
        method: "POST",       
        data:"bid=" + bid,  
        success:function(data)    
        {
          // console.log(data);
          $('#show_desig').html(data);  
        }
      });
    });
  });
</script> 
 <!-- Loading Function Script comment-->
      <!--<script type="text/javascript">-->
    <!--  var preloaderc= document.getElementById('loading');-->
    <!--  function preload(){-->
    <!--    preloaderc.style.display='none';-->
    <!--  }-->
    <!--</script>-->
    </body>
    </html>