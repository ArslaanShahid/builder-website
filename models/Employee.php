<?php 
require_once 'DbTrait.php';
Class Employee{
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
        $method = "Set" .$name;
        if(!method_exists($this, $method)){
            throw new Exception("Set Property" .$name. "Doesn't Exist");
        }
        $this->$method($value);
    }
    public function __get($name)
    {
        $method = "Get" . $name;
        if(!method_exists($this, $method)){
            throw new Exception ("Get Property" .$name. "Doesn't Exist");
        }
        return $this->$method();
    }

    private function setID($id){
        if(!is_numeric($id)|| $id<=0){
            throw new Exception ("Invalid / Missing Admin ID");
        }
        $this->id=$id;
    }

    private function getID (){
        return $this->id;
    }
    private function setAddress($address){
        {
            if(empty($address)){

                throw new Exception("Invalid / Missing Address");
            }
        }
        $this->address = $address;   
    }
    private function getAddress(){
        return $this->address;
    }


    public function Add_Employee(){
        $employeeCode = mt_rand(10000,99999);
        echo($employeeCode);
        die;
        $obj_db = self::obj_db();
        $query_admin = "INSERT INTO admins"
        ."(`id` , `username` , `email` , `password`) " 
        ."values "
        ."(NULL,'{$this->username}' , '{$this->email}' , '{$this->password}')";
        
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


?>