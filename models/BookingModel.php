<?php
class BookingModel extends Model{
    var $table = 'booking';
    public function __construct(){
        Parent::__construct();
    }
    public function getBookingData(){
        return $this->select($this->table);
    }
}
?>