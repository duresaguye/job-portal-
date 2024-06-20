<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="smart jobs" content="smart jobs home page">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post job</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap">
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body class="body">
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
                <a href="logout.php" class="hidden md:block bg-red-500 py-1 px-2 rounded-md hover:bg-red-600 focus:outline-none focus:ring focus:border-red-300">
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

    <main class="container mx-auto flex flex-col items-center justify-center p-12 t">
        <section class="pt-10">
            <div class="container mx-auto p-8 bg-gray-600 shadow-lg rounded-lg" id="form">
                <h1 class="text-3xl text-center">Post job</h1>
                <form action="postjob.php" id="postJobForm" method="POST" class="space-y-3 mt-8 text-xl  p-4">
                    <label for="company_name" class="block font-medium">Company name:</label>
                    <input type="text" id="company_name" name="company_name" placeholder="Techኢት" class="border border-gray-800 rounded-md p-2 focus:outline-none focus:ring focus:border-blue-800 w-full" required >
                    <label for="job_title" class="block font-medium">Job Title</label>
                    <input type="text" id="job_title" name="job_title" placeholder="software engineer" class="border rounded-md p-2 focus:outline-none focus:ring focus:border-blue-300 w-full" required >
                    <label for="job_description" class="block font-medium">Job Description</label>
                    <textarea name="job_description" id="job_description" placeholder="add your job Description here..." cols="3" rows="2" class="border rounded-md p-2 focus:outline-none focus:ring focus:border-blue-300 w-full"></textarea>
                    <label for="job_type" class="block font-medium">Job type</label>
                    <input type="text" id="job_type" name="job_type" placeholder="Remote" class="border rounded-md p-2 focus:outline-none focus:ring focus:border-blue-300 w-full" autocomplete="given-name">
                    <label for="location" class="block font-medium">Location</label>
                    <input type="text" id="location" name="location" placeholder="Addis Ababa" class="border rounded-md p-2 focus:outline-none focus:ring focus:border-blue-300 w-full">
                    <label for="end_date" class="block font-medium">End Date</label>
                    <input type="date" id="end_date" name="end_date" class="border rounded-md p-2 focus:outline-none focus:ring focus:border-blue-300 w-full">
                    <label for="email" class="block font-medium">Email</label>
                    <input type="email" id="email" name="email" placeholder="example@gmail.com" class="border rounded-md p-2 focus:outline-none focus:ring focus:border-blue-300 w-full" required >
                        <button class="bg-blue-500 py-2 px-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                            <a href="#">Submit</a>
                        </button>
                    


                </form>
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

    <script src="asset/script.js" defer></script>
</body>

</html>