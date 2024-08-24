<?php
$ab=$_POST['b_session'];

echo $ab;
header("Location:addievent.php?id=$ab");
?>