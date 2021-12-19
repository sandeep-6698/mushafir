<?php
class AuthModel extends Model{
    var $table = 'auth';
    public function __construct(){
        Parent::__construct();
    }
    public function register($authData){
        return $this->insert($this->table, $authData);
    }
    public function findByEmail($email){
        return $this->select($this->table, ['email' => $email]);
    }
}
?>