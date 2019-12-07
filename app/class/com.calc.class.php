<?php
    class Application{

    	public $folders_valids = false;

    	private function checkFolders(){
    		$folder = false;
    		for($i=0;$i<7;$i++){
    			echo "Checando Agora: ".$folder;
    			echo "<br />";
    			echo $i;
    			echo "<br />";
    			if($i == 1){
    				$folder = "./app/class/com.calc.class.php";
    				if(file_exists(BASIC_PATH."app/class/com.calc.class.php")){
    					echo "Arquivo existente!";
    					echo "<hr>";
    				}
    			}
    			if($i == 2){
    				$folder = "./app/src/public/pages/Calculator.php";
    				if(file_exists(BASIC_PATH."./app/src/public/pages/Calculator.php")){
    					echo "Arquivo existente!";
    					echo "<hr>";
    				}else{
    					die("Perdão... O codigo morreu pois".$folder."esta ausente");
    				}
    			}
    			if($i == 3){
    				$folder = "./index.php";
    				if(file_exists(BASIC_PATH."index.php")){
    					echo "Arquivo existente!";
    					echo "<hr>";
    				}else{
    					die("Perdão... O codigo morreu pois".$folder."esta ausente");
    				}
    			}
    			if($i == 4){
    				$folder = "./config/config.php";
    				if(file_exists(BASIC_PATH."config/config.php")){
    					echo "Arquivo existente!";
    					echo "<hr>";
    				}else{
    					die("Perdão... O codigo morreu pois".$folder."esta ausente");
    				}
    			}
    			if($i == 5){
    				$folder = "./app/src/public/Register.php";
    				if(file_exists(BASIC_PATH."./app/src/public/Register.php")){
    					$folder = true;
    					echo "Arquivo existente!";
    					echo "<hr>";
    				}else{
    					die("Perdão... O codigo morreu pois".$folder."esta ausente");
    				}
    			}
    			if($folder == true){
    				include(BASIC_PATH."app/src/public/Register.php");
    			}
    		}
    	}

        public function run(){
        	$this->checkFolders();
        }
    }   
?>