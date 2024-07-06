
<?php
$ab=$_POST['b_session'];

echo $ab;
header("Location:addctype.php?id=$ab");
?>