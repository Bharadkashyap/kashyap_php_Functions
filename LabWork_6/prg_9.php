<?php
$date1 = new DateTime("2025-01-01");
$date2 = new DateTime("2025-12-31");

$interval = $date1->diff($date2);

echo "Difference between dates: " . $interval->days . " days.";
?>
