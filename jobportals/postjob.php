<?php
session_start();
include_once 'Database.php';
include_once 'User.php';

$database = new Database();
$db = $database->getConnection();
$user = new user($db);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $companyName = $_POST['company_name'];
    $jobTitle = $_POST['job_title'];
    $jobDescription = $_POST['job_description'];
    $jobType = $_POST['job_type'];
    $location = $_POST['location'];
    $endDate = $_POST['end_date'];
    $email = $_POST['email'];

    
    $user->setCompanyName($companyName);
    $user->setJobTitle($jobTitle);
    $user->setJobDescription($jobDescription);
    $user->setJobType($jobType);
    $user->setLocation($location);
    $user->setEndDate($endDate);
    $user->setEmail($email);

    if ($user->postJob()) {
        header("Location: jobs.php");
        exit();
    } else {
        echo "<script>alert('Error: Unable to post job.');</script>";
        header("Location: Postjobs.php");
        exit();
    }
} else {
    header('Location: Postjobs.php');
    exit();
}
