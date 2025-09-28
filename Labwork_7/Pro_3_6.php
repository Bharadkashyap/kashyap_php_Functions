<?php
session_start();
$timeout = 300; // 5 minutes

if (isset($_SESSION['last_activity']) && time() - $_SESSION['last_activity'] > $timeout) {
    session_destroy();
    echo "Session expired.";
} else {
    $_SESSION['last_activity'] = time();
    echo "Session active.";
}
?>
