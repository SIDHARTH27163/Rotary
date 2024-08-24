
<?php
$ab=$_POST['gname'];

echo $ab;
header( "Location:viewievents.php?ids=$ab" );
?>