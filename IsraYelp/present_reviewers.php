<?php 
	session_start();
	include './utils/functions.php';
				
?>

<html>
<head>
	<title> ביקורת </title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User reviews and 

Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services 

and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, 

review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,ma

ssage,sushi,pizza,nails,ביקורת, מסעדות, בתי קולנוע, מרפאות,מספרות,בתי קפה,חנויות">
	
	<link rel="shortcut icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="./mystyle.css"> 
</head>

<body  dir="rtl">
<?php echo getHeadHTMLCode()?>
<?php echo getNavHTMLCode()?>


<div id="bodyContainer">
	<?php 
		$reviewer = $_POST['reviewer_name'];		
		$mysqli = getMysqliConnection();
		$query = "SELECT * FROM `users` WHERE username='$reviewer'";
		$result = $mysqli->query($query);	
		$count = $result->num_rows;
		$source = $_POST['source'];
		$back_url = "./".$source.".php";
		
		if ($source == "find_review"){
			$prefix = "./user_reviews.php?user_id=";
		}
		else if ($source =="find_reviewer"){
			$prefix = "./user_profile.php?user_id=";	
		}
		
		if ($count == 0){
			$html = "<p><h5>"."לא נמצאו משתמשים בשם זה"."</h5></p>";			
			$html .= "<p><a href=".$back_url.">"."לחץ כאן לחזרה לדף הקודם"."</A>";
			echo $html;
		}

		else {
			$html = "<p><h5>"."נמצאו"." ".$count." משתמשים:"."</h5></p>";
			$html .= "<table>";
			while ($user = mysqli_fetch_assoc($result)){
				$html .= "<tr>
					<td>
						<P><div class=\"clearStyles bizPhotoBox\">
							<A href=".$prefix.$user['id']." rel=\"nofollow\"><IMG style=\"WIDTH: 40px; HEIGHT: 40px\" alt=\"התמונה של " . $user['username'] ."\" src=\"".getUserPictureSrc($user['id'])."\"></A>
							</div>
						</P>
					</td>
					<td>
						<P><A href=".$prefix.$user['id']." rel=\"nofollow\">".$user['username']."</A>
						</P>
					</td>
				</tr>";
			}
			$html.="</table>";
			$html .= "<br><p><a href=".$back_url.">"."חזרה לדף הקודם >>"."</A>";
			echo $html;			
		}

	?>	
</div>	

<?php echo getFooterHTMLCode()?>

</body>
</html>