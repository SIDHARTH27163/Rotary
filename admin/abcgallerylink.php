<?php
$ab=$_POST['b_session'];

echo $ab;
header("Location:viewsgallery.php?id=$ab");
?>