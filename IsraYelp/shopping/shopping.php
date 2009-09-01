<?php 

session_start();

include '../utils/functions.php';

$city_id = $_GET['city_id'];
$city_name = getCityName($city_id);

$category = isset($_GET['category']) ? $_GET['category'] : 0;
$categoryQureyOrNull = $category ? " and category LIKE ('%$category%')" : "";

$mysqli = getMysqliConnection();

$query_shopping = "SELECT * FROM `test`.`shopping` WHERE city_id=$city_id $categoryQureyOrNull
 					  ORDER BY grading DESC LIMIT 5";
$result_shopping = $mysqli->query($query_shopping);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>���� ����� �<?php echo $city_name?> | IsraYelp</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,������, ������, ��� ������, ������,������,��� ���,������">
	
	<link rel="shortcut icon" href="../image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="../image/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="../mystyle.css">  	
</head>

<body dir="rtl">

<div id="head">
		<div id="logo">
			<A href="../main.php"></A>
		</div>
		<div id="register">
			<p><?php if (session_is_registered('username')) print("��� ����� �-".$_SESSION['username']) ?></p>
		</div>
		<div id="leftEdge"></div>
		<div id="rightEdge"></div>
</div>

<div id="navContainer">
		<ul>			
			<LI class="header" id="writeReview"><A href="../write_review.php" >���� ������</A> | </LI>
			<LI class="header" id="findReview"><A href="../find_review.php" >��� ������</A></LI>
			
			<LI class="header_login"><A href=<?php if (session_is_registered('username')) {echo "../login.php?logout=1";} else{echo "../login.php";}?> > <?php if (session_is_registered('username')) {echo "�����";} else {echo "���";}?></A></LI>
			<LI class="header_login"><A href=<?php if (session_is_registered('username')) {echo "../about_me.php";} else{echo "../signup.html?profile=1";}?> >������ ��� </A> | </LI>
		</ul>
</div>

<div id="mainContent" class="category_browse">
	<div id="locBar">
		<?php echo getLocBarHtmlCode($city_id, $city_name, "./shopping.php");?>		
	</div>

	<div id="top_cat_biz">
		<div id="top_biz_lists" class="clearfix">
			<br/>
			<h1>���� ����� �<?php echo $city_name?> </h1>
			<p id="breadcrumbs">�������: 
				<a href="../main.php"><?php echo $city_name?></a> 
				&raquo;		
				<?php 
					if ($category) {
						echo "<a href=\"?city_id=$city_id\">�����</a>
								&raquo; $category"; 
					} else {
						echo "�����";
					}
				?>					
			</p>
		
			<?php 
				$topRestaurant = mysqli_fetch_assoc($result_shopping);
				$topRest_id = $topRestaurant['id'];
				$image_srs = "./image/$topRest_id.JPG";
				$query_restReview = "SELECT * FROM `test`.`reviews` WHERE biz_id=$topRest_id and biz_type='shopping' ORDER BY added DESC";
				$result_restReview = $mysqli->query($query_restReview);
				if ($result_restReview) {						
					$count_restReview = $result_restReview->num_rows;
					$restReview = mysqli_fetch_assoc($result_restReview);
					$html = "<div id=\"top_biz\">
								<div class=\"clearStyles bizPhotoBox\">
									<a  href=\"$image_srs\"><img src=\"$image_srs\" width=100 height=150 style=\"\" alt=\"".$topRestaurant['name']."\"></a>
								</div>
								<p class=\"biz_info\">1. <a href=\"./restaurant.php?biz_id=$topRest_id\" id=\"top_biz_name_1\" style=\"FONT-WEIGHT: bold;\">".$topRestaurant['name']."</a></p>							
								<div class=\"top_biz_rating\">
									<div class=\"rating\">
										<img class=\"stars_4_half\" width=\"83\" height=\"325\" title=\"4.5 star rating\" alt=\"4.5 star rating\" src=\"../image/stars_map.png\"/>
									</div> 
									<em class=\"smaller\">$count_restReview �������</em>
								</div>
								<p class=\"smaller\">�������:".$topRestaurant['category']."</p>
								<p>".$restReview['review']."</p>
							</div>";
					echo $html;
				}
			?>
									
			<ul id="biz_list" class="stripped">
				<?php
					$html = "";
					$i=2;
					while ($rest = mysqli_fetch_assoc($result_shopping)){
						$rest_id = $rest['id'];
						$query_restReview = "SELECT * FROM `test`.`reviews` WHERE biz_id=$rest_id and biz_type='shopping' ORDER BY added DESC";
						$result_restReview = $mysqli->query($query_restReview);
						$count_restReview = $result_restReview->num_rows;
						$html .= "<li>
									<div class=\"biz_info\">
										$i. <a href=\"./restaurant.php?biz_id=".$rest_id."\" id=\"top_biz_name_$i\" class=\"biz_name\">".$rest['name']."</a>
									</div>
									<div class=\"biz_rating\">
										<div class=\"rating-small\">
											<img class=\"stars_4_half\" width=\"83\" height=325 title=\"4.5 star rating\" alt=\"4.5 star rating\" src=\"../image/stars_map.png\"/>
										</div> 
										<em class=\"smaller\">$count_restReview �������</em>
									</div>
									<p class=\"smaller\">�������:".$rest['category']."</p>
								</li>";
						$i++;
					}
					echo $html;
				?>	
			</ul>						
		</div>
		
		<div id="biz_map"">
			<h2>��� <?php echo $city_name?></h2>
			<iframe src="http://maps.freemap.co.il/api/openlayers/?
						zoom=9&
						lat=<?php echo $topRestaurant['lat']?>&
						lon=<?php echo $topRestaurant['lon']?>&
						marker=true"
					width="900" height="350"		       	
			        scrolling="no"
			        marginwidth="10" marginheight="10" 
			        frameborder="1">
			 </iframe>
		</div>	
	</div>	

	<div id="sub_cat_lists" class="clearfix">
		<h2>���� ����� �<?php echo $city_name?> ��� ��������<h2>
		<ul class="stripped other_sub_cats">
			<li><a href="?city_id=<?php echo $city_id?>&category=Shopping Centers">����� �����</a></li>
			<li><a href="?city_id=<?php echo $city_id?>&category=Antiques">������</a></li>
			<li><a href="?city_id=<?php echo $city_id?>&category=Fashion">�����</a></li>
			<li><a href="?city_id=<?php echo $city_id?>&category=Electronics">����������</a></li>
			<li><a href="?city_id=<?php echo $city_id?>&category=Jewelry">�������</a></li>
			<li><a href="?city_id=<?php echo $city_id?>&category=Flowers & Gifts">����� ������</a></li>
			<li><a href="?city_id=<?php echo $city_id?>&category=Computers">������</a></li>
			<li><a href="?city_id=<?php echo $city_id?>&category=Home & Garden">��� �����</a></li>
			<li><a href="?city_id=<?php echo $city_id?>&category=Toy Stores">������ �������</a></li>
			<li><a href="?city_id=<?php echo $city_id?>&category=Drugstores">��� �����</a></li>
			<li><a href="?city_id=<?php echo $city_id?>&category=Books & Music & Video">�����, ������ ������</a></li>
			<li><a href="?city_id=<?php echo $city_id?>&category=Office Equipment">���� �����</a></li>
		</ul>
	</div>	
</div>

<?php echo getFootetHTMLCode()?>

</body>
</html>