<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
<title>����� | IsraYelp</title>

	<style>	
	BODY {	
	FONT-SIZE: 12px;	
	MARGIN: 0px;	
	COLOR: #555;	
	FONT-FAMILY: arial,david, 'Lucida Grande', 'Bitstream Vera Sans', verdana, sans-serif;	
	BACKGROUND-COLOR: #fff;	
	TEXT-ALIGN: center
	}
	
	DIV {	
	FONT-SIZE: 12px;	
	COLOR: #555;	
	FONT-FAMILY: arial, david, times new roman, 'Lucida Grande', 'Bitstream Vera Sans', verdana, sans-serif;	
	TEXT-ALIGN: center
	}
	
	#head {	
	FONT-SIZE: 80%;	
	BACKGROUND: url("./image/back.png") repeat-x;	
	MARGIN: 0px auto;	
	OVERFLOW: hidden;	
	WIDTH: 950px;	
	POSITION: relative;	
	HEIGHT: 66px
	}
	
	#head #logo {
	BACKGROUND: url("./image/israLogo.png") #fff no-repeat;		
	RIGHT: 10px;
	HEIGHT: 66px;
	WIDTH: 160px;	
	POSITION: absolute;		
	TEXT-ALIGN: center} 
	
	
	#head #logo A {	
	DISPLAY: block;	
	WIDTH: 175px;	
	TEXT-INDENT: -9999px;	
	HEIGHT: 66px;	
	TEXT-DECORATION: none;	
	outline: 0px
	}
	
	#head #rightEdge {	
	BACKGROUND: url("./image/back_right.gif") #fff no-repeat right bottom;	
	FLOAT: right;
	WIDTH: 6px;	
	HEIGHT: 66px
	}
	
	#head #leftEdge {	
	BACKGROUND: url("./image/back_left.gif") #fff no-repeat left bottom;	
	FLOAT: left;
	WIDTH: 6px;	
	HEIGHT: 66px
	}
	

	A {	
	COLOR: #66c;	
	TEXT-DECORATION: none
	}
	
	IMG {	
	BORDER-TOP-WIDTH: 0px;	
	BORDER-LEFT-WIDTH: 0px;	
	BORDER-BOTTOM-WIDTH: 0px;	
	BORDER-RIGHT-WIDTH: 0px
	}
	
	UL {	
	FONT-SIZE: 16px
	MARGIN-TOP: 5px;
	LIST-STYLE-TYPE: disc
	}
	
	DIV {	
	FONT-SIZE: 12px;	
	COLOR: #555;	
	FONT-FAMILY: arial, 'Lucida Grande', 'Bitstream Vera Sans', verdana, sans-serif,david;	
	TEXT-ALIGN: right}
	

	#bodyContainer {	
	BORDER-RIGHT: #ccc 1px solid;	
	PADDING-RIGHT: 0px;	
	BORDER-TOP: #ccc 1px solid;	
	PADDING-LEFT: 0px;	
	PADDING-BOTTOM: 10px;	
	MARGIN-LEFT: auto;	
	BORDER-LEFT: #ccc 1px solid;	
	WIDTH: 930px;	
	MARGIN-RIGHT: auto;	
	PADDING-TOP: 10px;	
	BORDER-BOTTOM: #ccc 1px solid;
	TEXT-ALIGN: center;
	} 
	
	P {	
	PADDING-RIGHT: 0px;	
	PADDING-LEFT: 0px;	
	PADDING-BOTTOM: 0px;	
	MARGIN: 0px;	
	PADDING-TOP: 0px;	
	FONT-SIZE: 12px;	
	MARGIN-BOTTOM: 10px;	
	COLOR: #555}
</style>

</head>
<body>
<div id="head">
		<div id="logo">
			<A href="./">Yelp</A>
		</div>
		<div id="leftEdge"></div>
		<div id="rightEdge"></div>
</div>
<div id="bodyContainer">
	
	<p><?php session_start(); print($_SESSION['username']);?>-��� ����� �</p>
	<a href="main.php">.��� ��� ��� ������ ����� ����</a>
</div>
</body>
</html>