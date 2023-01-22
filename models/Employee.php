<?php
require_once 'DbTrait.php';
class Employee
{
    use DbTrait;
    private $id;
    private $name;
    private $gender;
    private $email;
    private $cnic;
    private $joiningDate;
    private $employeeCode;
    public function __set($name, $value)
    {
        $method = "Set" . $name;
        if (!method_exists($this, $method)) {
            throw new Exception("Set Property " . $name . " Doesn't Exist");
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

    private function setID($id)
    {
        if (!is_numeric($id) || $id <= 0) {
            throw new Exception("Invalid / Missing Admin ID");
        }
        $this->id = $id;
    }

    private function getID()
    {
        return $this->id;
    }
    private function setEmail($email)
    { {
            if (empty($email)) {

                throw new Exception("Invalid / Missing Email");
            }
        }
        $this->email = $email;
    }
    private function getEmail()
    {
        return $this->email;
    }
    private function setCNIC($cnic)
    { {
            if (empty($cnic)) {

                throw new Exception("Invalid / Missing CNIC");
            }
        }
        $this->cnic = $cnic;
    }
    private function getCNIC()
    {
        return $this->cnic;
    }
    private function setName($name)
    { {
            if (empty($name)) {

                throw new Exception("Invalid / Missing Name");
            }
        }
        $this->name = $name;
    }
    private function getName()
    {
        return $this->name;
    }
    private function setGender($gender)
    { {
            if (empty($gender)) {

                throw new Exception("Invalid / Missing Gender");
            }
        }
        $this->gender = $gender;
    }
    private function getGender()
    {
        return $this->gender;
    }


    public function Add_Employee()
    {
        $employeeCode = mt_rand(10000, 99999);
        // echo($employeeCode);
        // echo('<br>');
        $joiningDate = date("Y-m-d");
        // print_r($joiningDate);

        // die;
        $obj_db = self::obj_db();
        $query_admin = "INSERT INTO employees"
            . "(`id` , `name` ,`gender` ,`email`, `cnic`, `joiningDate`, `employeeCode`) "
            . "values "
            . "(NULL,'$this->name' , '$this->gender' , '$this->email' , '$this->cnic','$joiningDate','$employeeCode' )";

        $obj_db->query($query_admin);
        // print_r($query_admin);
        // die;
        if ($obj_db->errno) {
            throw new Exception("Query Insert Error" . $obj_db->errno . $obj_db->error);
        }
    }

    // public static function show_Admin(){
    //     $obj_db = self::obj_db();
    //     $query_Admin = "SELECT * FROM admins" ;
    //     $result = $obj_db->query($query_Admin);
    //     if($obj_db->errno){
    //         throw new Exception ("Query Insert Error .$obj_db->errno. $obj_db->error");
    //     }
    //     if($result->num_rows==0){
    //         throw new Exception ("Admin Not Found");
    //     }
    //     while ($data = $result->fetch_object()){
    //         $admins[] = $data;
    //     }

    //     return $admins;
    // }
}
