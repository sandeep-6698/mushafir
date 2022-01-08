<?php
class Admin extends Controller{
    public function __construct(){
     Parent::__construct();
    }
    public function index(){
        $this->view->loadView("admin/index");
    }
  }
?>