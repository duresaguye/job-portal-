<?php
include_once 'Database.php'; // Include your database connection file
include_once 'User.php'; // Include the User class file

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Create a new instance of the User class
    $database = new Database();
    $db = $database->getConnection();

    $user = new User($db);

    // Set user properties based on form input and sanitize inputs
    $user->full_name = htmlspecialchars(strip_tags($_POST['full_name']));
    $user->email = htmlspecialchars(strip_tags($_POST['email']));
    $user->phone_number = htmlspecialchars(strip_tags($_POST['phone_number']));
    $user->linkedin_url = htmlspecialchars(strip_tags($_POST['linkedin_url']));
    $user->cover_letter = htmlspecialchars(strip_tags($_POST['cover_letter']));

    
    // Process the form submission
    if ($user->applyJob()) {

        echo "<script>alert('seussfull added .');</script>";
        header("Location: jobs.php");

        
    } else {
        // Error applying for the job, redirect or show error message
        echo "Error applying for the job.";
    }
}
