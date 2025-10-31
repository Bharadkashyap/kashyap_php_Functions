<?php
// Set the cookie expiry time in the past to delete it
setcookie("user", "", time() - 3600, "/");
?>
<!DOCTYPE html>
<html>
<body>
<h2>Cookie Deleted</h2>
<p>The "user" cookie has been removed.</p>
</body>
</html>
