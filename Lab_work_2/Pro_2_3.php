<?php
$months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug"];
$assoc = ["One" => 1, "Two" => 2];
$values = ["apple", "banana", "apple", "orange"];
$keys = ["name", "age"];
$vals = ["Hardik", 23];

echo "<pre>";
print_r(array_change_key_case($assoc, CASE_LOWER));
print_r(array_chunk($months, 3));
print_r(array_count_values($values));
print_r(array_combine($keys, $vals));

array_pop($months);
print_r($months);

array_push($months, "Sep");
print_r($months);

array_unshift($months, "Start");
print_r($months);

array_shift($months);
print_r($months);
echo "</pre>";
?>
