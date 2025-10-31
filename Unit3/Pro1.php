<!-- create_cookie.php -->
<form method="post">
  <input type="submit" name="set" value="Set Cookie">
</form>

<?php
if (isset($_POST['set'])) {
  setcookie("user", "Kashyap", time() + (86400 * 30), "/");
  echo "Cookie 'user' is set!";
}
?>
