<?php
if (isset($_POST['theme'])) {
    setcookie("theme", $_POST['theme'], time() + 3600); // 1 hour
    echo "Theme saved!";
} elseif (isset($_COOKIE['theme'])) {
    echo "Your theme is: " . $_COOKIE['theme'];
}
?>
<form method="POST">
    Choose theme: <input name="theme">
    <input type="submit" value="Save">
</form>
