<?php
class Plans extends Controller{
    public function __construct(){
     Parent::__construct();
    }
    public function index(){
        $this->view->loadAdminView("plans/index");
    }
  }
?>