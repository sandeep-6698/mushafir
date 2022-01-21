<?php
class Plans extends Controller{
    public function __construct(){
     Parent::__construct();
     $this->loadModel('Plans');
    }
    public function index(){
        $plans = $this->model->getPlans();
        $this->view->loadView("plans/index", ["plans"=>$plans]);
    }
    public function create(){
      if(Request::get('name')){
        $this->model->save(Request::getAll('POST'));
        Request::redirect('/admin/plans');
      }
      else{
        $this->loadModel('Destination');
        $destinations = $this->model->findDestintions('id, name');
        $this->view->loadView("plans/create", ['destinations' => $destinations]);
      }
  }
  }
?>