
<?php
$ab=$_POST['dmb_session'];
if($ab=='')
{
	$success=0;
	header("Location:vreventsession1.php?success=".$success);
}
else{

echo $ab;
header("Location:addrevent.php?id=$ab");
}

?>