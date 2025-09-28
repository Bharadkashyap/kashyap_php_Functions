<?php
if (isset($_GET['name'])) {
    echo "Hello, " . $_GET['name'];
}
?>
<form method="GET">
    Enter your name: <input name="name">
    <input type="submit" value="Register">
</form>
