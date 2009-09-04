<?

//include "utils";

/**
 * A class to draw graphs in vertival or horizontally with a given text 
 * and value.
 * Piotr Trawinski <piotr.trawinski@weblab.pl>  2001.05.01
 * Modified by Clive Smart <clive@dev.co.za>    2001.05.02
 *	Modified by Bulent Tezcan <bulent@greenpepper.ca>		2001.08.27

 * If you make any improvements to this class please let me
 * know so that i can put them up here.

 *	Examples included on the bottom
 *	This software is Free like Linux

 * @author Bulent Tezcan
 */

class HTML_graph {
        var $text;            // Text describtions of elements
        var $value;           // Element values
        var $size;            // (array) Width or height of the image
        var $size2;           // constant for all elements height or width
        var $decp;            // Decimal Places for Percentage
        var $decv;						// Decimal Places for Numerical value
        var $colour;          // Bar Colour - Hex eg FACE00
        var $bgcolour;        // Background Colour - Hex eg FACE00
        var $border;          // Border Size
				var $border_style;		// Border Style
				var $border_width;		// Border Width
				var $border_color;		// Border Color
        var $scale;           // Maximum x/y Scale
        var $perc;            // (array) Percentage values after calculations
        var $elements;        // Number of elements to be shown
				var $title;						// Table Title
				var $percentage;			// value to print percentage or not, ie: true or false
				var $number;					// value to print percentage or not, ie: true or false
				var $bgimage;					// Set the image you want for the background
				var $t_font;					// Font for the text
				var $t_font_color;		// Font-color for the text
				var $t_font_size;			// Font-size for the text
				var $t_font_weight;		// Font-weight for the text
				var $n_font;					// Font for the numbers
				var $n_font_color;		// Font-color for the numbers
				var $n_font_size;			// Font-size for the numbers
				var $n_font_weight;		// Font-weight for the numbers
				var $shadow;					// To see a shadow on the right and bottom of the table
				var $fixedSize;				// Set this to have a fixedSize * value insted of a 
															// changing value all the time
				var $descriptionLink;	// Pass an array of links for each description that
															// you want to be a link.
				
				

/**
 * Constructor of the class HTML_graph.
 * @public
 */	
				function HTML_graph()
				{
					$this->t_font = "verdana";
					$this->t_font_color = "000000";
					$this->t_font_size = "medium";
					#[ xx-small | x-small | small | medium | large | x-large | xx-large ]
					$this->t_font_weight = "normal";
					# normal | bold | bolder | lighter | 100 | 200 | 300 | 400 | 500 |600 | 700 | 800 | 900 | inherit

					$this->n_font = "verdana";
					$this->n_font_color = "000000";
					$this->n_font_size = "medium";
					#[ xx-small | x-small | small | medium | large | x-large | xx-large ]
					$this->n_font_weight = "normal";
					# normal | bold | bolder | lighter | 100 | 200 | 300 | 400 | 500 |600 | 700 | 800 | 900 | inherit

					$this->border_style = "groove";
					# none | hidden | dotted | dashed | solid | double | groove | ridge |
					# inset | outset

					$this->border_width = "medium";
					# thin | thick | medium

					$this->border_color = "737373"; #grey
					$this->shadow = true;
					$this->colour = "990066";
					$this->fixedSize = 0;
					$this->decp = 0;
					$this->decv = 2;
					$this->descriptionLink = null;
					$this->number = true;
				}
/**
 * Method to set the values for the graph, it is kind of a second constructor
 * @public
 * @returns void
 */	
				function set(	$text,$value,$scale,$size2,$colour="FF0000",
											$bgcolour="",$border=0,$colourEach=null)
				{
					$this->text				= $text;
					$this->value			= $value;
					$this->scale			= $scale;
					$this->size2			= $size2;
					$this->colour			= $colour;
					$this->colourEach = $colourEach;

					if ($bgcolour==null or $bgcolour=="")
						$this->bgcolour = "FFFFFF";
					else
						$this->bgcolour = $bgcolour;

					$this->border			= $border;
					$this->percentage	= true;
					$this->bgimage		= "";
        }
/**
 * Method to calculate the colors and values and percentages.
 * @public
 * @returns void
 */	
        function calculate()
				{
					$this->elements = count($this->value);
        // Calculate Values
        			$sumvalue = 0;
					for ($i=0; $i < $this->elements; $i++) {
									$sumvalue += $this->value[$i];
					}
					for ($i=0; $i < $this->elements;$i++)
					{
						if ($this->value[$i] != 0)
						{
							// Fixed the Percentage Calculation to be more accurate
							$bar_perc = (100 * $this->value[$i] / $sumvalue);
							$bar_perc = $bar_perc * pow(10,$this->decp);
							$bar_perc = round($bar_perc);
							$bar_perc = $bar_perc / pow(10,$this->decp);
						
							if ($this->fixedSize)
								$this->size[$i] = (int)($this->value[$i] * $this->fixedSize);
							else
								$this->size[$i] = (int)($this->value[$i] * ($this->scale/$sumvalue));
						}
						elseif ($this->value[$i]==0)
						{
							$bar_perc=0.00;
						}
						// Handle Decimal Places
						if ($this->decp > 0) {
							 $prtf = "%.".$this->decp."f%% ";
						} else {
							 $prtf = "%d%% ";
						}
						$this->perc[$i] = sprintf($prtf, $bar_perc);
					}
        }
/**
 * Method to set the title of the graph.
 * @public
 * @returns void
 */	
				function SetTitle($title)
				{ 
					$this->title = $title;                                
        }
/**
 * Method to set the background image for the graph.
 * @public
 * @returns void
 */	
				function SetBackgroungImage($imagePath)
				{ 
					$this->bgimage = $imagePath;                                
        }
/**
 * Method to set the background color for the graph.
 * @public
 * @returns void
 */	
				function SetBgColour($colour)
				{ 
					$this->bgcolour = $colour;                                
        }
/**
 * Method to set the percentage on / off graph.
 * @public
 * @returns void
 */	
				function SetPercentage($percentage)
				{ 
					switch (true)
					{
						case $percentage == true:
						case $percentage == false:
						case $percentage == 1:
						case $percentage == 0:
							$this->percentage = $percentage;
							break;
						default:
							$this->percentage = true;
					}                               
        }
/**
 * Method to set the numbers on / off the graph.
 * @public
 * @returns void
 */	
				function SetNumber($number)
				{ 
					switch (true)
					{
						case $number == true:
						case $number == false:
						case $number == 1:
						case $number == 0:
							$this->number = $number;
							break;
						default:
							$this->number = true;
					}                               
        }
/**
 * Method to set the text font for the graph.
 * @public
 * @returns void
 */	
				function SetTextFont($font)
				{ 
					$this->t_font = $font;                                
        }
/**
 * Method to set the text font color for the graph.
 * @public
 * @returns void
 */	
				function SetTextFontColor($fontColor)
				{ 
					$this->t_font_color = $fontColor;                                
        }
/**
 * Method to set the text font size for the graph.
 * @public
 * @returns void
 */	
				function SetTextFontSize($fontSize)
				{ 
					$this->t_font_size = $fontSize;                                
        }
/**
 * Method to set the text font weight for the graph.
 * @public
 * @returns void
 */	
				function SetTextFontWeight($fontWeight)
				{ 
					$this->t_font_weight = $fontWeight;                                
        }
/**
 * Method to set the number font for the graph.
 * @public
 * @returns void
 */	
				function SetNumberFont($font)
				{ 
					$this->n_font = $font;                                
        }
/**
 * Method to set the number font color for the graph.
 * @public
 * @returns void
 */	
				function SetNumberFontColor($fontColor)
				{ 
					$this->n_font_color = $fontColor;                                
        }
/**
 * Method to set the number font size for the graph.
 * @public
 * @returns void
 */	
				function SetNumberFontSize($fontSize)
				{ 
					$this->n_font_size = $fontSize;                                
        }
/**
 * Method to set the number font weight for the graph.
 * @public
 * @returns void
 */	
				function SetNumberFontWeight($fontWeight)
				{ 
					$this->n_font_weight = $fontWeight;                                
        }
/**
 * Method to set a shadow for the graph.
 * @public
 * @returns void
 */	
				function SetShadow($trueFalse)
				{ 
					switch (true)
					{
						case $trueFalse == true:
						case $trueFalse == false:
						case $trueFalse == 1:
						case $trueFalse == 0:
							$this->shadow = $trueFalse;
							break;
						default:
							$this->shadow = true;
					}                               
        }
/**
 * Method to set the border style for the graph.
 * @public
 * @returns void
 */	
				function SetBorderStyle($style)
				{ 
					$this->border_style = $style;                                
        }
/**
 * Method to set the border width for the graph.
 * @public
 * @returns void
 */	
				function SetBorderWidth($width)
				{ 
					$this->border_width = $width;                                
        }
/**
 * Method to set the border color for the graph.
 * @public
 * @returns void
 */	
				function SetBorderColor($color)
				{ 
					$this->border_color = $color;                                
        }
/**
 * Method to set the value of fixedsize(this will effect the size of the graph).
 * @public
 * @returns void
 */	
				function SetFixedSize($size)
				{ 
					$this->fixedSize = $size;                                
        }
/**
 * Method to set the percentage precision.
 * @public
 * @returns void
 */	
				function SetPercentagePrecision($size)
				{ 
					$this->decp = $size;                                
        }
/**
 * Method to set the number precision.
 * @public
 * @returns void
 */	
				function SetNumberPrecision($size)
				{ 
					$this->decv = $size;                                
        }
/**
 * Method to set the description link value.If there is a link value,
 * users will be able to go to that link by clicking on it.
 * @public
 * @returns void
 */	
				function SetDescriptionLink($arrayOfLinks)
				{ 
					if (is_array($arrayOfLinks))
						$this->descriptionLink = $arrayOfLinks;
        }
/**
 * Method to format the number.
 * @private
 * @returns void
 */	
				function FormatNumber( $numberToFormat )
				{ 
					if ($this->decv > 0) {
						 $prtf = "%.".$this->decp."f ";
					} else {
						 $prtf = "%d ";
					}
					return sprintf($prtf, $numberToFormat);
        }

