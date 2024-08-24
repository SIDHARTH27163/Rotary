
<?php
$ab=$_POST['dmb_session'];
if($ab=='')
{
	$success=0;
	header("Location:icclub_session.php?success=".$success);
}
else{

echo $ab;
header("Location:addicteam.php?id=$ab");
}

?>