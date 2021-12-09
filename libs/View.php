<?php
class View{
    public function loadView($filename, $header=true, $footer=true){
        $header and include_once('views/common/header.php');
        include_once("views/$filename.php");
        $footer and include_once('views/common/footer.php');
    }
}
?>