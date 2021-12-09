<?php

$config_files = glob("config/*.php");
foreach($config_files as $file){
    include_once($file);
}

$libs_files = glob("libs/*.php");
foreach($libs_files as $file){
    include_once($file);
}

Session::init();
$autoload = new AutoLoad();
?>