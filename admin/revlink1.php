
<?php
$ab=$_POST['dmb_session'];
if($ab=='')
{
	$success=0;
	header("Location:vreventsession.php?success=".$success);
}
else{

echo $ab;
header("Location:reventview.php?id=$ab");
}

?>