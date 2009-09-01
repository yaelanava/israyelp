<?php

function getMysqliConnection(){
	static $mysqli;
	if (!$mysqli){
		$mysqli = new mysqli('localhost', 'administrator', '', 'test');
		
		/* check connection */
		if (mysqli_connect_errno()) {
		    printf("Connect failed: %s\n", mysqli_connect_error());
		    exit();
		}
	}	
	return $mysqli;
}

function getLocBarHtmlCode($city_id, $city_name, $url_prefix){
	$other_cities_query = "SELECT * FROM `test`.`cities` WHERE id!=$city_id ORDER BY id DESC";
	$other_cities_result = getMysqliConnection()->query($other_cities_query);
	
	$html = "<H1>".$city_name."</H1>";
	$html .= "<ul>";
	$html .= "<li><A href=\"\">עוד...</A></li>"; //todo: replace href 			
	while ($row = mysqli_fetch_assoc($other_cities_result)){
		$html .= "<li><A href=\"".$url_prefix."?city_id=".$row['id']."\">".$row['name']."</A> | </li>";
	}			
	$html .= "<li id=\"locBar_title\">ערים אחרות:</li>";
	$html .= "</ul>";
	return $html;
}

function getBizURL($biz_type, $biz_id){
	$i = $biz_type==="restaurants" ? 1 : 4;
	return "./".$biz_type."/".substr($biz_type,0,strlen($biz_type)-$i).".php?biz_id=".$biz_id;
}

function getUserPictureSrc($user_id, $prefix){
	$src = $prefix."users_pics/".$user_id;
	if (!file_exists($src)) {
		$src = $prefix."users_pics/blank_user_medium.gif";
	}
	return $src;
}

function getCityName($city_id){
	$city_query = "SELECT * FROM `test`.`cities` WHERE id=$city_id";
	$city_result = getMysqliConnection()->query($city_query);
	$city = mysqli_fetch_assoc($city_result);
	return $city['name'];
}

function getFooterHTMLCode(){
	$myAccount_link = session_is_registered('username') 
					  ? "http://localhost/IsraYelp/about_me.php" 
					  : "http://localhost/IsraYelp/signup.html";
	$html = "<div id=\"footer\">	
				<div>		
					<ul id=\"aboutSite\">
						<li>   <a href=\"\">עלינו</a></li>
						<li> | <a href=\"$myAccount_link\">החשבון שלי</a></li>
						<li> | <a href=\"http://localhost/IsraYelp/faq.php\" >שאלות נפוצות </a></li>
					</ul>
				</div>

				<div class=\"directory\">
					<ul>
						<li class=\"first\"><strong>מפת האתר</strong></li>
						<li> | <a href=\"http://localhost/IsraYelp/main.php?city_id=1\">תל-אביב</a></li>
						<li> | <a href=\"http://localhost/IsraYelp/main.php?city_id=2\">ראשון לציון</a></li>
						<li> | <a href=\"http://localhost/IsraYelp/main.php?city_id=3\">ירושלים</a></li>
						<li> | <a href=\"http://localhost/IsraYelp/main.php?city_id=4\">חיפה</a></li>
						<li> | <a href=\"http://localhost/IsraYelp/main.php?city_id=5\">באר שבע</a></li>
						<li> | <a href=\"http://localhost/IsraYelp/main.php?city_id=6\">רחובות</a></li>
						<li> | <a href=\"http://localhost/IsraYelp/main.php?city_id=7\">חדרה</a></li>
						<li> | <a href=\"\">ערים נוספות</a></li>
					</ul>
				</div>
	
				<div>
					<p> זכויות יוצרים </p>
				</div>
			</div>";
	return $html;
}

?>