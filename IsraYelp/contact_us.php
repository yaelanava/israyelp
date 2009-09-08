<?php 
session_start();
include './utils/functions.php';
?>

<html>
<head>
	<title>��� ��� | IsraYelp</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User Reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,������, ������, ��� ������, ������,������,��� ���,������">
	
	<link rel="shortcut icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="./mystyle.css">  	
</head>

<<body dir="rtl">
<div id="head">
		<div id="logo">
			<A href="./main.php"></A>
		</div>
		<div id="register">
			<p><?php if (session_is_registered('username')) print("��� ����� �-" . $_SESSION['username']) ?></p>
		</div>
		<div id="leftEdge"></div>
		<div id="rightEdge"></div>
</div>

<div id="bodyContainer">
	<H1>��� ���</H1>
	<p>
	�� ��� ���� �� ����� ������ ����
	���� ����� �����, ����� ������.
	<br><br>
	<form action="MAILTO:israyelp@gmail.com" method="post" enctype="text/plain">
	
	<table>
	<tr>
		<td>
			<p>��:</p> 
		</td>
		<td>
			<input type="text" name="name" value="" size="20">
		</td>
	</tr>
	
	<tr>
		<td>
			<p>	����� ���"�:</p>
		</td>
		<td>
			<input type="text" name="email" value="" size="20">
		</td>
	</tr>
	
	<tr>
		<td>
			<p>����:</p>
		</td>
		<td>
			<input type="text" name="subject" value="" size="40">
		</td>
	</tr>
	
	<tr>
		<td>
			<p>���� ������:</p>
		</td>
		<td>
			<TEXTAREA name="Comments" rows="5" cols="42"></TEXTAREA>
		</td>
	</tr>
	</table>
	</form>
	
	<br><br>
	<input type="submit" value="���">
	<input type="reset" value="��� ����">

	<br/>
</div>
<?php echo getFooterHTMLCode()?>
</body>
</html>