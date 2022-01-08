<?php
class Dashboard extends Controller{
    public function __construct(){
        Parent::__construct();
        $this->loadModel('Destination');
    }
    public function index(){
        $destinations = $this->model->findDestintions();
        $this->view->loadView('/dashboard/index',['destinations'=>$destinations]);   
    }
    public function create(){
        $this->view->loadView('/dashboard/create'); 
    }
    public function update($id=0){
        $this->view->loadView('/dashboard/edit');    
    }
    public function delete($id=0){
        echo "delete";  
    }
}
?>