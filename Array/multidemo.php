<?php

$marks=array(
			"Bipin"=>array("Maths"=>45,"Physics"=>40,"Chemistry"=>42),
			"Ravi"=>array("Maths"=>40,"Physics"=>40,"Chemistry"=>40),
			"amit"=>array("Maths"=>50,"Physics"=>45,"Chemistry"=>48),
			);


echo "<font  size=5 color=blue>Marks for Bipin in Maths : </font>"; 
echo "<font size=5 color=red>". $marks['Bipin']['Maths'] ."</font>"."<br>";  
 
echo "<font size=5 color=blue>Marks for Bhavik in Physics : </font>"; 
echo "<font size=5 color=red>". $marks['Ravi']['Physics'] ."</font>"."<br>"; 

echo "<font size=5 color=blue>Marks for Amit in Chemistry :</font> "; 
echo "<font size=5 color=red> ".$marks['amit']['Chemistry']." </font>"."<br>"; 
echo "<hr color=orange width=95%>";
echo "<pre>";
print_r($marks);
?>