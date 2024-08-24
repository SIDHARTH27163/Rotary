
<?php
$ab=$_POST['dm_name'];

echo $ab;
header("Location:viewdm.php?ids=$ab");
?>