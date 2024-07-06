
<?php
$ab=$_POST['cod_name'];

echo $ab;
header("Location:cmslist.php?ids=$ab");
?>