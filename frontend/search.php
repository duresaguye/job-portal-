<?php
include_once 'Database.php';
include_once 'User.php';

$database = new Database();
$db = $database->getConnection();
$user = new User($db);

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['search'])) {
    $search = $_GET['search'];

    // Fetch jobs matching the search query in the job title
    $sql = "SELECT company_name, job_title, location, job_description, job_type, end_date FROM jobs WHERE job_title LIKE '%$search%'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="mb-4">';
            echo '<h3 class="mb-2"><strong>Title:</strong> ' . htmlspecialchars($row['job_title']) . '</h3>';
            echo '<p class="mb-1"><strong>Company:</strong> ' . htmlspecialchars($row['company_name']) . '</p>';
            echo '<p class="mb-1"><strong>Location:</strong> ' . htmlspecialchars($row['location']) . '</p>';
            echo '<p class="mb-2"><strong>Description:</strong> ' . htmlspecialchars($row['job_description']) . '</p>';
            echo '<p class="mb-2"><strong>Job Type:</strong> ' . htmlspecialchars($row['job_type']) . '</p>';
            echo '<p class="mb-2"><strong>Location:</strong> ' . htmlspecialchars($row['location']) . '</p>';
            echo '<p class="mb-2"><strong>End Date:</strong> ' . htmlspecialchars($row['end_date']) . '</p>';
            echo '<a href="apply.html" class="inline-block bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300 mb-2">Apply Now</a>';
            echo '</div>';
            echo '<hr class="my-4">';
        }
    } else {
        echo '<p>No jobs found.</p>';
    }

    // Close the database connection
    $db->close();
}
