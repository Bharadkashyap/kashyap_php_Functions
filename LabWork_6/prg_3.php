<?php
$surveyResponses = [7, 8, 9, 6, 5, 8, 7];

function calculateAverage(array $scores): float {
    $total = array_sum($scores);
    $count = count($scores);
    if ($count === 0) return 0;
    return $total / $count;
}

$averageScore = calculateAverage($surveyResponses);

echo "Average survey score: " . number_format($averageScore, 2);
?>
