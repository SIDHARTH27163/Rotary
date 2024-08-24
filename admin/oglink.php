
<?php
$ab=$_POST['gname'];

echo $ab;
header( "Location:addog.php?id=$ab" );
?>