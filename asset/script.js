const jobList = [
    { title: "Web Developer", company: "TechCo", location: "City A", description: "Exciting web development opportunity." },
    { title: "Data Analyst", company: "DataCorp", location: "City B", description: "Join our analytics team and make an impact." },
    { title: "UX Designer", company: "DesignHub", location: "City C", description: "Shape the user experience with innovative design." },
    
];
displayjoblist(jobList);
function displayJobListings(list) {
    const jobListContainer = document.getElementById('jobList');
    jobListContainer.innerHTML = '';

    list.forEach(job => {
        const jobListElement = document.createElement('div');
        jobListElement.className = 'jobList';
        jobListElement.innerHTML = `
            <h3>${job.title}</h3>
            <p><strong>Company:</strong> ${job.company}</p>
            <p><strong>Location:</strong> ${job.location}</p>
            <p>${job.description}</p>
        `;
        jobListContainer.appendChild(jobListElement);
    });
}


