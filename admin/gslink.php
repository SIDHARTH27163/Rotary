
<?php
$ab=$_POST['gname'];

echo $ab;
header( "Location:viewsimages.php?ids=$ab" );
?>