
<?php
$ab=$_POST['dmb_session'];
if($ab=='')
{
	$success=0;
	header("Location:designated_members_session?success=".$success);
}
else{

echo $ab;
header("Location:adddesignatedmembers?id=$ab");
}

?>