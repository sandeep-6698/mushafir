<?php
class View{
    public function loadView($filename, $data=[], $header=true, $footer=true){
        $isAdminRoute = strpos("/".Request::get('url'), 'admin');
        foreach($data as $key=>$value){
            $this->$key = $value;
        }
        $header and include_once('views/common/header.php');
        $isAdminRoute and include_once('views/common/admin/header.php');
        include_once("views/$filename.php");
        $isAdminRoute and include_once('views/common/admin/footer.php');
        $footer and include_once('views/common/footer.php');
    }
}
?>