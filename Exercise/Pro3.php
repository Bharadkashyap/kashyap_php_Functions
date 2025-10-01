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
        <input type="submit" name="sub" value="Airthmatic">
    </form>

    <?php
    // Check if form submitted
    if (isset($_POST["sub"])) {
        // Get values safely
        $n1 = $_POST["num1"];
        $n2 = $_POST["num2"];

       echo "Addition:",$n1+$n2,"<br>";
       echo "Multiplication:",$n1*$n2,"<br>";
       echo "substraction:",$n1-$n2,"<br>";
       if($n1>0 || $n2>0)
       {
       echo "division:",$n1/$n2,"<br>";
    }
    else
    {
        echo "invalid input";
    }
    }
    
    ?>
</body>

</html>
