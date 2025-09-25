<form method="post">
  Enter your email: <input type="text" name="email"><br>
  <input type="submit" value="Generate Token">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = trim($_POST['email']);
  
  $token = md5($email .  time());

  echo "Generated Token: $token<br>";
  echo "Use this in a reset link like: reset.php?token=$token";
}
?>
