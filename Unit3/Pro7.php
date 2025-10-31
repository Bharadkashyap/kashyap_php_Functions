<?php
if(isset($_COOKIE['visited'])){
    echo "Welcome back! Thanks for visiting again.";
} else {
    setcookie("visited", "yes", time() + (86400 * 30), "/"); // 30 days
    echo "Welcome, new visitor!";
}
?>
