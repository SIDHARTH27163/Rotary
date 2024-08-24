<?php
$loc = $_POST['result'] ;

$servername = "localhost";
$dbusername = "Rcd3070";
$password = "Rotary@12345!";
$dbname = "rcdadminpanel";



try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare ("INSERT INTO maptable (loc) VALUES (:loc)");
    $stmt -> bindParam(':street', $loc);
 
    $stmt -> execute();

    echo "Thanks For visiting our Website";
    }
catch(PDOException $e)
    {
    echo $stmt . "<br>" . $e->getMessage();
    }
   $conn = null;
?>