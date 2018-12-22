<?php 
  if(!isset($_SERVER['HTTPS'])){
		header('Location: https://' . $_SERVER["SERVER_NAME"] . $_SERVER['REQUEST_URI']);
	}

    require_once('includes/config.php');
    require_once('includes/dbConn.php');
   	
    // Inkluder header-fil
		require_once('includes/title.php');
    require_once('includes/header.php');
    
    $uri = explode("/", $_SERVER['REQUEST_URI']);
    // echo $page = $uri[2];
    
    if(isset($uri[2]) && !empty($uri[2])){
        if(file_exists($pagesFolderPath . $uri[2] . '.php')){
            include($pagesFolderPath . $uri[2] . '.php');
        }
        else{
            include($pagesFolderPath . '404.php');
        }
    }else {
        include($pagesFolderPath . 'home.php');
    }
    
    // Inkluder footer-filen
    require_once('includes/footer.php');