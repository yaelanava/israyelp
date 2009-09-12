<?php 
session_start();

include './utils/functions.php';

$mail_error = false;

if (isset($_POST['email']) && ('' != $_POST['email'])) {
	if (!check_email($_POST['email'])) {
		$mail_error = "���'� �� ����";
	}
}
	
if (!$mail_error && 
	isset($_POST['email']) && ('' != $_POST['email']) &&
	isset($_POST['message']) && ('' != $_POST['message'])) {
		
	$mysqli = getMysqliConnection();

	$name = isset($_POST['name']) ? $_POST['name'] : "";
	
	$subject = "����� ������ $name";
	$subject = isset($_GET['subject']) ? $subject.": ".$_GET['subject'] : $subject;
	
	$message = $_POST['message'];
				
	mail("israyelp.co.il@gmail.com", $subject, $message, "From: ".$_POST['email']);
	header("Location: ./main.php");;
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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

<body dir="rtl">

<?php echo getHeadHTMLCode()?>

<div id="bodyContainer">
	<H1>��� ���</H1>
	<p>
	�� ��� ���� �� ����� ������ ����
	���� ����� �����, ����� ������.
	<br><br>
	<form method="post" action="contact_us.php">
		<table cellspacing="10">
			<tr>
				<td><p>��:</p></td>
				<td><input name="name" size="50" <?php if (isset($_POST['name'])) echo "value=\"".$_POST['name']."\""?>></td>
			</tr>
			<tr>
				<td><p>	����� ���"�:</p></td>
				<td><input name="email" size="50" <?php if (isset($_POST['email'])) echo "value=\"".$_POST['email']."\""?>></td>
				<?php 
					if ($mail_error) {
						echo "<td style=\"color:red;\">$mail_error<td/>";
					} else if (isset($_POST['email']) && ('' == $_POST['email'])) {
						echo "<td style=\"color:red;\">* ��� ����</td>";
					}
				?>
			</tr>
			<tr>
				<td><p>����:</p></td>
				<td><input name="subject" size="50" <?php if (isset($_POST['subject'])) echo "value=\"".$_POST['subject']."\""?>></td>
			</tr>	
			<tr>
				<td><p>���� ������:</p></td>
				<td><TEXTAREA name="message" rows="5" cols="40"><?php if (isset($_POST['message'])) echo $_POST['message']?></TEXTAREA></td>
				<?php if (isset($_POST['message']) && ('' == $_POST['message'])) echo "<td style=\"color:red;\">* ��� ����</td>"?>					
			</tr>
			<tr>
				<td></td>
				<td><br><input type="submit" value="���"></td>
			</tr>
		</table>
	</form>
</div>

<?php echo getFooterHTMLCode()?>

</body>
</html>