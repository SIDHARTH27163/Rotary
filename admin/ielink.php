
<?php
$ab=$_POST['gname'];

echo $ab;
header( "Location:addieventd.php?id=$ab" );
?>