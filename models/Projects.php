<?php

require_once 'DbTrait.php';

class Projects
{
    use DbTrait;

    private $name;
    private $client_name;
    private $project_type;
    private $location;
    private $date_of_start;
    private $date_of_end;
    private $status;

    public function __set($name, $value)
    {
        $method = "set" . ucfirst($name);
        if (!method_exists($this, $method)) {
            throw new Exception("Property Method '" . $method . "' Doesn't Exist");
        }
        $this->$method($value);
    }

    public function __get($name)
    {
        $method = "get" . ucfirst($name);
        if (!method_exists($this, $method)) {
            throw new Exception("Get Property '" . $name . "' Doesn't Exist");
        }
        return $this->$method();
    }
    // Setters
    private function setName($name)
    {
        $this->name = $name;
    }

    private function setClient_name($client_name)
    {
        $this->client_name = $client_name;
    }

    private function setProject_type($project_type)
    {
        $this->project_type = $project_type;
    }

    private function setLocation($location)
    {
        $this->location = $location;
    }

    private function setDate_of_start($date_of_start)
    {
        $this->date_of_start = $date_of_start;
    }

    private function setDate_of_end($date_of_end)
    {
        $this->date_of_end = $date_of_end;
    }

    private function setStatus($status)
    {
        $this->status = $status;
    }

    // Getters
    private function getName()
    {
        return $this->name;
    }

    private function getClient_name()
    {
        return $this->client_name;
    }

    private function getProject_type()
    {
        return $this->project_type;
    }

    private function getLocation()
    {
        return $this->location;
    }

    private function getDate_of_start()
    {
        return $this->date_of_start;
    }

    private function getDate_of_end()
    {
        return $this->date_of_end;
    }

    private function getStatus()
    {
        return $this->status;
    }
    public function add_project($data){
        $obj_db = self::obj_db();
    
        // Check if date_of_start and date_of_end are not null
        if (!empty($data['date_of_start'])) {
            $formattedStartDate = date('Y-m-d', strtotime($data['date_of_start']));
        } else {
            $formattedStartDate = null;
        }
    
        if (!empty($data['date_of_end'])) {
            $formattedEndDate = date('Y-m-d', strtotime($data['date_of_end']));
        } else {
            $formattedEndDate = null;
        }
    
        $query = "INSERT INTO projects (name, client_name, project_type, location, date_of_start, date_of_end, status)
    VALUES (
      '{$data['name']}',
      '{$data['client_name']}',
      '{$data['project_type']}',
      '{$data['location']}',
      '$formattedStartDate',
      '$formattedEndDate',
      '{$data['status']}'
    )";

    
        $obj_db->query($query);
    
        if ($obj_db->errno) {
            throw new Exception("Query Insert Error: " . $obj_db->errno . ' - ' . $obj_db->error);
        }
    
        // Return a success message
        return "Project added successfully!";
    }
    



}

?>
