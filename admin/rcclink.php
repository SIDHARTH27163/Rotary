
<?php
$ab=$_POST['dmb_session'];
if($ab=='')
{
	$success=0;
	header("Location:rcclub_session.php?success=".$success);
}
else{

echo $ab;
header("Location:addrcteam.php?id=$ab");
}

?>