<?php

function getBizAdditionalInfo($type, $biz) {
	$html = "";
	switch ($type){
		case "restaurants":
			$html= "<ul>							
						<li><strong>�������: </strong>".$biz['delivery']."</li>
						<li><strong>���: </strong>".$biz['kosher']."</li>
						<li><strong>���� �����: </strong>".$biz['invalid_access']."</li>
						<li><strong>������� ������: </strong>".$biz['child_friendly']."</li>
						<li><strong>�������: </strong>".$biz['events']."</li>
						<li><strong>������: </strong>".$biz['romantic']."</li>
						<li><strong>����: </strong>".$biz['parking']."</li>
						<li><strong>���� �����: </strong>".$biz['smoking']."</li>
						<li><strong>����� ����: </strong>".$biz['outside']."</li>									
					</ul>";
			break;
		
		case "shopping":
			$html= "<ul>							
						<li><strong>����: </strong>".$biz['hours']."</li>
						<li><strong>���� �����: </strong>".$biz['invalid_access']."</li>
						<li><strong>����: </strong>".$biz['parking']."</li>
					</ul>";
			break;
			
		case "nightlife":
			$html= "<ul>							
						<li><strong>����: </strong>".$biz['hours']."</li>
						<li><strong>���� �����: </strong>".$biz['invalid_access']."</li>
						<li><strong>Happy Hour: </strong>".$biz['Happy Hour']."</li>
						<li><strong>����: </strong>".$biz['parking']."</li>
						<li><strong>���� �����: </strong>".$biz['smoking']."</li>
						<li><strong>����� ����: </strong>".$biz['outside']."</li>									
					</ul>";
			break;
	}
	return $html;
}

?>