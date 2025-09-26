<form method="post">
    Number 1: <input type="number" name="num1"><br>
    Number 2: <input type="number" name="num2"><br>
    Operation: 
    <select name="operation">
        <option value="add">Add</option>
        <option value="sub">Subtract</option>
        <option value="mul">Multiply</option>
        <option value="div">Divide</option>
    </select><br>
    <input type="submit" value="Calculate">
</form>

<?php
function calculator($a, $b, $op) {
    switch ($op) {
        case "add": return $a + $b;
        case "sub": return $a - $b;
        case "mul": return $a * $b;
        case "div": return $b != 0 ? $a / $b : "Cannot divide by zero";
        default: return "Invalid operation";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n1 = $_POST['num1'];
    $n2 = $_POST['num2'];
    $op = $_POST['operation'];
    echo "Result: " . calculator($n1, $n2, $op);
}
?>
