<?php
session_start();
include_once 'Database.php';
include_once 'User.php';

$database = new Database();
$db = $database->getConnection();
$user = new User($db);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user->first_name = $_POST['fname'];
    $user->last_name = $_POST['lname'];
    $user->email = $_POST['email'];
    $user->password = $_POST['password'];

    if ($user->signup()) {
        $_SESSION['email'] = $user->email;
        header("Location: index.php");
    } else {
        echo "<script>alert('Error: Unable to register.');</script>";
        header("Location: signup.html");
    }
} else {
    header('Location: signup.html');
}
