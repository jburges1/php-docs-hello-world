<!DOCTYPE html>
<body>
<h1 style="color: #A00000">Bu&szlig;geld- und Punkterechner f&uuml;r Geschwindigkeits&uuml;berschreitung f&uuml;r Flensburg</h1>

<form name="Bu&szlig;geld- und Punkterechner f&uuml;r Flensburg" method="get">

<h2>Geschwindigkeit in km/h</h2>
Gefahrene Geschwindigkeit: <input type="int" name="geschwindigkeit"><br>
Erlaubte Maximalgeschwindigkeit: <input type="int" name="maxgeschwindigkeit"><br>
	 
<h2>Zone der Geschwindigkeits&uuml;berschreitung</h2>
<input type="radio" name="ort" value="au"/>Au&szlig;erorts
<input type="radio" name="ort" value="in"/>Innerorts<br><br>
<input type="submit" name="los" value="Berechnen"></input>

</form
<hr>
<?php
$geschwindigkeit = $_GET["geschwindigkeit"];
$maxgeschwindigkeit = $_GET["maxgeschwindigkeit"];
$ort = $_GET["ort"];
$strafe = $geschwindigkeit - $maxgeschwindigkeit;
		
if ($ort =="au") {
$ort="au&szlig;erorts";
}
if ($ort == "in") {
$ort="innerorts";
}
echo "<p> Sie sind $strafe km/h zu schnell gefahren.</p>";
$ort = $_GET["ort"];			
if ($geschwindigkeit <= $maxgeschwindigkeit)
echo "Die erlaubte Geschwindigkeit wurde nicht &uuml;berschritten, keine Strafe!";
if ($ort=="au")
switch ($strafe) {
case ($strafe < "1"):
echo "Die erlaubte Geschwindigkeit wurde nicht &uuml;berschritten, keine Strafe!";
break;
case ($strafe < "11"):
echo "Bei dieser Geschwindigkeits&uuml;berschreitung liegt die zu zahlende Strafe bei 48,50 â‚¬.";
break;
case ($strafe < "16"):
echo "Bei dieser Geschwindigkeits&uuml;berschreitung liegt die zu zahlende Strafe bei 68,50 â‚¬.";
break;
case ($strafe < "21"):
echo "Bei dieser Geschwindigkeits&uuml;berschreitung liegt die zu zahlende Strafe bei 88,50 â‚¬.";
break;
case ($strafe < "26"):
echo "Bei dieser Geschwindigkeits&uuml;berschreitung liegt die zu zahlende Strafe bei 128,50 â‚¬ und 1 Punkt.";
break;
case ($strafe < "31"):
echo "Bei dieser Geschwindigkeits&uuml;berschreitung liegt die zu zahlende Strafe bei 178,50 â‚¬ und 1 Punkt.";
break;
case ($strafe < "41"):
echo "Bei dieser Geschwindigkeits&uuml;berschreitung liegt die zu zahlende Strafe bei 228,50 â‚¬ und 1 Punkt.";
break;
case ($strafe < "51"):
echo "Bei dieser Geschwindigkeits&uuml;berschreitung liegt die zu zahlende Strafe bei 348,50 â‚¬ und 2 Punkte.";
break;
case ($strafe < "61"):
echo "Bei dieser Geschwindigkeits&uuml;berschreitung liegt die zu zahlende Strafe bei 508,50 â‚¬ und 2 Punkte.";
break;
case ($strafe < "71"):
echo "Bei dieser Geschwindigkeits&uuml;berschreitung liegt die zu zahlende Strafe bei 633,50 â‚¬ und 2 Punkte.";
break;
case ($strafe > "71"):
echo "Bei dieser Geschwindigkeits&uuml;berschreitung liegt die zu zahlende Strafe bei 738,50 â‚¬ und 2 Punkte.";
break;			
}		 
		
if ($ort=="in"){
switch ($strafe) {
case ($strafe < "1"):
echo "Die erlaubte Geschwindigkeit wurde nicht &uuml;berschritten, keine Strafe!";
break;
case ($strafe < "11"):
echo "Bei dieser Geschwindigkeits&uuml;berschreitung liegt die zu zahlende Strafe bei 58,50 â‚¬.";
breake;
case ($strafe < "16"):
echo "Bei dieser Geschwindigkeits&uuml;berschreitung liegt die zu zahlende Strafe bei 78,50 â‚¬.";
break;
case ($strafe < "21"):
echo "Bei dieser Geschwindigkeits&uuml;berschreitung liegt die zu zahlende Strafe bei 98,50 â‚¬.";
break;
case ($strafe < "26"):
echo "Bei dieser Geschwindigkeits&uuml;berschreitung liegt die zu zahlende Strafe bei 143,50 â‚¬ und 1 Punkt.";
break;
case ($strafe < "31"):
echo "Bei dieser Geschwindigkeits&uuml;berschreitung liegt die zu zahlende Strafe bei 208,50 â‚¬ und 1 Punkt.";
break;
case ($strafe < "41"):
echo "Bei dieser Geschwindigkeits&uuml;berschreitung liegt die zu zahlende Strafe bei 288,50 â‚¬ und 1 Punkt.";
break;
case ($strafe < "51"):
echo "Bei dieser Geschwindigkeits&uuml;berschreitung liegt die zu zahlende Strafe bei 428,50 â‚¬ und 2 Punkte.";
break;
case ($strafe < "61"):
echo "Bei dieser Geschwindigkeits&uuml;berschreitung liegt die zu zahlende Strafe bei 591,50 â‚¬ und 2 Punkte.";
break;
case ($strafe < "71"):
echo "Bei dieser Geschwindigkeits&uuml;berschreitung liegt die zu zahlende Strafe bei 738,50 â‚¬ und 2 Punkte.";
break;
case ($strafe > "71"):
echo "Bei dieser Geschwindigkeits&uuml;berschreitung liegt die zu zahlende Strafe bei 843,50 â‚¬ und 2 Punkte.";
break;
			
}
}		
?> 
</body>
</html>