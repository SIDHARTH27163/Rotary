<?php
$ab=$_POST['b_session'];

echo $ab;
header("Location:viewalbum.php?id=$ab");
?>