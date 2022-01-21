<?php
class DestinationModel extends Model{
    var $table = 'Destinations';
    public function __construct(){
        Parent::__construct();
    }
    public function findDestintions($select="*"){
        return $this->select($this->table, null, $select);
    }
    public function save($data){
        return $this->insert($this->table, $data);
    }
    public function findDestintionById($id){
        return $this->select($this->table, ['id'=> $id])[0];
    }
}
?>