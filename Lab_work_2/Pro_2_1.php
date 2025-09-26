<?php
// Numeric array
$days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

// Associative array
$months = [
    "January" => 30, "February" => 28, "March" => 31, "April" => 30,
    "May" => 31, "June" => 30, "July" => 31, "August" => 31,
    "September" => 30, "October" => 31, "November" => 30, "December" => 31
];

// Multidimensional array
$laptops = [
    "Dell" => ["model" => "Inspiron 15", "price" => 55000],
    "HP" => ["model" => "Pavilion x360", "price" => 60000]
];

echo "<pre>";
print_r($days);
print_r($months);
print_r($laptops);
echo "</pre>";
?>
