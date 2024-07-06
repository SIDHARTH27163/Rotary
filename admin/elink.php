
<?php
$ab=$_POST['gname'];

echo $ab;
header( "Location:addeventd.php?id=$ab" );
?>