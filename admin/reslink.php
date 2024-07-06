
<?php
$ab=$_POST['gname'];

echo $ab;
header( "Location:viewrevents.php?ids=$ab" );
?>