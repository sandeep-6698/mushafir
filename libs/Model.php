<?php
class Model extends Database{
    public function __construct(){
        Parent::__construct();
    }
    public function select($tabel='', $conditions, $fields="*"){
        $query = "SELECT $fields FROM $tabel ";
        if($tabel){
            if($conditions){
                $query.= "WHERE ";
                foreach($conditions as $key => $value){
                    $query.= "`$key`='$value' AND";
                }
                $query = substr($query, 0, -4);
            }
            return $this->conn->query($query)->fetch_all(MYSQLI_ASSOC);
        }
        return ([]);
    }
    public function insert($tabel, $data){
        $query = "INSERT INTO $tabel (";
        $query.= implode(', ', array_keys($data)) . ") VALUES ('". implode("', '", array_values($data))."')";
        echo $query;
        if ($this->conn->query($query)):
            return true;
        else: 
            return false;
        endif;
    }
}
?>