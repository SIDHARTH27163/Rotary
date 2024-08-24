
<?php
$ab=$_POST['dm_name'];

echo $ab;
header("Location:viewit.php?ids=$ab");
?>