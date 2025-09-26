<?php
$conn = mysqli_connect("localhost", "root", "", "test_db");

$query = "
SELECT 
    DAYOFWEEK(NOW()) AS day_of_week,
    WEEKDAY(NOW()) AS weekday,
    DAYOFMONTH(NOW()) AS day_of_month,
    DAYOFYEAR(NOW()) AS day_of_year,
    DAYNAME(NOW()) AS day_name,
    MONTH(NOW()) AS month_num,
    MONTHNAME(NOW()) AS month_name,
    WEEK(NOW()) AS week_num,
    NOW() AS now_val,
    SYSDATE() AS sysdate_val,
    CURRENT_TIMESTAMP() AS current_ts
";

$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

echo "<pre>";
print_r($row);
echo "</pre>";

mysqli_close($conn);
?>
