<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="smart jobs" content="smart jobs home page">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap">
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body class=" body ">
    <header class="bg-gray-700">
        <nav class="fixed top-0 left-0 bg-gray-700 w-full shadow text-white">
            <div class="container m-auto flex justify-between items-center">
                <img src="asset/images/smartjoblogo.png" alt="logo" class="rounded-full h-10 lg:h-16 w-10 lg:w-16 p-1">

                <ul class="hidden md:flex items-center pr-10 text-base font-semibold cursor-pointer">
                    <li class="hover:bg-gray-500 py-4 px-6"><a href="index.php" class="hover:text-blue-600">Home</a></li>
                    <li class="hover:bg-gray-500 py-4 px-6"><a href="jobs.php" class="hover:text-blue-600">Jobs</a></li>
                    <li class="hover:bg-gray-500 py-4 px-6"><a href="Postjobs.php" class="hover:text-blue-600">Post Job</a>
                    </li>
                    <li class="hover:bg-gray-500 py-4 px-6"><a href="about.html" class="hover:text-blue-600">About Us</a>
                    </li>

                </ul>
                <!-- Log out link -->
                <a href="logout.php" class="hidden md:block bg-red-500 py-1 px-2 rounded-md hover:bg-red-600 focus:outline-none focus:ring focus:border-red-300 mr-5">
                    Log out
                </a>
                <button id="toggleSidebar" class="block md:hidden py-3 px-4 mx-2 rounded focus:outline-none hover:bg-gray-500" aria-label="Toggle Sidebar">
                    <span class="menu-icon">
                        <i class="fas fa-bars"></i>
                    </span>
                </button>
            </div>
        </nav>
        <div id="sidebar" class="sidebar hidden">
            <button id="closeSidebar" class="absolute top-0 right-0 m-4 focus:outline-none">
                <i class="fas fa-times text-white"></i>
            </button>
            <ul class="flex flex-col items-center w-full text-base cursor-pointer pt-10">
                <li class="hover:bg-gray-500 py-4 px-6 w-full"><a href="index.php" class="hover:text-blue-600">Home</a>
                </li>
                <li class="hover:bg-gray-500 py-4 px-6 w-full"><a href="jobs.php" class="hover:text-blue-600">Jobs</a></li>
                <li class="hover:bg-gray-500 py-4 px-6 w-full"><a href="Postjobs.php" class="hover:text-blue-600">Post
                        Job</a></li>
                <li class="hover:bg-gray-500 py-4 px-6 w-full"><a href="about.html" class="hover:text-blue-600">About Us</a>
                </li>


            </ul>
            <!-- Log out link for mobile -->
            <a href="logout.php" class="block md:hidden bg-red-500 py-1 rounded-md hover:bg-red-600 focus:outline-none focus:ring focus:border-red-300 mt-4">
                Log out
            </a>
        </div>
    </header>

    <main class="flex flex-col items-center justify-center p-12 text-gray-700">
        <section class="pt-12">
            <div class="w-full max-w-7xl bg-gray-800 rounded-lg shadow-md p-6 text-white">
                <div class="w-full max-w-7xl bg-gray-800 rounded-lg shadow-md p-6 text-white">
                    <form id="searchForm" onsubmit="searchJobs(); return false;">
                        <div class="text-center pb-10">
                            <label for="search" class="text-xl font-medium">Title:</label>
                            <input type="search" id="search" name="search" placeholder="Search for your dream job..." class="mt-1 p-2 border text-gray-700 border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-300 w-60" required />
                            <button type="submit" class="mt-2 bg-blue-500 py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                                Search
                            </button>
                        </div>
                    </form>

                    <div id="searchResults" class="w-full max-w-7xl bg-gray-800 rounded-lg shadow-md p-6 text-white"></div>


                    <div id="joblist">
                        <?php
                        // fetch_jobs.php
                        include_once 'Database.php';
                        include_once 'User.php';

                        $database = new Database();
                        $db = $database->getConnection();
                        $user = new User($db);

                        // Fetch jobs
                        $sql = "SELECT company_name, job_title, location, job_description, job_type , end_date FROM jobs";
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
                        ?>
                    </div>
                </div>
        </section>
    </main>

    <footer class="flex flex-col items-center justify-center bg-gray-700 text-white">
        <img src="asset/images/smartjoblogo.png" alt="logo" class="rounded-full h-10 lg:h-16 w-10 lg:w-16 p-1">

        <div class="contact-info text-center mb-4">
            <ul class="list-none">
                <li>Phone: <a href="tel:+1234567890" class="hover:text-blue-500">+251994445412</a></li>
                <li>Email: <a href="mailto:info@example.com" class="hover:text-blue-500">dureguye2@gmail.com</a></li>
                <li>Address: Addis Ababa, Ethiopia</li>
            </ul>
        </div>
        <div class="socials flex">
            <a href="https://t.me/Icon_dura" class="mr-4 w-10 h-10"><img src="asset/images/telegram.png" alt="telegram icon"></a>
            <a href="https://www.linkedin.com/in/duresa-guye-5aba5625a/" class="mr-4 w-10 h-10"><img src="asset/images/linkedin.png" alt="linkedin icon"></a>
            <a href="https://github.com/duresaguye"><img class="w-10 h-10" src="asset/images/github.png" alt="github icon"></a>
        </div>
        <div class="copyright text-center py-6">
            &copy; 2023 Smart Jobs. All rights reserved.
        </div>
    </footer>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggleSidebarButton = document.getElementById('toggleSidebar');
            const closeSidebarButton = document.getElementById('closeSidebar');
            const sidebar = document.getElementById('sidebar');

            toggleSidebarButton.addEventListener('click', function() {
                sidebar.classList.toggle('open');
            });

            closeSidebarButton.addEventListener('click', function() {
                sidebar.classList.remove('open');
            });

            // Function to close the sidebar when the screen size becomes larger
            function closeSidebarOnLargeScreen() {
                if (window.innerWidth > 768) {
                    sidebar.classList.remove('open');
                }
            }

            // Initial check and set event listener for screen size changes
            closeSidebarOnLargeScreen();
            window.addEventListener('resize', closeSidebarOnLargeScreen);
        });

        function searchJobs() {
            // Get the search term from the input field
            var searchTerm = document.getElementById('search').value;

            // Create an XMLHttpRequest object
            var xhr = new XMLHttpRequest();

            // Define the URL to send the AJAX request to
            var url = 'search.php?search=' + searchTerm;

            // Configure the AJAX request
            xhr.open('GET', url, true);

            // Set up the callback function for when the request is complete
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Update the search results div with the response from the server
                    document.getElementById('searchResults').innerHTML = xhr.responseText;
                }
            };

            // Send the AJAX request
            xhr.send();
        }
    </script>

</html>