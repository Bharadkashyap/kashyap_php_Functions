<form method="post">
  Enter student data (e.g. Hardik,85,90,78): <input type="text" name="csv"><br>
  <input type="submit" value="Evaluate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $input = trim($_POST['csv']);
  $data = explode(",", $input);
  $name = $data[0];
  $scores = array_slice($data, 1);
  $average = array_sum($scores) / count($scores);
  $summary = "$name - Avg: " . number_format($average, 2);
  echo "Result: $summary";
}
?>
