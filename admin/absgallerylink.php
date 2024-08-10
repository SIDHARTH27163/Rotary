<?php
$ab=$_POST['b_session'];

echo $ab;
header("Location:viewrebanners?id=$ab");
?>