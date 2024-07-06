
<?php
$ab=$_POST['dmb_session'];
if($ab=='')
{
	$success=0;
	header("Location:vreventsession2.php?success=".$success);
}
else{

echo $ab;
header("Location:viewrevent.php?id=$ab");
}

?>