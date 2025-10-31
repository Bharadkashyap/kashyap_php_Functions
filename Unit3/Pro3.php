<?php
if(!isset($_COOKIE["user"])) {
    header("Location: create_cookie.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<body>
<h2>Cookie Found</h2>
<p>Welcome <?= $_COOKIE["user"]; ?>! You were redirected here only because your cookie exists.</p>
</body>
</html>
