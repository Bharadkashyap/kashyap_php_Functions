<?php

session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if username and password match
    if ($username == "kashyap" && $password == "1234") {
        $_SESSION['loggedin'] = true;
        echo "Welcome, you are logged in!";
    } else {
        echo "Wrong username or password.";
    }
}

?>
<form method="POST">
    Username: <input name="username"><br>
    Password: <input name="password" type="password"><br>
    <input type="submit" value="Login">
</form>