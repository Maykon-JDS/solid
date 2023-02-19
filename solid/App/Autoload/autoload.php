<?php
    function autoload($classe){
        if(file_exists("App/Interface/" . $classe . ".php")){
            require_once("App/interface/" . $classe . ".php");
        }else{
            require("$classe.php");
        }
    }

    spl_autoload_register('autoload');
?>