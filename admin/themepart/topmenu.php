<?php
// Initialize the session
session_start();
 $sucess = 0;
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"])){
    header("location: login.php");
  
}
else
{

  if((time() - $_SESSION['last_login_timestamp']) > 3600) // 900 = 15 * 60  
           {  
                
                
                       header("location:logout.php");
           }  
}
?>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
      
      <li><iframe src="http://free.timeanddate.com/clock/i7917469/n2301/fn6/fs16/ftb/pa8/tt0/tw1/th1/ta1/tb2" frameborder="0" width="304" height="35"></iframe>
</iframe>
</li>
    </ul>



  </nav>