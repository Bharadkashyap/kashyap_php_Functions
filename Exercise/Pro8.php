<?php
// Assign two arrays
$a = [10, 20, 30, 40];
$b = [5, 15, 25];

// a) Print values of array
echo "a) Array 1 values: ";
foreach ($a as $value) {
    echo $value . " ";
}
echo "<br>";

// b) Reverse array
echo "b) Reversed Array 1: ";
$reversed = array_reverse($a);
foreach ($reversed as $value) {
    echo $value . " ";
}
echo "<br>";

// c) Merge and sort arrays
echo "c) Merged and Sorted Arrays: ";
$merged = array_merge($a, $b);
sort($merged);
foreach ($merged as $value) {
    echo $value . " ";
}
echo "<br>";

// d) Sum of elements
echo "d) Sum of Array 1: " . array_sum($a);
?>
