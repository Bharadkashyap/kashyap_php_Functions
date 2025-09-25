<?php
$str="hello world what's going!";
echo $str."<br>";
$str2="I am fine";
echo $str2."<br>";
$a="how hello world";
$b="what hello earth";


echo "<br>";
echo "length: " . strlen($str);
echo "<br>";

echo "<br>";
echo "compare: " . strcmp($str,$str2);
echo "<br>";

echo "<br>";
echo "trim: " . trim($str);
echo "<br>";

echo "<br>";
echo "StrPos: " . strpos($str, $str2, 6);
echo "<br>";


echo "<br>";
echo "reverse: " . strrev($str);
echo "<br>";
echo "<br>";
echo "StrStr False: " . strstr($a, $b, false);
echo "<br>";
echo "<br>";
echo "StrStr true: " . strstr($a, $b, true);
echo "<br>";

echo "<br>";
echo "Lower: " . strtolower($str);
echo "<br>";


echo "<br>";
echo "Upper: " . strtoupper($str);
echo "<br>";

echo "<br>";
echo "Replace: " . str_replace("going", "UP guys", $str);
echo "<br>";


echo "<br>";
echo "SubString: " . substr($str, 0, 5);
echo "<br>";