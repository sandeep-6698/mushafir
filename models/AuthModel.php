<?php
class AuthModel extends Model{
    var $table = 'user';
    public function __construct(){
        Parent::__construct();
    }
}
?>