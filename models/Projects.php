<?php

require_once 'DbTrait.php';
Class Projects{
    use DbTrait;
    private $id;
    private $name;
    private $client_Name;
    private $project_Type;
    private $location;
    private $date_of_Start;
    private $date_of_End;
    private $status;

    public function __set($name, $value)
    {
        $method = "Set". $name;
        if(!method_exists($this,$name)){
            throw new Exception("Property Method" .$name. "Doesn't Exist");
        }
        $this->$method($value);
    }
    public function __get($name)
    {
        $method = "Get" . $name;
        if (!method_exists($this, $method)) {
            throw new Exception("Get Property " . $name . " Doesn't Exist");
        }
        return $this->$method();
    }

}
















?>