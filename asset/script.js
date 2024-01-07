const joblist = [
    { title: "Web Developer", company: "Techኢት", location: "Addis Ababa", description: " We are seeking a talented and motivated Web Developer to join our dynamic team. As a Web Developer,<br> you will be responsible for designing, developing, testing, and implementing high-quality web applications.<br> You will work closely with our cross-functional teams to understand business requirements and translate <br> them into innovative and efficient solutions" },
    { title: "Data Analyst", company: "DataCorp", location: "Addis Ababa", description: " We are looking for a skilled and detail-oriented Data Analyst to join our team. As a Data Analyst, you will play a <br>crucial role in gathering, analyzing, and interpreting complex data sets. You will work closely with various teams to identify <br>trends, patterns, and insights that can inform strategic business decisions.Join our analytics team and make an impact." },
    { title: "UX Designer", company: "DesignHub", location: "Adama", description: "Shape the user experience with innovative design." },
    {
        title:"Software Engineer", company:"Tech Innovators Inc",location: "Addis Ababa", description:" Tech Innovators Inc. is seeking a talented Software Engineer to join our dynamic team.In this role,<br> you will be responsible for designing, developing, and maintaining cutting-edge  software solutions. Collaborate <br> with cross-functional teams, analyze user requirements, and participate in code and design reviews. <br>If you're passionate about technology and love solving complex problems, we want to hear from you!"
    },
    {
        title: "Journalist", company: "Techኢት:",location: "Addis Ababa", description:" We are seeking a passionate and skilled Journalist to join our dynamic news team. As a Journalist,<br> you will play a key role in researching, writing, and reporting on news stories for our audience.<br> You will have a keen eye for detail, excellent communication skills, and a commitment to delivering accurate and timely news coverage"
    }
    
];
displayjoblist(joblist);
function displayjoblist(list) {
    const joblistContainer = document.getElementById('joblist');
    joblistContainer.innerHTML = '';

    list.forEach(job => {
        const joblistElement = document.createElement('div');
        joblistElement.className = 'joblist';
        joblistElement.innerHTML = `
        <div class="mb-4">
            <h3 class="mb-2"><strong>Title:</strong> ${job.title}</h3>
            <p class="mb-1"><strong>Company:</strong> ${job.company}</p>
            <p class="mb-1"><strong>Location:</strong> ${job.location}</p>
            <p class="mb-2"><strong>Description:</strong>${job.description}</p>
            <a href="apply.html"
            class="inline-block bg-blue-500 text-gray-700 py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300 mb-2">
             Apply Now
         </a>
        </div>
        <hr class="my-4">
    `;
    
    
        joblistContainer.appendChild(joblistElement);
    });
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
  const navbar = document.querySelector('navbar');

window.addEventListener('scroll', () => {
    if (window.scrollY > 0) {
        navbar.classList.add('navbar-scroll');
    } else {
        navbar.classList.remove('navbar-scroll');
    }
});
document.getElementById('toggleSidebar').addEventListener('click', function () {
    document.getElementById('sidebar').classList.toggle('open');
});




