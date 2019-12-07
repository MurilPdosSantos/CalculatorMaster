<?php
    //Inicio
    ob_start();
    if(file_exists("config/config.php")){
    	include("config/config.php");
    }else{
    	die("Perdão... O codigo morreu pois o arquivo: config/config.php está ausente");
    }
    $app = new Application();
    $app->run();
?>