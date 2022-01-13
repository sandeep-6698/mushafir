<?php
class DestinationModel extends Model{
    var $table = 'Destinations';
    public function __construct(){
        Parent::__construct();
    }
    public function findDestintions(){
        return $this->select($this->table);
    }
    public function save($data){
        return $this->insert($this->table, $data);
    }
    public function findDestintionById($id){
        return $this->select($this->table, ['id'=> $id])[0];
    }
}
?>