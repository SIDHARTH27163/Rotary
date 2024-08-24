
<?php
$ab=$_POST['b_session'];

echo $ab;
header("Location:boardofdirectors.php?id=$ab");
?>