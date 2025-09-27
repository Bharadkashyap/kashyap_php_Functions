<?php
$users = [
    "alice" => "password123",
    "bob" => "securepass",
    "charlie" => "charlie2025"
];

function authenticate($username, $password, $users) {
    if (!isset($users[$username])) {
        return false; 
    }
    if ($users[$username] === $password) {
        return true;
    }
    return false; 
}

$input_username = "bob";
$input_password = "securepass";

if (authenticate($input_username, $input_password, $users)) {
    echo "Welcome, " . htmlspecialchars($input_username) . "! You are logged in.";
} else {
    echo "Invalid username or password.";
}
?>
