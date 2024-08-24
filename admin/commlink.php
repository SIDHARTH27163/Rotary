
<?php
$ab=$_POST['title'];

echo $ab;
header("Location:addcmem.php?id=$ab");
?>