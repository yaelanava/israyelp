<?php
	session_start();
	if (isset($_POST['image']) && ('' != $_POST['image']))
	{echo $_POST['image'];
	$image = imagecreatefromgif($_POST['image']);
	$image = imagecreatefromgif('logBgLeft.gif');
	
	imagegif($image);
	}
	else
	echo "there isn't";
	
	$nimage = imagecreatefrompng('./image/newLogo2.png');
	
	imagepng($nimage);
	echo "</br>";
	image2wbmp($nimage);
	
	echo "</br>";
	echo 'fin';
	
?>