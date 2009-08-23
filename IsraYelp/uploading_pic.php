<?php
	session_start();
	if (isset($_POST['image']) && ('' != $_POST['image']))
	{
	//echo $_POST['image'];
	$path=$_POST['image'];
	
	}
	else
	echo "there isn't";
	echo 'fin';
	echo "</br>";
	//$path="./image/newLogo2.png";
	echo $path="./image/".$path;
	
?>

<img src="<? echo $path; ?>" >

