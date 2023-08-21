<?php
require_once 'DbTrait.php';
Class Projects{
    use DbTrait;
    private $id;
    private $name;
    private $price;

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
    
private function setID($id){
    if(!is_numeric($id)|| $id<=0){
        throw new Exception ("Invalid / Missing Packages ID");
    }
    $this->id=$id;
}

private function getID (){
    return $this->id;
}
private function setName($name){
    {
        if(empty($name)){

            throw new Exception("Enter Package Title");
        }
    }
    $this->name = $name;   
}
private function getName(){
    return $this->name;
}
private function setPrice($price)
{
    if (empty($price)) { 
        throw new Exception("Please Enter Package Price");
    } 
    $this->price = $price;
}
private function getPrice()
{
    return $this->price;
}

}
















?>