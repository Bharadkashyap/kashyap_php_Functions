<?php
// Get the current month number (1 to 12) using function date
$monthNum = date("n");

// Using if...else
echo "<font size='5' color='red'>Using if...else:\n</font>"."<br>";
if ($monthNum == 1) {
    echo "Current month is January\n"."<br>";
} elseif ($monthNum == 2) {
    echo "Current month is February\n"."<br>";
} elseif ($monthNum == 3) {
    echo "Current month is March\n"."<br>";
} elseif ($monthNum == 4) {
    echo "Current month is April\n"."<br>";
} elseif ($monthNum == 5) {
    echo "Current month is May\n"."<br>";
} elseif ($monthNum == 6) {
    echo "Current month is June\n"."<br>";
} elseif ($monthNum == 7) {
    echo "Current month is July\n"."<br>";
} elseif ($monthNum == 8) {
    echo "Current month is August\n"."<br>";
} elseif ($monthNum == 9) {
    echo "Current month is September\n"."<br>";
} elseif ($monthNum == 10) {
    echo "Current month is October\n"."<br>";
} elseif ($monthNum == 11) {
    echo "Current month is November\n"."<br>";
} elseif ($monthNum == 12) {
    echo "Current month is December\n"."<br>";
} else {
    echo "Invalid month number\n";
}

// Using switch case
echo "<font size='5' color='red'>\nUsing switch case:\n</font>"."<br>";
switch ($monthNum) {
    case 1:
        echo "Current month is January\n"."<br>";
        break;
    case 2:
        echo "Current month is February\n"."<br>";
        break;
    case 3:
        echo "Current month is March\n";
        break;
    case 4:
        echo "Current month is April\n";
        break;
    case 5:
        echo "Current month is May\n";
        break;
    case 6:
        echo "Current month is June\n";
        break;
    case 7:
        echo "Current month is July\n";
        break;
    case 8:
        echo "Current month is August\n";
        break;
    case 9:
        echo "Current month is September\n";
        break;
    case 10:
        echo "Current month is October\n";
        break;
    case 11:
        echo "Current month is November\n";
        break;
    case 12:
        echo "Current month is December\n";
        break;
    default:
        echo "Invalid month number\n";
}
?>
