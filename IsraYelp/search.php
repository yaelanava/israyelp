<?php
if (isset($_POST['place_name']) && ('' != $_POST['place_name']) && 
	isset($_POST['place_kind'])  && isset($_POST['city'])) 
	{
	search();
} else {
	echo "חלק מהשדות היו ריקים. בבקשה נסה שנית";
	die(0);
}

function search(){
	$name = $_POST['place_name'];
	$kind = $_POST['place_kind'];
	$city = $_POST['city'];
	
	$mysqli = new mysqli('localhost', 'administrator', '', 'test');
	/* check connection */
	if (mysqli_connect_errno()) {
		   printf("Connect failed: %s\n", mysqli_connect_error());
		   exit();
	}
		
	$query = "SELECT * FROM `test`.`restaurants` WHERE name='$name'";
	$result = $mysqli->query($query);
	$count = $result->num_rows;
		
		if ($count != 0) {
			echo "קיים";
				
		}

	}
