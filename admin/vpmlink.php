
<?php
$ab=$_POST['gname'];

echo $ab;
header( "Location:viewprojectdet.php?id=$ab" );
?>