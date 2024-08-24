<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Paul HArris Fellows | RCD</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="scss/main.css">
    <link rel="stylesheet" href="scss/skin.css">
    <link rel="icon" type="image/gif/png" href="img/title.png">
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
                <h2 id="banner-text">PAUL HARRIS FELLOWS</h2>
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

    <section id="features">
        <div class="container">
            <div class="card">
            <div class="card-header">
              <center><h2 class="card-title"><span>Rotary Club of Dharamsala </span>( Club No. 15242 R.I. District 3070)</h2></center>
              <br>
              <center><h3 class="card-title">PAUL <span> Harris</span> Fellows</h3>
                
          </center>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <br>
              <h1 style="text-align:center;">The origins of<span> Paul Harris Fellow </span> recognition</h1>
              <br>

              <p style="text-align: center;">The Paul Harris Fellow recognition acknowledges individuals who contribute, or who have contributions made in their name, of $1,000 to <a href="https://www.rotary.org/en/history-paul-harris-fellow-recognition#:~:text=The%20origins%20of%20Paul%20Harris,%241%2C000%20to%20The%20Rotary%20Foundation." target="_blank"><span><u><b>The Rotary Foundation</b></u></span></a><br><br></p>
              <?php
              include 'admin/dbConfig/dbconfig.php';
                 $Srno = 1;
            
            $sql = "select * from phf where status='process'";
             $query_run = mysqli_query($connection,$sql);
            $Srno=1;
            
            if(mysqli_num_rows($query_run)>0)
            
            {
                       
         ?>
         

              <table id='example1' class='table table-bordered table-striped'>
                <thead>
                <tr>
                    <th class="col-xs-3 col-lg-3 col-md-3 col-sm-3"><center>Sr no.</center></th>

            <th class="col-xs-6 col-lg-6 col-md-6 col-sm-6"><center> Name of the Paul Harris Fellows</center></th>
            <th class="col-xs-3 col-lg-3 col-md-3 col-sm-3"><center>PHF</center> </th>
            
                </tr>
                </thead>
                <tbody>

               <?php
               
                while($row = mysqli_fetch_assoc($query_run))
                       
                        {
                   ?>
                
             <tr>
             <td class="col-xs-3 col-lg-3 col-md-3 col-sm-3"><center><?php echo $Srno++ ;?></center> </td>
                  <td class="col-xs-6 col-lg-6 col-md-6 col-sm-6"><?php echo $row['phfn'] ?></td>
                  <td class="col-xs-3 col-lg-3 col-md-3 col-sm-3"><center><?php echo $row['comment'] ?></center></td>
                  
                      

  
              
            </tr>
          
         <?php  
      
                }
                       
             ?>
                </tbody>
                <!-- <tfoot>
                <tr>
                      <th>Sr no.</th>
          
            <th> Name of the Paul Harris Fellows</th>
            <th> Comment</th>
          
            
                </tr>
                </tfoot> -->
              </table>
              <?php
            }
            ?>
                
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
    