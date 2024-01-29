<?php
require_once 'DbTrait.php';

class DatabaseBackup {
    use DbTrait;

    public function get_database_list() {
        $obj_db = self::obj_db();
        $databases = array();
    
        // Simplified query to get all databases
        $query = "SHOW DATABASES";
    
        // Checking if the query was successful
        $result = mysql_list_dbs($obj_db, $query);
        print_r($database_name);       
}
}

?>