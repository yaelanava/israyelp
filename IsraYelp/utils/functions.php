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
	$other_cities_query = "SELECT * FROM `cities` WHERE id!=$city_id ORDER BY id DESC";
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
	//return "http://localhost/IsraYelp/".$biz_type."/biz.php?biz_id=".$biz_id;	
	return "./".$biz_type."/biz.php?biz_id=".$biz_id;
}

function getUserPictureSrc($user_id, $prefix){
	$src = $prefix."users_pics/".$user_id;
	if (!file_exists($src)) {
		$src = $prefix."users_pics/blank_user_medium.gif";
	}
	return $src;
}

function getCityName($city_id){
	$city_query = "SELECT * FROM `cities` WHERE id='$city_id'";
	$city_result = getMysqliConnection()->query($city_query);
	$city = mysqli_fetch_assoc($city_result);
	return $city['name'];
}

function getCityID($city_name){
	$city_query = "SELECT * FROM `cities` WHERE name='$city_name'";
	$city_result = getMysqliConnection()->query($city_query);
	$city = mysqli_fetch_assoc($city_result);
	return $city['id'];
}

function getFooterHTMLCode(){
	$myAccount_link = session_is_registered('username') 
					  ? "http://localhost/IsraYelp/about_me.php" 
					  : "http://localhost/IsraYelp/signup.html";
	$html = "<div id=\"footer\">	
				<div>		
					<ul id=\"aboutSite\">
						<li><a href=\"$myAccount_link\">החשבון שלי</a></li>
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

//here we can add some new types 
function getTypesHTMLCode(){
	$html = "	<select name=\"place_kind\">
 				 <option value=\"מסעדה\" >מסעדה</option>
 				 <option value=\"אתר קניות\" >אתר קניות</option>
 				 <option value=\"מקום בילוי\" >מקום בילוי</option>
 				 </select>";
	return $html;
}

function getCitiesHTMLCode(){
	$cities_query = "SELECT * FROM `cities` ORDER BY id DESC";
	$cities_result = getMysqliConnection()->query($cities_query);
	
	$html = "<select name=\"place_city\">";       		
	while ($row = mysqli_fetch_assoc($cities_result)){
		if($row['english_name']=="Tel Aviv"){
			$html .="<option SELECTED ";
			$html .= " value=\"".$row['name']."\">".$row['name']."</option>";
		}
		else {
		$html .= "<option value=\"".$row['name']."\">".$row['name']."</option>";
		}	
	}			
	$html .= "</select>";
	return $html;
}

function check_email($email)
{
	$atom = '[-a-z0-9!#$%&\'*+/=?^_`{|}~]';    // allowed characters for part before "at" character
	$domain = '([a-z]([-a-z0-9]*[a-z0-9]+)?)'; 
    $regex = '^' . $atom . '+' .         // One or more atom characters.
			'(\.' . $atom . '+)*'.               // Followed by zero or more dot separated sets of one or more atom characters.
			'@'.                                 // Followed by an "at" character.
			'(' . $domain . '{1,63}\.)+'.        // Followed by one or max 63 domain characters (dot separated).
			$domain . '{2,63}'.                  // Must be followed by one set consisting a period of two
			'$';                
	return eregi($regex, $email);
}

?>