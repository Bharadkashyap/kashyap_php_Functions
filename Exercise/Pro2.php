<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Max and Min</title>
</head>

<body>
    <form method="post">
       Enter First value: <input type="number" name="num1" placeholder="Enter number 1" required><br>
       Enter second value: <input type="number" name="num2" placeholder="Enter number 2" required>
        <input type="submit" name="sub" value="Compare">
    </form>

    <?php
    // Check if form submitted
    if (isset($_POST["sub"])) {
        // Get values safely
        $n1 = $_POST["num1"];
        $n2 = $_POST["num2"];

        if ($n1 > $n2) {
            echo "<br><font color='red'>Number 1 is maximum: $n1</font><br>";
            echo "Minimum is: $n2";
        } elseif ($n2 > $n1) {
            echo "<br><font color='red'>Number 2 is maximum: $n2</font><br>";
            echo "Minimum is: $n1";
        } else {
            echo "<br>Both numbers are same: $n1";
        }
    }
    ?>
</body>

</html>
