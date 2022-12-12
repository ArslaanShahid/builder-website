<?php 
require_once 'DbTrait.php';

class Queries{
    use DbTrait;
    private $id;
    private $name;
    private $email;
    private $msg;


    public function __set($name, $value)
    {
        $method = "Set" .$name;
        if(!method_exists($this, $method)){
            throw new Exception("Set Property $name Doesn't Exist");
        }
        $this->$method($value);
    }
    public function __get($name)
    {
        $method = "Get" . $name;
        if(!method_exists($this, $method)){
            throw new Exception ("Get Property $name Doesn't Exist");
        }
        return $this->$method();
    }

private function setID($id){
        if(!is_numeric($id)|| $id<=0){
            throw new Exception ("Invalid / Missing Queries ID");
        }
        $this->id=$id;
    }

    private function getID (){
        return $this->id;
    }
    private function setEmail($email){
        {
            if(empty($email)){

                throw new Exception("Invalid / Missing Email");
            }
        }
        $this->email = $email;   
    }
    private function getEmail(){
        return $this->email;
    }
    private function setName($name)
    {
        $reg = "/([a-zA-Z]+\s?$)/";
        if (!preg_match($reg, $name)) {
            throw new Exception("Name Should be in Capital or Small Letters");
        } 
        $this->name = $name;
    }
    private function getName()
    {
        return $this->name;
    }
    private function setMsg($msg)
    {
        $reg = "/\b(((?!=|\,|\.).)+(.)){10,140}\b/";

        if (!preg_match($reg, $msg)) {
            throw new Exception("Please Enter Your Message.");
        }

        $this->msg = $msg;
    }
    private function getMsg()
    {
        return $this->msg;
    }


    public function send_query()
    {
        $obj_db = self::obj_db();
        $query = " INSERT into queries "
            . "(`id` , `name` , `email` ,`msg`) "
            . " values "
            . "(NULL , '$this->name' , '$this->email' , '$this->msg') ";

            $obj_db->query($query);

        if ($obj_db->errno) {
            throw new Exception("Query Insert Error" . $obj_db->errno . $obj_db->error);
        }
    }




















}