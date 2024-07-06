
<?php
$ab=$_POST['gname'];

echo $ab;
header( "Location:addreventd.php?id=$ab" );
?>