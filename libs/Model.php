<?php
class Model extends Database{
    public function __construct(){
        Parent::__construct();
    }
    public function select($tabel='', $conditions=null, $fields="*", $relationTable=null, $relationField=null, $relationFields="*"){
        $data = $this->fetchData($tabel, $conditions, $fields);
        if($relationTable && $relationField){
            foreach($data as $key => $value){
                $conditions = ['id'=>$value[$relationField]];
                $data[$key][$relationField] = $this->fetchData($relationTable, $conditions, $relationFields)[0];
            }
        }
        return $data;
    }
    public function insert($tabel, $data){
        $query = "INSERT INTO $tabel (`";
        $query.= implode('`, `', array_keys($data)) . "`) VALUES ('". implode("', '", array_values($data))."')";
        echo $query;
        if ($this->conn->query($query)):
            return true;
        else: 
            return false;
        endif;
    }

    private function fetchData($tabel='', $conditions=null, $fields="*"){
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
        return [];
    }

    public function delete($tabel, $id){
        if($tabel and $id){
            $query = "DELETE FROM $tabel WHERE id=$id";
            return $this->conn->query($query);
        }
        return false;
    }
}
?>