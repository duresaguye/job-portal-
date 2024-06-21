<?php
session_start();
include_once 'Database.php';
include_once 'User.php';

$database = new Database();
$db = $database->getConnection();
$user = new User($db);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['Password'];
    if (empty($email) || empty($password)) {
        echo "All fields are required.";
    } else {
        
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = $db->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                $_SESSION['email'] = $email;
                header("Location: index.php");
            } else {
                echo "<script>alert('Invalid login credentials.'); window.location.href = 'login.html';</script>";
            }
        } else {
            echo "<script>alert('Invalid login credentials.'); window.location.href = 'login.html';</script>";
        }
    }
} else {
    header('Location: login.html');
}
