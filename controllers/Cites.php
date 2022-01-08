<?php
class Cites extends Controller{
    public function __construct(){
     Parent::__construct();
    }
    public function index(){
        $this->view->loadView("cities/index");
    }
  }
?>