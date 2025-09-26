<form method="post">
    Enter numbers (comma-separated): <input type="text" name="numbers">
    <input type="submit" value="Sort">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST['numbers'];
    $array = explode(",", $input);
    sort($array);
    echo "Sorted Array: <pre>";
    print_r($array);
    echo "</pre>";
}
?>
