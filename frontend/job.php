<?php
// fetch_jobs.php
header('Content-Type: application/json');

include_once 'Database.php';
include_once 'User.php';

$database = new Database();
$db = $database->getConnection();
$user = new User($db);

// Fetch jobs
$sql = "SELECT company_name, job_title, location, job_description, job_type FROM jobs";
$result = $db->query($sql);

$jobs = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $jobs[] = $row;
    }
}

$db->close();

// Return jobs as JSON
echo json_encode($jobs);
