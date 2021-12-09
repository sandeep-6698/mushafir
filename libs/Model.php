<?php
class Model extends Database{
    public function __construct(){
        Parent::__construct();
    }
    public function selectAll($tabel='', $fields="*"){
        $query = "SELECT $fields FROM $tabel;";
        if($tabel)
           return $this->conn->query($query)->fetch_all(MYSQLI_ASSOC);;
        return ([]);
    }
}
?>