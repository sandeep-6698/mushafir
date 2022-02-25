<?php
class Booking extends Controller{
    public function __construct(){
     Parent::__construct();
     $this->loadModel('Booking');
    }
    public function index(){
      $bookings = $this->model->getBookingByUser(Session::get('user')['id']);
      $this->view->loadView('/booking/index', ['bookings' => $bookings]);   
    }
    public function create(){
      if(Request::get('plan')){
        $res = $this->model->createBooking(Request::getAll('POST'));
        if($res);
          Request::redirect('/booking/confirm');
      }
      else{
        $this->loadModel('Plans');
        $plans = $this->model->getPlans();
        $this->view->loadView('/booking/create', ["plans"=> $plans]); 
      }
    }
    public function update($id=0){
      $this->view->loadView('/booking/edit');    
    }
    public function delete($id=0){

    }
    public function confirm($id=0){
      $this->view->loadView('/booking/confirm');    
    }
    public function cancel($id=0){
      $this->model->cancelBooking($id);
      Request::redirect('/booking');   
    }
}
?>