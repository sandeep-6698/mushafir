<?php
class Destinations extends Controller{
    public function __construct(){
     Parent::__construct();
    }
    public function index(){
        $this->view->loadAdminView("destinations/index");
    }
  }
?>