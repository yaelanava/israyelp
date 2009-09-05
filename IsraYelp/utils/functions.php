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
	$html .= "<li><A href=\"\">���...</A></li>"; //todo: replace href 			
	while ($row = mysqli_fetch_assoc($other_cities_result)){
		$html .= "<li><A href=\"./$url_prefix.php?city_id=".$row['id']."\">".$row['name']."</A> | </li>";
	}			
	$html .= "<li id=\"locBar_title\">���� �����:</li>";
	$html .= "</ul>";
	return $html;
}

function getBizURL($biz_type, $biz_id){
	return "./biz.php?biz_type=$biz_type&biz_id=$biz_id";
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
					  ? "./about_me.php?external_user=".$_SESSION['user_id']."" 
					  : "./signup.php";
	$html = "<div id=\"footer\">	
				<div>		
					<ul id=\"aboutSite\">
						<li><a href=\"$myAccount_link\">������ ���</a></li>
						<li> | <a href=\"./faq.php\" >����� ������ </a></li>
					</ul>
				</div>

				<div class=\"directory\">
					<ul>
						<li class=\"first\"><strong>��� ����</strong></li>
						<li> | <a href=\"./main.php?city_id=1\">��-����</a></li>
						<li> | <a href=\"./main.php?city_id=2\">����� �����</a></li>
						<li> | <a href=\"./main.php?city_id=3\">�������</a></li>
						<li> | <a href=\"./main.php?city_id=4\">����</a></li>
						<li> | <a href=\"./main.php?city_id=5\">��� ���</a></li>
						<li> | <a href=\"./main.php?city_id=6\">������</a></li>
						<li> | <a href=\"./main.php?city_id=7\">����</a></li>
						<li> | <a href=\"\">���� ������</a></li>
					</ul>
				</div>
	
				<div>
					<p> ������ ������ </p>
				</div>
			</div>";
	return $html;
}

//here we can add some new types 
function getTypesHTMLCode(){
	$html = "	<select name=\"place_kind\">
				<option value=\"restaurants\" >�����</option>
				<option value=\"shopping\" >��� �����</option>
				<option value=\"nightlife\" >���� �����</option>
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

function check_email($email) {
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

function getMonth($month){
	if ($month==1)
		$month='�����';	
	elseif ($month==2)
		$month='������';
	elseif ($month==3)
		$month='���';
	elseif ($month==4)
		$month='�����';
	elseif ($month==5)
		$month='���';
	elseif ($month==6)
		$month='����';
	elseif ($month==7)
		$month='����';
	elseif ($month==8)
		$month='������';
	elseif ($month==9)
		$month='������';
	elseif ($month==10)
		$month='�������';
	elseif ($month==11)
		$month='������';		
	else $month='�����';
	
	return $month;
} 

?>