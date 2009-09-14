<?php
session_start();

include './utils/functions.php';
include './utils/TypesUtils.php';

$city_id = $_GET['city_id'];
$city_name = getCityName($city_id);

$biz_type = $_GET['biz_type'];
$type_name = getTypeName($biz_type);

$category = isset($_GET['category']) ? $_GET['category'] : false;
$categoryQureyOrNull = $category ? " and category LIKE ('%$category%')" : "";

$mysqli = getMysqliConnection();

$query_bizs = "SELECT * FROM `$biz_type` WHERE city_id=$city_id $categoryQureyOrNull
 					  ORDER BY grading DESC";
$result_bizs = $mysqli->query($query_bizs);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title><?php echo $type_name?> ב<?php echo $city_name?> | IsraYelp</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,ביקורת, מסעדות, בתי קולנוע, מרפאות,מספרות,בתי קפה,חנויות">
	
	<link rel="shortcut icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="./mystyle.css">  	
</head>

<body dir="rtl">

<?php echo getHeadHTMLCode()?>
<?php echo getNavHTMLCode()?>


<div id="mainContent" class="category_browse">
	<div id="locBar">
		<?php echo getLocBarHtmlCode($city_id, $city_name, "./all_biz_list.php?biz_type=$biz_type".($category ? "&category=$category&" : "&"));?>		
	</div>
	
	<div id="top_cat_biz">
		<div id="top_biz_lists" class="clearfix">
			<br/>
			<h1><?php echo $type_name?> ב<?php echo $city_name?> </h1>
			<p id="breadcrumbs">קטגוריה: 
				<a href="./main.php?city_id=<?php echo $city_id?>"><?php echo $city_name?></a> 
				&raquo;		
				<?php 
					if ($category) {
						echo "<a href=\"?biz_type=$biz_type&city_id=$city_id\">$type_name</a>
								&raquo; $category"; 
					} else {
						echo $type_name;
					}
				?>					
			</p>

			<ul id="biz_list" class="stripped">		
				<?php 
					if ($result_bizs) {
						while ($biz = mysqli_fetch_assoc($result_bizs)){
							$biz_id = $biz['id'];
							$biz_url = getBizURL($biz_type, $biz_id);
							$image_srs = "./biz_pics/$biz_type/$biz_id.jpg";
							$html = "<li><div id=\"top_biz\" style=\"BORDER-TOP: #ccc 1px solid; WIDTH: 900px;\">
										<div class=\"clearStyles bizPhotoBox\">
											<a  href=\"$image_srs\"><img src=\"$image_srs\" width=70 height=70 style=\"\" alt=\"".$biz['name']."\"></a>
										</div>
										<p class=\"biz_info\"><a href=\"$biz_url\" id=\"top_biz_name_1\" style=\"FONT-WEIGHT: bold;\">".$biz['name']."</a></p>													
										<div class=\"top_biz_rating\">
											<div class=\"rating\">
												<img class=\"stars_".$biz['grading']."\" width=\"83\" height=\"325\" src=\"./image/stars_map.png\"/>
											</div> 
											<em class=\"smaller\">".$biz['num_reviews']." ביקורות</em>
										</div>
										<p class=\"smaller\">קטגוריה: ".$biz['category']."</p>
										<address class=\"adr\"><span class=\"street-address\">".$biz['address']."</span></address>			
										<span id=\"bizPhone\" class=\"tel\">".$biz['phone_number']."</span>
										<p><a href=\"http://".$biz['link']."\">".$biz['link']."</a></p>	
									</div></li>";
							echo $html;														
						}
					} else {
						echo "<b>לא נמצאו מקומות.</br>";
					}
				?>											
			</ul>
		</div>
	</div>
</div>

<?php echo getFooterHTMLCode()?>
</body>
</html>
			