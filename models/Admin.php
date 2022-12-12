<?php 
require_once 'DbTrait.php';
Class Admin{
    use DbTrait;
    private $id;
    private $username;
    private $email;
    private $password;
    private $loggedin;

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
    private function setUsername($username)
    {
        $reg = "/([a-zA-Z]+\s?$)/";
        if (!preg_match($reg, $username)) {
            throw new Exception("Invalid / Missing Username");
        } 
        $this->username = $username;
    }
    private function getUsername()
    {
        return $this->username;
    }
    private function setPassword($password){
        $reg = "/^[a-z][a-z0-9]{5,15}$/i";
        if(!preg_match($reg, $password)){
            throw new Exception("Invalid / Missing Password");
        }
        $this->password = sha1($password);
    }
    private function getPassword(){
        return $this->password;
    }

private function getLoggedin(){
    return $this->loggedin;
}

    public function Add_Admin(){
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

    public static function show_Admin(){
        $obj_db = self::obj_db();
        $query_Admin = "SELECT * FROM admins" ;
        $result = $obj_db->query($query_Admin);
        if($obj_db->errno){
            throw new Exception ("Query Insert Error .$obj_db->errno. $obj_db->error");
        }
        if($result->num_rows==0){
            throw new Exception ("Admin Not Found");
        }
        while ($data = $result->fetch_object()){
            $admins[] = $data;
        }
        
        return $admins;
    }
    public function login(){
        $obj_db = self::obj_db();
        $query_select=
            " select * from admins "
            . " WHERE username = '$this->username'";
        $result = $obj_db->query($query_select); 
        if($obj_db->errno){
            throw new Exception ("Db Select Error." . $obj_db->errno . $obj_db->error);
        }
        if($result->num_rows==0){
            throw new Exception("These Credentials Not Match In Our Records");
        }
        
        $user_data = $result->fetch_object();
        if($user_data->password != $this->password) {
            throw new Exception("Invalid User Name or Password");
        }
        if($user_data->status==0){
            throw new Exception("<i>Your Account is Currently Deactivate Contact Our Admin</i>");
        }
        $this->id = $user_data->id;
        $this->email = $user_data->email;
        $this->password = NULL;
        $this->username = $user_data->username;
        $this->loggedin = true;
        $str_obj = serialize($this);
        $_SESSION ['obj_admin'] = $str_obj;
    }
    public function logout(){
        if(isset($_SESSION['obj_admin'])){
            unset($_SESSION['obj_admin']);
        }
    }
    
}


?>