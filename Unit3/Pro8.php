<?php
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!empty($_POST['remember'])){
        setcookie("username", $username, time()+3600);
        setcookie("password", $password, time()+3600);
    } else {
        setcookie("username", "");
        setcookie("password", "");
    }
}
?>
<!DOCTYPE html>
<html>
<body>
<h2>Login (Remember Me)</h2>
<form method="post" action="">
    Username: <input type="text" name="username" value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username']; ?>"><br><br>
    Password: <input type="password" name="password" value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password']; ?>"><br><br>

    <input type="checkbox" name="remember" <?php if(isset($_COOKIE['username'])) echo "checked"; ?>> Remember Me<br><br>
    
    <input type="submit" name="login" value="Login">
</form>
</body>
</html>
