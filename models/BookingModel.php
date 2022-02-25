<?php
class BookingModel extends Model{
    var $table = 'booking';
    var $relationTable = 'plans';
    var $relationField = 'plan';
    public function __construct(){
        Parent::__construct();
    }
    public function getBookingData(){
        return $this->select($this->table);
    }
    public function getBookingByUser($user){
        return $this->select($this->table, ['user_id'=> $user] , '*', $this->relationTable, $this->relationField, 'id, name, valid_to');
    }
    public function createBooking($data){
        return $this->insert($this->table, $data);
    }
    public function changeStauts($id, $status){
        return $this->update($this->table, ['id'=> $id], ['status'=> $status]);
    }
}
?>