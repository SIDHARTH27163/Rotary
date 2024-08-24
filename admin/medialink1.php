<?php
$ab=$_POST['b_session'];

echo $ab;
header("Location:viewmedia.php?id=$ab");
?>