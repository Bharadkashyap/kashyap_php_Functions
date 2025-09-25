<form method="post">
  Name: <input type="text" name="name"><br>
  Email: <input type="text" name="email"><br>
  Message: <textarea name="message"></textarea><br>
  <input type="submit" value="Submit">
</form>

<?php
//after input
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = trim($_POST['name']);
  $email = strtolower(trim($_POST['email']));
  $message = htmlspecialchars(trim($_POST['message']));

  echo "Sanitized Output:<br>";
  echo "Name: $name<br>";
  echo "Email: $email<br>";
  echo "Message: $message<br>";
}
?>
