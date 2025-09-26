<?php
$conn = mysqli_connect("localhost", "root", "", "test_db");

$query = "
SELECT 
    LENGTH('Hello World') AS length_val,
    CONCAT('Hello', ' ', 'World') AS concat_val,
    CONCAT_WS('-', '2025', '09', '16') AS concat_ws_val,
    TRIM('   Rajkot   ') AS trim_val,
    LTRIM('   Rajkot') AS ltrim_val,
    RTRIM('Rajkot   ') AS rtrim_val,
    LPAD('123', 5, '0') AS lpad_val,
    RPAD('123', 5, '*') AS rpad_val,
    LOCATE('World', 'Hello World') AS locate_val,
    SUBSTR('Hello World', 7, 5) AS substr_val,
    LCASE('HELLO') AS lcase_val,
    UCASE('hello') AS ucase_val,
    REPEAT('Hi', 3) AS repeat_val,
    REPLACE('Hello Rajkot', 'Rajkot', 'India') AS replace_val
";

$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

echo "<pre>";
print_r($row);
echo "</pre>";

mysqli_close($conn);
?>
