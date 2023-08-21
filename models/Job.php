<?php
require_once 'DbTrait.php';

class Job
{

    use DbTrait;
    private $date;
    private $id;
    private $title;
    private $name;
    private $phone;
    private $email;
    private $msg;

    public function __set($name, $value)
    {
        $method = "Set" . $name;
        if (!method_exists($this, $method)) {
            throw new Exception("Set Property $name Doesn't Exist");
        }
        $this->$method($value);
    }
    public function __get($name)
    {
        $method = "Get" . $name;
        if (!method_exists($this, $method)) {
            throw new Exception("Get Property $name Doesn't Exist");
        }
        return $this->$method();
    }

    private function setID($id)
    {
        if (!is_numeric($id) || $id <= 0) {
            throw new Exception("Invalid / Missing ID");
        }
        $this->id = $id;
    }

    private function getID()
    {
        return $this->id;
    }
    private function settitle($title)
    {
        if (empty($title)) {

            throw new Exception("Invalid / Missing title");
        }

        $this->title = $title;
    }
    private function gettitle()
    {
        return $this->title;
    }
    private function setDate($date)
    {
        if (empty($date)) {

            throw new Exception("Invalid / Missing date");
        }

        $this->date = $date;
    }
    private function getDate()
    {
        return $this->date;
    }
    private function setName($name)
    {
        if (empty($name)) {

            throw new Exception("Invalid / Missing Name");
        }

        $this->name = $name;
    }
    private function getName()
    {
        return $this->name;
    }

    private function setPhone($phone)
    {
        if (empty($phone)) {

            throw new Exception("Invalid / Missing phone");
        }

        $this->phone = $phone;
    }
    private function getPhone()
    {
        return $this->phone;
    }
    private function setEmail($email)
    {
        if (empty($email)) {

            throw new Exception("Invalid / Missing Email");
        }

        $this->email = $email;
    }
    private function getEmail()
    {
        return $this->email;
    }
    private function setMsg($msg)
    {
        if (empty($msg)) {

            throw new Exception("Invalid / Missing Message");
        }

        $this->msg = $msg;
    }
    private function getMsg()
    {
        return $this->msg;
    }

    public function add_job()
    {
        $obj_db = self::obj_db();

        $query_admin = "INSERT INTO jobs"
            . "(`id` , `title`, `date`) "
            . "values "
            . "(NULL,'$this->title', '$this->date' )";

        $obj_db->query($query_admin);
        // print_r($query_admin);
        // die;
        if ($obj_db->errno) {
            throw new Exception("Query Insert Error" . $obj_db->errno . $obj_db->error);
        }
    }
    public function job_listing()
    {
        $obj_db = self::obj_db();

        $query_admin = "SELECT * FROM JOBS";

        $result = $obj_db->query($query_admin);
        if (!$result) {
            throw new Exception("Query Error: " . $obj_db->errno . $obj_db->error);
        }

        // Fetch and return the data
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        return $data;
    }
    // function getUploadedResumes($resumeDirectory) {
    //     $resumes = [];

    //     // Get the list of files in the directory
    //     $fileList = scandir($resumeDirectory);

    //     // Iterate over the file list
    //     foreach ($fileList as $file) {
    //         // Exclude the current directory (.) and parent directory (..)
    //         if ($file !== '.' && $file !== '..') {
    //             // Add the resume file to the array
    //             $resumes[] = $file;
    //         }
    //     }

    //     return $resumes;
    // }
    public function getAllUserResumes()
    {
        // Example code to fetch user information and resume names from the database
        $obj_db = self::obj_db();

        // Construct and execute the query
        $query = "SELECT * FROM resumes";
        $result = $obj_db->query($query);

        // Check for errors during the database operation
        if ($obj_db->errno) {
            throw new Exception("Query Error: " . $obj_db->errno . " " . $obj_db->error);
        }

        // Fetch all rows as an associative array
        $userResumes = [];
        while ($row = $result->fetch_assoc()) {
            $userResumes[] = $row;
        }

        // Add the path to the resume directory
        $resumeDirectory = $_SERVER['DOCUMENT_ROOT'] . "/uploads"; // Replace with your resume directory path

        // Add resume file path to each user's data
        foreach ($userResumes as &$userResume) {
            $resumeName = $userResume['resume_name'];
            $resumePath = $resumeDirectory . '/' . $resumeName;
            $userResume['resume_path'] = $resumePath;
        }

        return $userResumes;
    }

    public function uploadResume()
    {
        $resumeDirectory = $_SERVER['DOCUMENT_ROOT'] . "/uploads"; // Specify the relative path to the resume directory here

        $targetDir = realpath($resumeDirectory); // Get the absolute path of the target directory

        if (!file_exists($targetDir)) {
            mkdir($targetDir, 0777, true); // Create the directory if it doesn't exist
        }

        $targetFile = $targetDir . '/' . basename($_FILES["fileToUpload"]["name"]); // Path of the uploaded file

        // Check if the file is valid
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $allowedExtensions = array("pdf", "doc", "docx"); // Specify the allowed file extensions

        if (in_array($fileType, $allowedExtensions)) {
            // Move the uploaded file to the specified directory
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
                // File upload successful
                $resumeName = basename($_FILES["fileToUpload"]["name"]);
                // print_r($resumeName);
                // die;
                $this->saveResumeData($resumeName); // Call a method to save the resume data to the database

                // Other logic or actions after successful resume upload

                return true; // Indicate successful upload
            } else {
                throw new Exception("Sorry, there was an error uploading your file.");
            }
        } else {
            throw new Exception("Invalid file format. Only PDF, DOC, and DOCX files are allowed.");
        }
    }

    private function saveResumeData($resumeName)
    {
        // Example code to save resume data to the database
        $obj_db = self::obj_db();
        $currentDateTime = date('Y-m-d');
        // Construct your query and execute it
        $query = "INSERT INTO resumes (`name`, `phone`, `resume_name`, `date`, `msg`, `email`)
              VALUES ('$this->name', '$this->phone', '$resumeName', '$currentDateTime', '$this->msg', '$this->email')";

        $obj_db->query($query);
        // echo ("<Pre>");
        // print_r($obj_db);
        // die;
        if ($obj_db->errno) {
            throw new Exception("Query Insert Error: " . $obj_db->errno . " " . $obj_db->error);
        }
    }
}
// //  $query_admin = "INSERT INTO jobs"
// . "(`id` , `title`, `date`) "
// . "values "
// . "(NULL,'$this->title', '$this->date' )";