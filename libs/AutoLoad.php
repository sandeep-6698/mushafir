<?php
class AutoLoad{
    function __construct(){
        $controller = 'Dashboard';
        $method = 'index';
        $id = 0;
        if(isset($_GET['url'])){
            $path = $_GET['url'];
            if(substr($_GET['url'], -1) == '/')
                $path = substr($path, 0, -1);
            $url_array = explode('/', $path);
            if($url_array[0] == 'admin')
            {
               if(!Session::get('user') or !Session::get('user')['role']){
                   Request::redirect("/auth/login?redirect=/".Request::get('url'));
               }
                if($url_array[1] == 'dashboard'):
                    $url_array[0] = 'Admin';
                else:
                    unset($url_array[0]);
                    $url_array = array_values($url_array);
                endif;
            }
            $controller = ucfirst($url_array[0]);
            if(!file_exists("controllers/$controller.php"))
                $controller = 'Dashboard';
            if(isset($url_array[1]))
                $method = $url_array[1];
            if(isset($url_array[2]))
                $id = $url_array[2];
        }
        include("controllers/$controller.php");
        $controller_obj = new $controller();
        if(!method_exists($controller, $method))
            $method = 'index';  
        $controller_obj->{$method}($id);
    }
}
?>