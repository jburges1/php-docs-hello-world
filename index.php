<html>
<body>
<h1> Kleine Programmieraufgabe Primzahlenfinder- Jakob Burges  <h1>

<form action="PrimzahlFinder.php" method="post">
Von: <input type="int" name="von"><br>
Bis: <input type="int" name="bis"><br>
<input type="submit">
</form>

<?php 
function Primzahl( $nummer ) 
{ 

for( 
$zahlen = 2; 
$zahlen*$zahlen <= $nummer; 
$zahlen++ ) 
       
if( !($nummer % $zahlen) ) 
return FALSE; 
return TRUE; 
} 

$anfang =$_POST['von']; 
$ende =$_POST['bis']; 

for
(
$zahlen = $anfang; 
$zahlen<$ende; 
$zahlen++
) 
{ 
if
(Primzahl($zahlen) == TRUE) 
{ 
echo "$zahlen\n"; 
} 
} 

?> 

</body>
</html>