<?php
	session_start();
	include './utils/functions.php'; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title> שאלות נפוצות </title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,ביקורת, מסעדות, בתי קולנוע, מרפאות,מספרות,בתי קפה,חנויות">
	
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
			<td> <h1 align="center"> תשובות לשאלות נפוצות </h1> </td>
		</tr>
		<tr>
			<td width=200>
				<h1> כיצד נרשמים לאתר? </h1>
			</td>
			<td>
				 על מנת להירשם עליך להתחבר לדף הראשי שלנו, שם תוכל למצוא את הקישור
				 <a href="./signup.php"> "להרשמה"  </a>
				 שמאפשר הרשמה לאתר. כעת כל שעליך לעשות הוא למלא את הפרטים ותוכל להיות משתמש רשום ב- IsraYelp.				
			</td>
		</tr>
		<tr>
			<td width=200>
				<h1> כיצד ניתן לכתוב ביקורות לאתר? </h1>
			</td>
			<td>
				 על מנת לכתוב ביקורת עליך להיות רשום לאתר
				 <a href="./signup.php"> (להרשמה לחץ כאן). </a>
				כעת אתה יכול לחפש את המקום עליו אתה מעוניין להוסיף ביקורת דרך החיפוש בדף הראשי
				וכאשר המקום נמצא, ע"י לחיצה על "כתוב ביקורת" ניתן להוסיף ביקורות ללא בעיה. 				
			</td>
		</tr>
		<tr>
			<td width=200>
				<h1> כיצד ניתן לראות את כל הביקורות על מקום מסויים? </h1>
			</td>
			<td>
				 בכדי לראות את כל הביקורות על מקום כלשהו עלייך למצוא ראשית את המקום
				 <a href="./main.php"> (ע"י חיפוש בדף הראשי). </a>
				לאחר שמצאת את המקום המבוקש, תוכל לראות בתחתית העמוד את כל הביקורות שנכתבו עבור עסק זה. 				
			</td>
		</tr>
		<tr>
			<td width=200>
				<h1> האם ניתן לראות את כל הביקורות שכתב משתמש מסויים? </h1>
			</td>
			<td>
				 כן, כמובן שזה אפשרי, יש שתי דרכים לעשות זאת:
				 <br>
				 1) אם במקרה, בזמן ששוטטת באתר נתקלת במשתמש שמעניין אותך לקרוא עוד ביקורות שכתב,
				 ניתן פשוט ללחוץ על משתמש זה ולהגיע לדף הבית שלו. בדף זה, בנוסף לפרטי המשתמש מופיעות גם הביקורות שכתב.
				 <br>
				 2) האפשרות השנייה היא לחפש את משתמש זה ע"י כניסה 
				 <a href="./find_review.php"> ל"חפש ביקורת" </a>
				(המופיע בלשונית בראש העמוד).
				שם עליך לבצע את החיפוש לפי כותב הביקורת ומכאן ניתן להגיע לדף הבית של המשתמש. 				
			</td>
		</tr>
		<tr>
			<td width=200>
				<h1> האם ניתן למחוק ביקורות? </h1>
			</td>
			<td>
				 האפשרות למחיקת ביקורת ניתנת רק לכותב הביקורת,
				 על מנת לעשות זאת עליך להיכנס לדף הבית שלך ומשם לדף הביקורות.
				 שם תינתן לך האופציה למחוק כל ביקורת שכתבת. 				
			</td>
		</tr>
		<tr>
			<td width=200>
				<h1> לא מצאתי את המקום שחיפשתי, מה אפשר לעשות? </h1>
			</td>
			<td>
				כאשר יעד החיפוש לא נמצא יש באפשרותך לפנות אלינו על מנת שנוסיף את 
				המקום המבוקש.
				<br>
				 כל שעליך לעשות הוא למלא את הטופס הנמצא
				 <a href="./new_place.php"> כאן. </a>			
			</td>
		</tr>
		<tr>
			<td width=200>
				<h1> כיצד ניתן לפנות למשתמש רשום באתר? </h1>
			</td>
			<td>
				על מנת לפנות למשתמש עליך להגיע לדף הבית שלו
				 <a href="./find_review.php"> (ניתן למצוא אותו ע"י חיפוש).</a>
				 <br>	
				 בדף הבית של המשתמש קיימת האפשרות לשלוח הודעה למשתמש זה.		
			</td>
		</tr>
		<tr>
			<td width=200>
				<h1> כיצד ניתן לשנות את הפרטים שהכנסתי בהרשמה לאתר? </h1>
			</td>
			<td>
				כל שעליך לעשות הוא לגשת לדף הבית שלך,
				שם תמצא את האפשרות לערוך את כל פרטייך האישיים הכוללים:
				שינוי מקום המגורים, שינוי כתובת הדוא"ל שלך ועריכת תמונת הפרופיל.
						
			</td>
		</tr>
	</table>
	
</div>
<?php echo getFooterHTMLCode()?>
</body>
</html>