<?php
class UserModel extends Model{
    var $table = 'users';
    public function __construct(){
        Parent::__construct();
    }
    public function register($data){
        return $this->insert($this->table, $data);
    }
    public function me($auth_id){
        return $this->select($this->table, ['auth_id' => $auth_id]);
    }
}
?>