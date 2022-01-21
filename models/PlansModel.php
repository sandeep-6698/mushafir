<?php
class PlansModel extends Model{
    var $table = 'Plans';
    var $relationTable = 'Destinations';
    var $relationField = 'destination';
    public function __construct(){
        Parent::__construct();
    }
    public function getPlans($select="*"){
        return $this->select($this->table, null, $select, $this->relationTable, $this->relationField, 'id, name');
    }
    public function save($data){
        return $this->insert($this->table, $data);
    }
    public function getPlansByDestination($destination){
        return $this->select($this->table, ['destination' => $destination]);
    }
}
?>