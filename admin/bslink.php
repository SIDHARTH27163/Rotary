
<?php
$ab=$_POST['bod_name'];

echo $ab;
header("Location:viewbodlist.php?ids=$ab");
?>