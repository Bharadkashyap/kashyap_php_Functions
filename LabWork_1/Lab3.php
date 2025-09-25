<form method="post">
  Enter full name: <input type="text" name="fullname"><br>
  <input type="submit" value="Format Name">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fullName = strtolower(trim($_POST['fullname']));
  $words = explode(" ", $fullName);
  foreach ($words as &$word) {
    $word = ucfirst($word);
  }
  $formattedName = implode(" ", $words);
  echo "Formatted Name: $formattedName";
}
?>
