<?php
$ab=$_POST['b_session'];

echo $ab;
header("Location:addgallery?id=$ab");
?>