<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $s1 = (int)$_POST['sub1'];
    $s2 = (int)$_POST['sub2'];
    $s3 = (int)$_POST['sub3'];

    $total = $s1 + $s2 + $s3;
    $max_total = 300;
    $pass_mark = 35;
    $status1 = ($s1 >= $pass_mark) ? "Pass" : "Fail";
    $status2 = ($s2 >= $pass_mark) ? "Pass" : "Fail";
    $status3 = ($s3 >= $pass_mark) ? "Pass" : "Fail";
    $overall = ($status1 == "Pass" && $status2 == "Pass" && $status3 == "Pass") ? "Pass" : "Fail";
}
?>

<form method="post">
    Name: <input name="name" required><br>
    Subject 1: <input type="number" name="sub1" min="0" max="100" required><br>
    Subject 2: <input type="number" name="sub2" min="0" max="100" required><br>
    Subject 3: <input type="number" name="sub3" min="0" max="100" required><br>
    <input type="submit" value="Show Result">
</form>

<?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
    <h3>Result for <?= htmlspecialchars($name) ?></h3>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>Subject</th>
            <th>Marks</th>
            <th>Status</th>
        </tr>
        <tr><td>Subject 1</td><td><?= $s1 ?></td><td><?= $status1 ?></td></tr>
        <tr><td>Subject 2</td><td><?= $s2 ?></td><td><?= $status2 ?></td></tr>
        <tr><td>Subject 3</td><td><?= $s3 ?></td><td><?= $status3 ?></td></tr>
        <tr><th>Total</th><th><?= $total ?> / <?= $max_total ?></th><th><?= $overall ?></th></tr>
    </table>
<?php endif; ?>
