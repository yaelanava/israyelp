<?php
	session_start();
	if (isset($_FILES['image']) && ('' != $_FILES['image']))
	{
		$temp_name = $_FILES['image']['tmp_name'];
	}
	else
		echo "there was an error";
	$id=$_SESSION['user_id'];
	$destination="./users_pics/".$id;
	copy($temp_name, $destination);

?>
<a href="./about_me.php"   id="Zprofile_footer">חזור לחשבון שלך</a>
//<img src="<? echo $destination; ?>" >



