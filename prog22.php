<?php
include('connect.php');
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Rest of your login logic goes here
} else {
    echo "Login failed. Invalid username or password.";
}
?>

