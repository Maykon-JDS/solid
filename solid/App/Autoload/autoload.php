<?php
    function autoload($classe){
        if(file_exists("App/Interface/" . $classe . ".php")){
            require_once("App/Interface/" . $classe . ".php");
        }else{
            require_once("App/Class/" . $classe . ".php");
        }
    }
?>