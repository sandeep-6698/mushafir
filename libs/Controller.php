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
            if($file){
                    $file_name = time();
                    $file_path = "/uploads$path/$file_name";
                    $file = move_uploaded_file($file['tmp_name'], "public$file_path");
                    return $file ? $file_path : '';
            }
            return "";
        }
        
    public function uploadFiles($key, $path=''){ 
        $files = Request::files($key); 
        $total = count($files['name']);
        $result = '';
        for ($index=0; $index < $total; $index++) { 
            $file_name = time();
            $file_path = "/uploads$path/$file_name";
            $file = move_uploaded_file($files['tmp_name'][$index], "public$file_path");
            if($file)
            $result.=$file_path.",";
        }
        return substr($result, 0, -1);
        }
    }
?>