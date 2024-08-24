
<?php
$ab=$_POST['title'];

echo $ab;
header("Location:addclist.php?id=$ab");
?>