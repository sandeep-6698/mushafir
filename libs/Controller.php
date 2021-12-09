<?php
class Controller{
    public function __construct(){
        $this->view = new View();
    }
    public function loadModel($filename=''){
        $model = $filename."Model";
        $path = "models/$model.php";
        if(file_exists($path)){
            include_once($path);
            $this->model = new $model();
        }
    }
}
?>