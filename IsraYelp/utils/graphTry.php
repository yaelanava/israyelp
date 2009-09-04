<?php

include "HTML_graph.php";

$bar = new HTML_graph();

$text = array("5","4","3","2","1");
$value = array (10,4,6,20,3);

$bar->set($text, $value, 300, 10, 0, "FFB164", "E8E8D0",0);
$bar->SetTitle("התפלגויות דירוגים");

$bar->SetBgColour("FFE4E1");

$bar->SetPercentage(false);

$bar->SetTextFontColor("000000");
$bar->SetTextFontSize("x-small");

$bar->SetNumberFontColor("CC0000");
$bar->SetNumberFontSize("x-small");

$bar->SetBorderStyle("outset");
$bar->SetBorderWidth("small");
$bar->SetBorderColor("E8E8D0");

echo $bar->horizontal();
echo "<HR>";

$colors = array("CC00CC","00CC00","000000");
$bar->Set($text,$value,1500,10,$colors,"",0,"fcfcfc");
$bar->SetTextFontColor("000000");
$bar->SetNumberFontColor("CC0000");
$bar->SetTitle("Horizontal Bar Plot with three colours");
$bar->SetBorderStyle("inset");
$bar->SetShadow(true);
echo $bar->horizontal();
echo "<HR>";


#$bar->SetTitle("Vertical Bar Plot with three colours");
$colors = array("FFFF00","99CC99","CCCCFF");
$bar->Set($text,$value,1500,10,$colors,"",0,"fcfcfc");
$bar->SetBackgroungImage("tile1.jpg");
$bar->SetNumberFontColor("CCCCCC");
$bar->SetTitle("");
$bar->SetTextFontColor("ffffff");
$bar->SetBgColour("666633");
$bar->SetBorderStyle("outset");
$bar->SetBorderWidth("medium");
$bar->SetBorderColor("62B0FF");
$bar->SetShadow(false);
echo $bar->vertical();

?>