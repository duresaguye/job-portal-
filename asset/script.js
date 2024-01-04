const joblist = [
    { title: "Web Developer", company: "Techኢት", location: "Addis Ababa", description: "Job description:Company Profile Shemu Group is a conglomerate company composed of Shemu PLC, Asveza Ethiopia Retailing Share Company" },
    { title: "Data Analyst", company: "DataCorp", location: "Addis Ababa", description: "Join our analytics team and make an impact." },
    { title: "UX Designer", company: "DesignHub", location: "Adama", description: "Shape the user experience with innovative design." },
    {
        title:"Software Engineer", company:"Tech Innovators Inc",location: "Addis Ababa", description:"Tech Innovators Inc. is seeking a talented Software Engineer to join our dynamic team.<br> In this role, you will be responsible for designing, developing, and maintaining cutting-edge <br> software solutions. Collaborate with cross-functional teams, analyze user requirements, and participate <br> in code and design reviews. If you're passionate about technology and love solving complex problems, we want to hear from you!"
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
            class="inline-block bg-blue-500 text-gray-700 py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
             Apply Now
         </a>
        </div>
        <hr class="my-4">
    `;
    
    
        joblistContainer.appendChild(joblistElement);
    });
}


