<?php
class View{
    public function loadView($filename, $data=[], $header=true, $footer=true){
        foreach($data as $key=>$value){
            $this->$key = $value;
        }
        $header and include_once('views/common/header.php');
        include_once("views/$filename.php");
        $footer and include_once('views/common/footer.php');
    }
    public function loadAdminView($filename, $data=[]){
        foreach($data as $key=>$value){
            $this->$key = $value;
        }
        include_once('views/common/header.php');
        include_once('views/common/admin/header.php');
        include_once("views/$filename.php");
        include_once('views/common/admin/footer.php');
        include_once('views/common/footer.php');
    }
}
?>