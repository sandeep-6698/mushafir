<?php
class Booking extends Controller{
    public function __construct(){
     Parent::__construct();
     $this->loadModel('Booking');
    }
    public function index(){
      echo Session::get('name');
      $this->view->loadView('/booking/index');   
    }
    public function create(){
      Session::set('name', 'sandeep');
      $this->view->loadView('/booking/create'); 
    }
    public function update($id=0){
      $this->view->loadView('/booking/edit');    
    }
    public function delete($id=0){
      Session::delete('name');
        echo "delete";  
    }
}
?>