<?php
$ab=$_POST['b_session'];

echo $ab;
header("Location:rebanners.php?id=$ab");
?>