
<?php
$ab=$_POST['gname'];

echo $ab;
header( "Location:viewevents.php?ids=$ab" );
?>