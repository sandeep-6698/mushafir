<?php
class Database extends MySqli{
    var $conn;
   public function __construct(){
       if(!$this->conn)
        $this->conn = new MySqli(HOST, USERNAME, PASSWORD, DB_NAME);
   }
}
?>