<?php
$var = "123";
echo "Original type: " . gettype($var) . "<br>";

settype($var, "integer");
echo "After casting: " . gettype($var) . " = $var<br>";

$floatVal = 45.67;
echo "Type of floatVal: " . gettype($floatVal) . "<br>";

settype($floatVal, "string");
echo "Now it's: " . gettype($floatVal) . " = $floatVal<br>";
?>
