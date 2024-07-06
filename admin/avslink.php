<?php
$ab=$_POST['b_session'];

echo $ab;
header("Location:addavs.php?id=$ab");
?>