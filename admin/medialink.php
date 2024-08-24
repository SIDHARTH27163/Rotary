<?php
$ab=$_POST['b_session'];

echo $ab;
header("Location:addmedia.php?id=$ab");
?>