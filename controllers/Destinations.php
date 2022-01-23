<?php
class Destinations extends Controller{
    public function __construct(){
     Parent::__construct();
     $this->loadModel('Destination');
    }
    public function index(){
        $destinations = $this->model->findDestintions();
        $this->view->loadView("destinations/index", ['destinations'=> $destinations]);
    }
    public function create(){
      if(Request::get('name')){
         $photos =  $this->uploadFiles('photos');
         $thumbnail = $this->uploadFile('thumbnail');
            $destination = [
                'name' => Request::get('name'), 
                'short_des' => Request::get('short_des'), 
                'thumbnail'=> $thumbnail,
                'photos'=> $photos,
                'most_visited'=> Request::get('most_visited') ? 1 : 0,
                'type'=> Request::get('type'),
                'location'=> Request::get('location'),
                'description'=> Request::get('description'),
            ];
            $this->model->save($destination);
            Request::redirect('/destinations');
      }
      else
      $this->view->loadView("destinations/create");
    }
    public function update(){
      $this->view->loadView("destinations/update");
    }
    public function details($id){
      $destination = $this->model->findDestintionById($id);
      $this->loadModel('Plans');
      $plans = $this->model->getPlansByDestination($id);
      $destination['photos'] =  explode(',', $destination['photos']);
      $this->view->loadView("destinations/details", ['destination'=> $destination, 'plans' => $plans]);
    }

    public function delete($id){
      $deleted = $this->model->deleteDestination($id);
      if($deleted)
        Request::redirect('/destinations');
      else
        $alert = ['type'=>'danger', 'message'=>"Something went wrong!"];
        $this->view->loadView('/destinations/index', ['alert'=>$alert]); 
    }
  }
?>