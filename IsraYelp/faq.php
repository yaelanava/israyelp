<?php
	session_start();
	include './utils/functions.php'; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title> ����� ������ </title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,������, ������, ��� ������, ������,������,��� ���,������">
	
	<link rel="shortcut icon" href="../image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="../image/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="./mystyle.css"> 
</head>
<body class= "us" id="IsraYelp_main_body" dir="rtl">

<?php echo getHeadHTMLCode()?>
<?php echo getNavHTMLCode()?>

<div id="bodyContainer">
	<table rules="rows" cellspacing=1 cellpadding=10>
		<tr>
			<td></td>
			<td> <h1 align="center"> ������ ������ ������ </h1> </td>
		</tr>
		<tr>
			<td width=200>
				<h1> ���� ������ ����? </h1>
			</td>
			<td>
				 �� ��� ������ ���� ������ ��� ����� ����, �� ���� ����� �� ������
				 <a href="./signup.php"> "������"  </a>
				 ������ ����� ����. ��� �� ����� ����� ��� ���� �� ������ ����� ����� ����� ���� �- IsraYelp.				
			</td>
		</tr>
		<tr>
			<td width=200>
				<h1> ���� ���� ����� ������� ����? </h1>
			</td>
			<td>
				 �� ��� ����� ������ ���� ����� ���� ����
				 <a href="./signup.php"> (������ ��� ���). </a>
				��� ��� ���� ���� �� ����� ���� ��� ������� ������ ������ ��� ������ ��� �����
				����� ����� ����, �"� ����� �� "���� ������" ���� ������ ������� ��� ����. 				
			</td>
		</tr>
		<tr>
			<td width=200>
				<h1> ���� ���� ����� �� �� �������� �� ���� ������? </h1>
			</td>
			<td>
				 ���� ����� �� �� �������� �� ���� ����� ����� ����� ����� �� �����
				 <a href="./main.php"> (�"� ����� ��� �����). </a>
				���� ����� �� ����� ������, ���� ����� ������ ����� �� �� �������� ������ ���� ��� ��. 				
			</td>
		</tr>
		<tr>
			<td width=200>
				<h1> ��� ���� ����� �� �� �������� ���� ����� ������? </h1>
			</td>
			<td>
				 ��, ����� ��� �����, �� ��� ����� ����� ���:
				 <br>
				 1) �� �����, ���� ������ ���� ����� ������ ������� ���� ����� ��� ������� ����,
				 ���� ���� ����� �� ����� �� ������ ��� ���� ���. ��� ��, ����� ����� ������ ������� �� �������� ����.
				 <br>
				 2) ������� ������ ��� ���� �� ����� �� �"� ����� 
				 <a href="./find_review.php"> �"��� ������" </a>
				(������ ������� ���� �����).
				�� ���� ���� �� ������ ��� ���� ������� ����� ���� ����� ��� ���� �� ������. 				
			</td>
		</tr>
		<tr>
			<td width=200>
				<h1> ��� ���� ����� �������? </h1>
			</td>
			<td>
				 ������� ������ ������ ����� �� ����� �������,
				 �� ��� ����� ��� ���� ������ ��� ���� ��� ���� ��� ��������.
				 �� ����� �� ������� ����� �� ������ �����. 				
			</td>
		</tr>
		<tr>
			<td width=200>
				<h1> �� ����� �� ����� �������, �� ���� �����? </h1>
			</td>
			<td>
				���� ��� ������ �� ���� �� �������� ����� ����� �� ��� ������ �� 
				����� ������.
				<br>
				 �� ����� ����� ��� ���� �� ����� �����
				 <a href="./new_place.php"> ���. </a>			
			</td>
		</tr>
		<tr>
			<td width=200>
				<h1> ���� ���� ����� ������ ���� ����? </h1>
			</td>
			<td>
				�� ��� ����� ������ ���� ����� ��� ���� ���
				 <a href="./find_review.php"> (���� ����� ���� �"� �����).</a>
				 <br>	
				 ��� ���� �� ������ ����� ������� ����� ����� ������ ��.		
			</td>
		</tr>
		<tr>
			<td width=200>
				<h1> ���� ���� ����� �� ������ ������� ������ ����? </h1>
			</td>
			<td>
				�� ����� ����� ��� ���� ��� ���� ���,
				�� ���� �� ������� ����� �� �� ������ ������� �������:
				����� ���� �������, ����� ����� ����"� ��� ������ ����� �������.
						
			</td>
		</tr>
	</table>
	
</div>
<?php echo getFooterHTMLCode()?>
</body>
</html>