
<?php
$ab=$_POST['gname'];

echo $ab;
header( "Location:viewcont.php?ids=$ab" );
?>