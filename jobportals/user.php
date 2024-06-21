<?php
class User
{
    private $conn;
    private $table_name = "users";
    private $jobs_table = "jobs";
    private $applications_table = "jobapplications"; 

    public $id;
    public $first_name;
    public $last_name;
    public $email;
    public $password;
    public $company_name;
    public $job_title;
    public $job_description;
    public $job_type;
    public $location;
    public $end_date;
    public $phone_number;
    public $linkedin_url;
    public $cover_letter;
    public $full_name;
    public $comment;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function signup()
    {
        $query = "INSERT INTO " . $this->table_name . " (first_name, last_name, email, password) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);

        $this->first_name = htmlspecialchars(strip_tags($this->first_name));
        $this->last_name = htmlspecialchars(strip_tags($this->last_name));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->password = password_hash($this->password, PASSWORD_BCRYPT);

        $stmt->bind_param("ssss", $this->first_name, $this->last_name, $this->email, $this->password);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

   

    public function postJob()
    {
        $this->company_name = htmlspecialchars(strip_tags($this->company_name));
        $this->job_title = htmlspecialchars(strip_tags($this->job_title));
        $this->job_description = htmlspecialchars(strip_tags($this->job_description));
        $this->job_type = htmlspecialchars(strip_tags($this->job_type));
        $this->location = htmlspecialchars(strip_tags($this->location));
        $this->end_date = htmlspecialchars(strip_tags($this->end_date));
        $this->email = htmlspecialchars(strip_tags($this->email));

        $query = "INSERT INTO " . $this->jobs_table . " (company_name, job_title, job_description, job_type, location, end_date, email) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);

        $stmt->bind_param("sssssss", $this->company_name, $this->job_title, $this->job_description, $this->job_type, $this->location, $this->end_date, $this->email);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function setCompanyName($companyName)
    {
        $this->company_name = $companyName;
    }

    public function setJobTitle($jobTitle)
    {
        $this->job_title = $jobTitle;
    }

    public function setJobDescription($jobDescription)
    {
        $this->job_description = $jobDescription;
    }

    public function setJobType($jobType)
    {
        $this->job_type = $jobType;
    }

    public function setLocation($location)
    {
        $this->location = $location;
    }

    public function setEndDate($endDate)
    {
        $this->end_date = $endDate;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function applyJob()
    {
        
        $query = "INSERT INTO " . $this->applications_table . " (full_name, email, phone_number, linkedin_url, cover_letter) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);

        // Bind parameters
        $stmt->bind_param("sssss", $this->full_name, $this->email, $this->phone_number, $this->linkedin_url, $this->cover_letter);

        
        if ($stmt->execute()) {
            return true; 
        }
        return false; 
    }



}
