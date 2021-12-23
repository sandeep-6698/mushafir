<?php
class Booking extends Controller{
    public function __construct(){
     Parent::__construct();
    }
    public function index(){
      $this->view->loadAdminView('/booking/index');   
    }
    public function create(){
      $this->view->loadAdminView('/booking/create'); 
    }
    public function update($id=0){
      $this->view->loadAdminView('/booking/edit');    
    }
    public function delete($id=0){
      Session::delete('name');
        echo "delete";  
    }
}
?>