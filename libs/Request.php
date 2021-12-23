<?php
class Request{
    public static function get($key){
        if(isset($_GET[$key]))
            return $_GET[$key];
        else if(isset($_POST[$key]))
            return $_POST[$key];
        else 
            return null;
    }
    public static function getAll($method='GET'){
        if($method == 'GET')
            return $_GET;
        else 
            return $_POST;
    }
    public static function files($key){
        if(isset($_FILES[$key]))
            return  $_FILES[$key];
        else 
            return null;
    }
    public static function redirect($url = ''){
        header("Location: ".BASE_URL.$url);
    }
}
?>