				function sort() { // Function to sort values descending ...
                                #in the future
        }
/**
 * Method to display the graph horizontaly.
 * @public
 * @returns void
 */	
        function horizontal()
				{     // Needs: @text @value  @perc  @size  $elements  $height
					$this->calculate();

					$html = "<table cellspacing=\"3\" cellpadding=\"3\" border=\"".$this->border
									."\" bgcolor=\"#".$this->bgcolour."\"";
					
					if ($this->shadow)
						$html .= "style=\"border-right-style: ".$this->border_style
										."; border-bottom-style: ".$this->border_style
										."; border-width:".$this->border_width
										."; border-color: #".$this->border_color."\"";

					$html .= ">\n";
					
					if ($this->title)
					{
						$html .= "<tr align=\"center\"><th>$this->title</th></tr>";
						$html .= "\n<tr><td>";
					}
					$html .= "  <tr>\n    <td>\n";
					$html .= "      <table align=\"center\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" ";
					
					if ($this->bgimage)
						$html .= " background=\"" .$this->bgimage."\" ";
					else
						$html .= " bgcolor=\"#".$this->bgcolour."\" ";
				
					$html .= ">\n";
					
					for ($i=0; $i < $this->elements; $i++)
					{
						$html .= "        <tr>\n          <td height=\"15\" align=\"left\"";
						$html .= " style=\"font-family:".$this->t_font
								 		."; color:#".$this->t_font_color."; font-size:".$this->t_font_size
						."; font-weight:".$this->t_font_weight."\"";
						$html .=">";
						
						if ( is_array($this->descriptionLink) )
						{
							if ($this->descriptionLink[$i])
								$html .= "<a href=\"".$this->descriptionLink[$i]."\">".$this->text[$i]
												."</a></td>\n";
							else
								$html .= $this->text[$i]."</td>\n";
						}
						else
							$html .= $this->text[$i]."</td>\n";

						$html .= "          <td>&nbsp;</td>\n          <td valign=\"top\" ";
						$html .= "style=\"font-family:".$this->n_font
										."; color:#".$this->n_font_color."; font-size:".$this->n_font_size
										."; font-weight:".$this->n_font_weight."\"";
						$html .= ">";

						if ($this->value[$i] > 0)
						{
							if (is_array($this->colour))
							{
								$x = $i % sizeof($this->colour);
								$this->mColour = $this->colour[$x];
							}
							elseif (is_array($this->colourEach))
							{
								$x = $i % sizeof($this->colourEach);
								$this->mColour = $this->colourEach[$x];
							}
							else
							{
								# default color is black
								$this->mColour = "000000";
							}
							
							$html .= "<img src=\"gifpix.php?c=".$this->mColour
										."\" height=\"".$this->size2."\" width=\"".$this->size[$i]."\""
										." alt=\"".$this->text[$i]."(".$this->value[$i].")\"".">";	
						}
						
						switch (TRUE)
						{
							case $this->percentage:
								$html .= $this->perc[$i]." (".($this->value[$i]).")";
								break;
							case $this->number:
								if ($this->value[$i] == -1)
									$html .= " (n/a)";
								elseif ($this->value[$i] == -2)
									$html .= " (Incomplete)";
								else
									$html .= " (".$this->FormatNumber($this->value[$i]).")";
								break;
						}

						$html .= "</td>\n";
					}

					$html .= "        </tr>\n      </table>\n";
					$html .= "    </td>\n  </tr>\n</table>\n";
					return $html;
        }
/**
 * Method to display the graph vertically.
 * @public
 * @returns void
 */	
        function vertical ()
				{
					$html = "<table cellspacing=\"3\" cellpadding=\"3\"" 			
								."border=\"".$this->border."\" bgcolor=\"#".$this->bgcolour."\"";
					
					if ($this->shadow)
						$html .= " style=\"border-right-style: ".$this->border_style
										."; border-bottom-style: ".$this->border_style
										."; border-width:".$this->border_width
										."; border-color: #".$this->border_color."\"";

					$html .= ">\n";

					if ($this->title)
					{
						$html .= "\n<tr align=\"center\"><th>$this->title</th></tr>";
						$html .= "\n<tr><td>";
					}

					$html .= "  <tr>\n    <td>\n";
					$html .= "      <table align=\"center\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"";
					
					if ($this->bgimage != "")
						$html .= " background=\"" .$this->bgimage."\" ";
					else
						$html .= " bgcolor=\"#".$this->bgcolour."\" ";
				
					$html .= ">\n        <tr>\n";		

					for ($i=0; $i < $this->elements; $i++)
					{
						$html .= "          <td valign=\"bottom\" align=\"middle\"";
					
						$html .= " style=\"font-family:".$this->n_font
										."; color:#".$this->n_font_color."; font-size:".$this->n_font_size
										."; font-weight:".$this->n_font_weight."\"";

						$html .=">";

						switch (TRUE)
						{
							case $this->percentage:
								$html .= $this->perc[$i]." (".($this->value[$i]).")";
								break;
							case $this->number:
								$html .= "<center> (".$this->FormatNumber($this->value[$i]).")</center>";
								break;
						}

						
						if ($this->value[$i] != 0)
						{
							if (is_array($this->colour))
							{
								$x = $i % sizeof($this->colour);
								$this->mColour = $this->colour[$x];
							}
							elseif (is_array($this->colourEach))
							{
								$x = $i % sizeof($this->colourEach);
								$this->mColour = $this->colourEach[$x];
							}
							else
							{
								# default colur is black
								$this->mColour = "000000";
							}			
							$html .= "<img src=\"gifpix.php?c=".$this->mColour
										."\" width=\"".$this->size2."\" height=\"".$this->size[$i]."\""
										."alt=\"".$this->text[$i]."(".$this->value[$i].")\"".">";
						}
						$html .= "</td>\n";
					}
					$html .= "        </tr>\n        <tr>\n";

					for ($i=0; $i < $this->elements; $i++)
					{
						$html .= "          <td width=\"20\" valign=\"top\" align=\"middle\"";
						
						$html .= "style=\"font-family:" .$this->t_font
										."; color:#" .$this->t_font_color
										."; font-size:" .$this->t_font_size
										."; font-weight:" .$this->t_font_weight ."\"";
						$html .= ">" .$this->text[$i] ."</td>\n";						
					}

					$html .= "        </tr>\n      </table>\n";
					$html .= "    </td>\n  </tr>\n</table>\n";
					return $html;
        }

}
// Examples

