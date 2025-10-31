<?php
session_start();

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Simple authentication (replace with DB validation)
    if($username == "Kashyap" && $password == "12345"){
        $_SESSION['username'] = $username;
        header("Location: Pro6_2.php");
        exit();
    } else {
        $error = "Invalid login details!";
    }
}
?>
<!DOCTYPE html>
<html>
<body>
<h2>Login Form</h2>
<form method="post" action="">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <input type="submit" name="login" value="Login">
</form>
<p style="color:red;"><?php if(isset($error)) echo $error; ?></p>
</body>
</html>
