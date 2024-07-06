<?php
$ab=$_POST['b_session'];

echo $ab;
header("Location:addalbum.php?id=$ab");
?>