<?php

function getBizAdditionalInfo($type, $biz) {
	$html = "";
	switch ($type){
		case "restaurants":
			$html= "<ul>							
						<li><strong>משלוחים: </strong>".$biz['delivery']."</li>
						<li><strong>כשר: </strong>".$biz['kosher']."</li>
						<li><strong>גישה לנכים: </strong>".$biz['invalid_access']."</li>
						<li><strong>ידידותי לילדים: </strong>".$biz['child_friendly']."</li>
						<li><strong>אירועים: </strong>".$biz['events']."</li>
						<li><strong>רומנטי: </strong>".$biz['romantic']."</li>
						<li><strong>חניה: </strong>".$biz['parking']."</li>
						<li><strong>אזור עישון: </strong>".$biz['smoking']."</li>
						<li><strong>ישיבה בחוץ: </strong>".$biz['outside']."</li>									
					</ul>";
			break;
		
		case "shopping":
			$html= "<ul>							
						<li><strong>שעות: </strong>".$biz['hours']."</li>
						<li><strong>גישה לנכים: </strong>".$biz['invalid_access']."</li>
						<li><strong>חניה: </strong>".$biz['parking']."</li>
					</ul>";
			break;
			
		case "nightlife":
			$html= "<ul>							
						<li><strong>שעות: </strong>".$biz['hours']."</li>
						<li><strong>גישה לנכים: </strong>".$biz['invalid_access']."</li>
						<li><strong>Happy Hour: </strong>".$biz['Happy Hour']."</li>
						<li><strong>חניה: </strong>".$biz['parking']."</li>
						<li><strong>אזור עישון: </strong>".$biz['smoking']."</li>
						<li><strong>ישיבה בחוץ: </strong>".$biz['outside']."</li>									
					</ul>";
			break;
			
		case "beauty":
			$html= "<ul>							
						<li><strong>שעות: </strong>".$biz['hours']."</li>
						<li><strong>גישה לנכים: </strong>".$biz['invalid_access']."</li>
						<li><strong>חניה: </strong>".$biz['parking']."</li>	
						<li><strong>אירועים: </strong>".$biz['events']."</li>			
					</ul>";
			break;
		case "hotels":
			$html= "<ul>							
						<li><strong>חדרים לנכים: </strong>".$biz['invalid_access']."</li>
						<li><strong>ספא: </strong>".$biz['spa']."</li>
						<li><strong>חניה: </strong>".$biz['parking']."</li>	
						<li><strong>בריכה: </strong>".$biz['pool']."</li>
						<li><strong>כשר: </strong>".$biz['kosher']."</li>
						<li><strong>מועדון לילדים: </strong>".$biz['kids_club']."</li>
						<li><strong>חיבור לאינטרנט: </strong>".$biz['intranet']."</li>	
						<li><strong>טלוויזיה: </strong>".$biz['tv']."</li>	
						<li><strong>מיני בר: </strong>".$biz['mini_bar']."</li>						
					</ul>";
			break;	
	}
	return $html;
}

?>