#Header("Content-type:  text/html");

# There are 4 input values
#     Required
#       1. text elements,
#       2. Numerical values,
#       3. Scale - sets the maximum width or height for a bar
#       4. Value constant for all all elements  height (horizontal) or width (vertical)
#     Optional
#       5. Decimal Places to display in the Percentage - Default=2
#       6. Bar Colour in Hex (eg. A0A0A8) - Default=FF0000 (Red)
#       7. Background Colour in Hex (eg. A0A0A8) - Default='' (None)
#       8. Boder Size - Default=0


# Note :   If you want to run a test of this class 
# remove the if(0), it will print you the graph.
#
# Make sure you put the images in the same directory as the class file
# reside, or change the path to whatever your images reside.

# Example : $bar->SetBackgroungImage("./images/tile.jpg");
if(0)
{
$bar = new HTML_graph();

$text = array("Blod Pressure","Body Composition","Fasting Cholesterol","Fasting Glucose","Physical Activity","Alchocol Consumption","Driving","Smoking","Family History","Self Care practicies","Health Screening","Environmentel Factors");
$value = array (100,50,40,50,30,10,75,68,53,89,23,45);

$bar->set($text,$value,1500,10,0,"FFB164","E8E8D0",0);
#set($text,$value,$scale,$size2,$decp=2,$colour="FF0000",$bgcolour="",$border=0)
$bar->SetTitle("Horizontal Bar Plot with one colour and a background colour and image");
$bar->SetBackgroungImage("tile.jpg");
$bar->SetPercentage(false);
$bar->SetTextFontColor("FFFFFF");
$bar->SetNumberFontColor("33FFFF");
$bar->SetBorderColor("6B6B6B");
echo $bar->horizontal();
echo "<HR>";

$colors = array("CC00CC","00CC00","000000");
$bar->Set($text,$value,1500,10,$colors,"",0,"fcfcfc");
$bar->SetTextFontColor("000000");
$bar->SetTextFontSize("xx-small");
$bar->SetNumberFontColor("CC0000");
$bar->SetTitle("Horizontal Bar Plot with three colours");
$bar->SetBorderStyle("inset");
$bar->SetShadow(true);
echo $bar->horizontal();
echo "<HR>";


#$bar->SetTitle("Vertical Bar Plot with three colours");
$bar->SetBackgroungImage("tile1.jpg");

$bar->SetTitle("");
$bar->SetBgColour("666633");
$bar->SetBorderStyle("outset");
$bar->SetBorderWidth("medium");
$bar->SetBorderColor("62B0FF");
$bar->SetShadow(false);
echo $bar->vertical();
}
?>