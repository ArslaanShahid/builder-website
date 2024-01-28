<?php 
require_once 'DbTrait.php';

class Contact{
    use DbTrait;

    public function add_query($data) {
        $obj_db= self::obj_db();
        // Assuming $data is an associative array with keys matching the column names
        $name = $data['name'];
        $email = $data['email'];
        $subject = $data['subject'];
        $message = $data['message'];
    
        // Construct the SQL query
        $query = "INSERT INTO `queries` (`name`, `email`, `subject`, `message`, `timestamp`) 
                VALUES ('$name', '$email', '$subject', '$message', NOW())";
    
        $obj_db->query($query);

        if($obj_db->errno){
            throw new Exception ("Query Insert Error" .$obj_db->errno . $obj_db->error);
        }
    return true;
    }
    
}