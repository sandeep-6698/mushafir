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
            Request::redirect('/admin/destinations');
      }
      else
      $this->view->loadView("destinations/create");
    }
    public function update(){
      $this->view->loadView("destinations/update");
    }
    public function details($id){
      $destination = $this->model->findDestintionById($id);
      $destination['photos'] =  explode(',', $destination['photos']);
      $this->view->loadView("destinations/details", ['destination'=> $destination]);
  }
  }
?>