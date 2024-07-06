<?php
$ab=$_POST['b_session'];

echo $ab;
header("Location:viewievent.php?id=$ab");
?>