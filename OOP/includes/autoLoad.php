<?php
    spl_autoload_register('myAutoLoading');// auto load class 
    function myAutoLoading($className){
        $path ="classes/";//link to class
        $extention = ".php";// extention of class PHP
        $fullPath = $path.strtolower($className).$extention;
        if(!file_exists($fullPath)){ // check path is exists in Website
            return false;
        }
        require_once $fullPath;
    }
    
?>