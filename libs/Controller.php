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
    public function uploadFile($key, $path=''){
            $file = Request::files($key);
            print_r($file);
            if($file){
                $file_name = time()."_".$file['name'];
                $file_path = "/uploads$path/$file_name";
                $file = move_uploaded_file($file['tmp_name'], "public$file_path");
                return $file ? $file_path : '';
            }
            return "";
        }
}
?>