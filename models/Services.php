<?php 
require_once 'DbTrait.php';

class Services{
    use DbTrait;
    private $id;
    private $title;
    private $description;
    private $ServiceImage;


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
            throw new Exception ("Invalid / Missing Setting ID");
        }
        $this->id=$id;
    }

    private function getID (){
        return $this->id;
    }
    private function setTitle($title){
        {
            if(empty($title)){

                throw new Exception("Enter Service Title");
            }
        }
        $this->title = $title;   
    }
    private function getTitle(){
        return $this->title;
    }
    private function setDescription($description)
    {
        if (empty($description)) { 
            throw new Exception("Please Enter Service Description");
        } 
        $this->description = $description;
    }
    private function getDescription()
    {
        return $this->description;
    }

    private function setServiceImage($ServiceImage) {
        //$_FILES['profileImage'] - $profileImage;
//        echo("<pre>");
//        print_r($profileImage);
//        echo("</pre>");
//        die;
        if ($ServiceImage['error'] == 4) {
            throw new Exception("File Missing");
        }

        if ($ServiceImage['size'] > 500000) {
            throw new Exception("MAX FILE SIZE IS 500K");
        }
        $imgData = getimagesize($ServiceImage['tmp_name']);
//        var_dump($imgData);
//        echo("<pre>");
//        print_r($imgData);
//        echo("</pre>");
//        die;
        if (!$imgData) {
            throw new Exception("Not a valid Image");
        }
//        if(!$imgData[0] == 300 && $imgData[1] == 400) {
//            throw new Exception("Max Width Must be 500px and height is 300px");
//        }

        if ($ServiceImage['type'] != "image/jpeg" && $ServiceImage['type'] != "image/png") {
            throw new Exception("Only jpeg allowed");
        }

        if ($ServiceImage['type'] != $imgData['mime']) {
            throw new Exception("Corrupt Image");
        }
//        die;
//
        $fileName = $this->title . ".jpg";
    //    echo($_SERVER['DOCUMENT_ROOT']);
    //    die;
        $strPath = $_SERVER['DOCUMENT_ROOT'] . "/img/$fileName";
    //    echo($strPath);
    //    die;
        $result = move_uploaded_file($ServiceImage['tmp_name'], $strPath);
        // print_r($result);
        // die;
        if (!$result) {
            throw new Exception("Failed to move file");
        }
    }

    public function add_services()
    {
        $obj_db = self::obj_db();
        $query = " INSERT into services "
            . "(`id` , `title` , `description`) "
            . " values "
            . "(NULL , '$this->title' , '$this->description') ";

        $obj_db->query($query);
        // print_r($obj_db);
        // die;
        if ($obj_db->errno) {
            throw new Exception("Query Insert Error" . $obj_db->errno . $obj_db->error);
        }
    }





















}