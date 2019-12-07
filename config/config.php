<?php

define('BASIC_PATH',str_replace('\\','/',dirname(dirname(__FILE__))).'/');
define('LIB_DIR',       BASIC_PATH .'app/');
define("CLASS_DIR",    LIB_DIR ."class/");
define("SOURCE_DIR",   LIB_DIR ."src/");

if(file_exists(BASIC_PATH."app/class/com.calc.class.php")){
    include(BASIC_PATH."app/class/com.calc.class.php");
}else{
	die("Perdão... O codigo morreu pois o arquivo:app/class/com.calc.class.php está ausente");
}

?>