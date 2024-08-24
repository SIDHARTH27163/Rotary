<?php
$ab=$_POST['b_session'];

echo $ab;
header("Location:ieventview.php?id=$ab");
?>