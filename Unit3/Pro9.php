<?php


$conn = mysqli_connect("localhost", "root", "", "mydatabase");


if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Step 4: Insert data into table
    $sql = "INSERT INTO users (name, email, username, password)
            VALUES ('$name', '$email', '$user', '$pass')";

    if(mysqli_query($conn, $sql)){
        echo "<p style='color:green;'>Registration successful!</p>";
    } else {
        echo "<p style='color:red;'>Error: " . mysqli_error($conn) . "</p>";
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Registration Form</title>
</head>
<body>
<h2>Registration Form</h2>
<form method="post" action="">
    Name: <input type="text" name="name" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <input type="submit" name="submit" value="Register">
</form>
</body>
</html>
