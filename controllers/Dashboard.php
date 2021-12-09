<?php
class Dashboard extends Controller{
    public function __construct(){
        Parent::__construct();
    }
    public function index(){
        $this->view->heading = "Dashboard heading";
        $this->view->loadView('dashboard/index');   
    }
    public function create(){
        $this->view->loadView('dashboard/create'); 
    }
    public function update($id=0){
        $this->view->loadView('dashboard/edit');    
    }
    public function delete($id=0){
        echo "delete";  
    }
}
?>