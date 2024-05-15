<?php

$validUsername = "mohit";
$validPassword = "12345";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === $validUsername && $password === $validPassword) {
        echo "Login successful!";
    } else {
        echo "Invalid username or password.";
    }
} else {
    header("Location: index.html");
    exit;
}

?>
