<?php
session_start();
session_unset();
session_destroy();
header("Location: Pro6.php");
exit();
?>
