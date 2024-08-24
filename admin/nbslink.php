<?php
$ab=$_POST['dm_name'];

echo $ab;
header("Location:viewnb.php?ids=$ab");
?>