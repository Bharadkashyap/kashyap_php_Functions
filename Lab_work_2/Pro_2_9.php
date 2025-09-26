<?php
$conn = mysqli_connect("localhost", "root", "", "test_db");

$query = "
SELECT 
    HOUR(NOW()) AS hour_val,
    MINUTE(NOW()) AS minute_val,
    SECOND(NOW()) AS second_val,
    DATE_FORMAT(NOW(), '%d-%m-%Y %h:%i %p') AS formatted_date,
    DATE_SUB(NOW(), INTERVAL 5 DAY) AS date_sub,
    DATE_ADD(NOW(), INTERVAL 10 DAY) AS date_add,
    CURDATE() AS cur_date,
    CURRENT_DATE() AS current_date,
    CURTIME() AS cur_time,
    CURRENT_TIME() AS current_time,
    UNIX_TIMESTAMP(NOW()) AS unix_ts,
    FROM_UNIXTIME(UNIX_TIMESTAMP(NOW())) AS from_unix
";

$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

echo "<pre>";
print_r($row);
echo "</pre>";

mysqli_close($conn);
?>
