<?php
$finalGrade = 0; 

function calculateGrade($midterm, $finalExam) {
    global $finalGrade; 
    $finalGrade = ($midterm * 0.4) + ($finalExam * 0.6);
    return $finalGrade;
}

echo "Grade: " . calculateGrade(85, 90) . PHP_EOL;
echo "Global finalGrade variable: " . $finalGrade . PHP_EOL;
?>
