document.addEventListener('DOMContentLoaded', function () {
    const toggleSidebarButton = document.getElementById('toggleSidebar');
    const closeSidebarButton = document.getElementById('closeSidebar');
    const sidebar = document.getElementById('sidebar');

    toggleSidebarButton.addEventListener('click', function () {
        sidebar.classList.toggle('open');
    });

    closeSidebarButton.addEventListener('click', function () {
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
// function addJobToDOM(job) {
   
//     attachEventListeners();
// }

// Function to attach event listeners to dynamically added elements
function attachEventListeners() {
    // Add any necessary event listeners for newly added elements here
}

// Initial attachment of event listeners
attachEventListeners();

// const joblist = [
//     { title: "Web Developer", company: "Techኢት", location: "Addis Ababa", description: " We are seeking a talented and motivated Web Developer to join our dynamic team. As a Web Developer,<br> you will be responsible for designing, developing, testing, and implementing high-quality web applications.<br> You will work closely with our cross-functional teams to understand business requirements and translate <br> them into innovative and efficient solutions", jobType: "remote"},
//     { title: "Data Analyst", company: "DataCorp", location: "Addis Ababa", description: " We are looking for a skilled and detail-oriented Data Analyst to join our team. As a Data Analyst, you will play a <br>crucial role in gathering, analyzing, and interpreting complex data sets. You will work closely with various teams to identify <br>trends, patterns, and insights that can inform strategic business decisions.Join our analytics team and make an impact." , jobType: "remote"},
//     { title: "UX Designer", company: "DesignHub", location: "Adama", description: "Shape the user experience with innovative design." },
//     {
//         title:"Software Engineer", company:"Tech Innovators Inc",location: "Addis Ababa", description:" Tech Innovators Inc. is seeking a talented Software Engineer to join our dynamic team.In this role,<br> you will be responsible for designing, developing, and maintaining cutting-edge  software solutions. Collaborate <br> with cross-functional teams, analyze user requirements, and participate in code and design reviews. <br>If you're passionate about technology and love solving complex problems, we want to hear from you! " , jobType: "remote"
//     },
//     {
//         title: "Journalist", company: "Techኢት:",location: "Addis Ababa", description:" We are seeking a passionate and skilled Journalist to join our dynamic news team. As a Journalist,<br> you will play a key role in researching, writing, and reporting on news stories for our audience.<br> You will have a keen eye for detail, excellent communication skills, and a commitment to delivering accurate and timely news coverage"
//     , jobType: "remote"}
// ];

// displayjoblist(joblist);

// function displayjoblist(list) {
//     const joblistContainer = document.getElementById('joblist');
//     joblistContainer.innerHTML = '';

//     list.forEach(job => {
//         const joblistElement = document.createElement('div');
//         joblistElement.className = 'joblist';
//         joblistElement.innerHTML = `
//             <div class="mb-4">
//                 <h3 class="mb-2"><strong>Title:</strong> ${job.title}</h3>
//                 <p class="mb-1"><strong>Company:</strong> ${job.company}</p>
//                 <p class="mb-1"><strong>Location:</strong> ${job.location}</p>
//                 <p class="mb-2"><strong>Description:</strong>${job.description}</p>
//                  <p class="mb-2"><strong>Jobtype:</strong>${job.jobType}</p>
//                 <a href="apply.html"
//                     class="inline-block bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300 mb-2">
//                     Apply Now
//                 </a>
//             </div>
//             <hr class="my-4">
//         `;
    
//         joblistContainer.appendChild(joblistElement);
//     });
// }

// Function to search jobs by title
function searchJobsByTitle(query) {
    const filteredJobs = joblist.filter(job => job.title.toLowerCase().includes(query.toLowerCase()));
    displayjoblist(filteredJobs);
}

// Event listener for the search input
const titleInput = document.getElementById('title');
titleInput.addEventListener('input', function () {
    const searchQuery = this.value.trim();
    searchJobsByTitle(searchQuery);
});

function showAlert() {
    alert('Successfully submitted!');
}


function toggleForm(activeForm) {
    const signupForm = document.getElementById('signup');
    const signInForm = document.getElementById('login');

    if (activeForm === 'signup') {
      signupForm.classList.remove('hidden');
      signInForm.classList.add('hidden');
    } else {
      signupForm.classList.add('hidden');
      signInForm.classList.remove('hidden');
    }
}

function validateApplication() {
    const fname = document.getElementById('firstName');
    const lname = document.getElementById('lastName');
    const email = document.getElementById('applyEmail');
    const file = document.getElementById('file');
    const coverletter = document.getElementById('coverletter');

    if (allLetter(fname.value, 2) && allLetter(lname.value, 2) && validateCoverLetter(coverletter) && validateEmail(email.value) && validatefile(file.value)) {
        alert('Successfully applied');
        return true;

    }
    else{
        return false;
    }
}
function validatepostjob(){
    const companyName = document.getElementById('compName');
    const jobTitle =  document.getElementById('jobtitle');
    const jobDescribtion = document.getElementById('jobdescrebtion');
    const jobType = document.getElementById('jobtype');
    const location = document.getElementById('loction');
    const email = document.getElementById('jobPostEmail');
}



function allLetter(name, num) {
    var letter = /^[a-zA-Z]+$/;

    if (name.value.match(letter)) {
        document.getElementById('fname-error').innerHTML = '';
        document.getElementById('lname-error').innerHTML = '';
        return true;
    } else {
        if (num === 1) {
            document.getElementById('fname-error').innerHTML = 'Name must have alphabet characters only';
        } else {
            document.getElementById('lname-error').innerHTML = 'Name must have alphabet characters only';
        }
        return false;
    }
}

function ValidateEmail(email, num) {
    var emailRegExp = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}(?:\.[a-zA-Z]{2})?$/;

    if (!emailRegExp.test(email.value)) {
        if (num === 1) {
            document.getElementById('email-error').innerHTML = 'Invalid Email Address! Please check and try again';
        } else {
            document.getElementById('email-error-l').innerHTML = 'Invalid Email Address! Please check and try again';
        }
        return false;
    } else {
        return true;
    }
}

function ValidPass(password, num) {
    if (password.value.length >= 8) {
        document.getElementById("password-error").innerHTML = "";
        document.getElementById("password-error-l").innerHTML = "";
        return true;
    } else {
        if (num === 1) {
            document.getElementById('password-error').innerHTML = "Password should be at least 8 characters long";
        } else {
            document.getElementById('password-error-l').innerHTML = "Password should be at least 8 characters long";
        }
        return false;
    }
}

function matchPasswords(pass, confirmPass) {
    if (pass.value !== confirmPass.value) {
        document.getElementById("confirm-password-error").innerHTML = "Passwords do not match";
        return false;
    } else {
        document.getElementById("confirm-password-error").innerHTML = "";
        return true;
    }
}

function toggleForm(formType) {
    if (formType === "login") {
        document.getElementById("signup").style.display = "none";
        document.getElementById("login").style.display = "block";
    } else {
        document.getElementById("login").style.display = "none";
        document.getElementById("signup").style.display = "block";
    }
}

function togglePasswordVisibility() {
    const passwordInput = document.getElementById("password");
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
    } else {
        passwordInput.type = "password";
    }
}
function togglePasswordVisibility() {
    var passwordInput = document.getElementById("password");
    var showPasswordButton = document.getElementById("show-password-button");
  
    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      showPasswordButton.textContent = "Hide Password";
    } else {
      passwordInput.type = "password";
      showPasswordButton.textContent = "Show Password";
    }
  }

  function validateForm() {
    

    //  Check if the email is in a valid format
    var emailInput = document.getElementById('feedbackEmail');
    var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}(?:\.[a-zA-Z]{2})?$/;

    if (!emailRegex.test(emailInput.value)) {
        document.getElementById("feedbackEmailError").innerHTML = "Invalid email address";
      
        return false; // Prevent form submission
    }

    // Additional validation logic can be added based on your requirements

    return true; // Allow form submission
}
  