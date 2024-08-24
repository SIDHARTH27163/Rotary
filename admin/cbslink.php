
<?php
$ab=$_POST['bod_name'];

echo $ab;
header("Location:cbslist.php?ids=$ab");
?>