<?php session_start();?>
<html>
<head>
	<title>��� ������� ������� - IsraYelp </title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User Reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,������, ������, ��� ������, ������,������,��� ���,������">
	
	<link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="image/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="./mystyle.css">  	
</head>

<body dir="rtl">
<?php echo getHeadHTMLCode()?>
<?php echo getNavHTMLCode()?></ul>
</div>

<script type="text/javascript">
	function submitToFriends(){
		$$('#lists_viewport input[type=checkbox]').invoke('disable');
		document.send_to_a_friend_form.submit();
	}
</script>

<div id="bodyContainer">
	<H1>��� ����</H1>
		<div>
		<p> ��� �� ������ ����� ��� ����� �� ������: </p>
		<br/>
		<form method="post" action="send_to_friend.php" >
		<form method="post" action="" name="send_to_a_friend_form" id="send_to_a_friend_form" class="clearfix">
			<table align="right" cellpadding="5">
				<tr>
					<td>
					<p>������ ����</p>
					</td>
					<td>
						<input type="text" name="emails" class="form200" />
					</td>
				</tr>
				<tr>
					<td>
						<p>���� ������</p>
					</td>
					<td>
						<textarea id="STF_Note" name="note" rows="5" cols="50" class="form400">�� ����?</textarea>
					</td>
				</tr>
				<tr>
					<td>
						&nbsp;					
					</td>
					<td>
						<p style="text-align:right;margin-top:15px;">
						<img src="./image/send2friend.png" 
						onclick="submitToFriends();" 
						style="cursor:pointer;" alt="Send"></p>
					
					</td>
				</tr>
			</table>
		</form>
		</div>
</div>

</body>
</html>