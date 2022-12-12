<?php 
require_once 'DbTrait.php';

class Setting{

    use DbTrait;
    private $id;
    private $email;
    private $phone;
    private $opening_hours;
    private $footer_description;
    private $about_us;
    private $copy_right;


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
    private function setemail($email){
        {
            if(empty($email)){

                throw new Exception("Invalid / Missing Email");
            }
        }
        $this->email = $email;   
    }
    private function getemail(){
        return $this->email;
    }
   
    private function setFooter_description($footer_description)
    {
        $reg = "/\b(((?!=|\,|\.).)+(.)){10,140}\b/";

        if (!preg_match($reg, $footer_description)) {
            throw new Exception("Please Enter Your Footer Description.");
        }

        $this->footer_description = $footer_description;
    }
    private function getFooterDescription()
    {
        return $this->footer_description;
    }
    private function setCopy_right($copy_right)
    {
        $reg = "/\b(((?!=|\,|\.).)+(.)){10,140}\b/";

        if (!preg_match($reg, $copy_right)) {
            throw new Exception("Please Enter Your Footer Description.");
        }

        $this->copy_right = $copy_right;
    }
    private function getCopyRight()
    {
        return $this->copy_right;
    }
    private function aboutUs($about_us)
    {
        $reg = "/\b(((?!=|\,|\.).)+(.)){10,140}\b/";

        if (!preg_match($reg, $about_us)) {
            throw new Exception("Please Enter Your About Us Page Content.");
        }

        $this->aboutUs = $about_us;
    }
    private function getAboutUs()
    {
        return $this->about_us;
    }

    private function setPhone($phone){
        if(empty($phone)){
            throw new Exception("Enter No in Following Format e.g 03001231232");
        }
        $this->phone = $phone;
    }
    private function getPhone(){
        return $this->phone;
    }
    private function setopening_Hours($opening_hours){
        if(empty($opening_hours)){
            throw new Exception("Enter No in Following Format -> Mon-Tue:8:00 AM - 9:00 PM");
        }
        $this->opening_hours = $opening_hours;
    }
    private function getopening_Hours(){
        return $this->opening_hours;
    }

    public function update_header_info(){
        $obj_db = self::obj_db();
        $query_admin = "Update settings set phone = '$this->phone' , email = '$this->email', opening_hours='$this->opening_hours'"
        ."WHERE id=1 ";
        
        $obj_db->query($query_admin);
        // echo('<pre>');
        // print_r($obj_db);
        // echo('</pre>');
        // die;
        if ($obj_db->errno) {
            throw new Exception("Query Insert Error" . $obj_db->errno . $obj_db->error);
        }
    }
        public static function show_header_info(){
            $obj_db = self::obj_db();
            $query_admin = "SELECT * FROM settings";
           $result= $obj_db->query($query_admin);
            // print_r($obj_db);
            // die;
            if ($obj_db->errno) {
                throw new Exception("Select Error" . $obj_db->errno . $obj_db->error);
            }
        
        if($result->num_rows==0){
            throw new Exception ("Info Not Found");
        }
        while($data = $result->fetch_object()){ 
            $info[] = $data;
        }
        return $info;
    
     }

    public function update_footer_info(){
        $obj_db = self::obj_db();
        $query_admin = "Update settings set footer_description = '$this->footer_description' , copy_right = '$this->copy_right'"
        ."WHERE id=1 ";
        
        $obj_db->query($query_admin);
        // print_r($obj_db);
        // die;
        if ($obj_db->errno) {
            throw new Exception("Query Insert Error" . $obj_db->errno . $obj_db->error);
        }
    }
    public static function show_footer_info(){
        $obj_db = self::obj_db();
        $query_admin = "SELECT * FROM settings";
       $result= $obj_db->query($query_admin);
        // print_r($obj_db);
        // die;
        if ($obj_db->errno) {
            throw new Exception("Query Insert Error" . $obj_db->errno . $obj_db->error);
        }
    
    if($result->num_rows==0){
        throw new Exception ("Info Not Found");
    }
    while($data = $result->fetch_object()){ 
        $info[] = $data;
    }
    return $info;

 }
 public function update_about_us(){
    $obj_db = self::obj_db();
    $query_admin = "Update settings set about_us = '$this->about_us' "
    ."WHERE id=1 ";
    
    $obj_db->query($query_admin);
    // print_r($obj_db);
    // die;
    if ($obj_db->errno) {
        throw new Exception("Query Insert Error" . $obj_db->errno . $obj_db->error);
    }
}
public static function show_about_us(){
    $obj_db = self::obj_db();
    $query_admin = "SELECT * FROM settings";
   $result= $obj_db->query($query_admin);
    // print_r($obj_db);
    // die;
    if ($obj_db->errno) {
        throw new Exception("Query Insert Error" . $obj_db->errno . $obj_db->error);
    }

if($result->num_rows==0){
    throw new Exception ("Info Not Found");
}
while($data = $result->fetch_object()){ 
    $info[] = $data;
}
return $info;

}


}