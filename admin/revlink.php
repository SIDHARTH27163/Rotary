<?php
$ab=$_POST['dmb_session'];
if($ab=='')
{
	$success=0;
	header("Location:reventsession.php?success=".$success);
}
else{

echo $ab;
header("Location:addreventcover.php?id=$ab");
}

?>