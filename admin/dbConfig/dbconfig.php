<?php

// $server_name = "localhost";
// $db_username = "root";
// $db_password = "Sidharth@123";
// $db_name = "rcdadminpanel";
$server_name = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "rotary";

$connection = mysqli_connect($server_name,$db_username,$db_password,$db_name);

if (!$connection) {
    echo ' <div class="col-xs-12 col-md-12 col-lg-12 col-sm-12" style = "margin:400px;">
           <H1 style="color:red;"> Error Code : #401</H1>
           <br>
           <h2> Database Misconfigured. </h2>
           </div>
            ';

    die('Could not Connect My Sql:' . mysqli_error());
}

?>