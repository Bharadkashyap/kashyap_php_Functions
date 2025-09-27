<?php
date_default_timezone_set('UTC');

$eventDate = "2025-12-25";

$now = time();
$eventTimestamp = strtotime($eventDate);

$diffSeconds = $eventTimestamp - $now;

$daysLeft = floor($diffSeconds / (60 * 60 * 24));

if ($daysLeft >= 0) {
    echo "There are {$daysLeft} days remaining until the event on {$eventDate}.";
} else {
    echo "The event on {$eventDate} has already passed.";
}
?>
