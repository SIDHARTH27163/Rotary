
<?php
$ab=$_POST['gname'];

echo $ab;
header( "Location:viewcontdet.php?ids=$ab" );
?>