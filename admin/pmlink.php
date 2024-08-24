<?php
$ab=$_POST['gname'];

echo $ab;
header( "Location:addpd.php?id=$ab" );
?>