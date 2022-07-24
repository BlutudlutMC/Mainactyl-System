<?php
//Import some Configs
require("../config.php");
// Database Check	
if ($app_env == 'production') {
    //try{
        //$mysql = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpassword);
    //} catch (PDOException $e){
        //$server_error="Can't connect to database."; require_once("../resources/components/config_errors/server_error.php");
    //}
    if ($client_ver == '0.2'){require_once("../resources/components/login.php");}
    else{$server_error="Try editing the Config"; require_once("../resources/components/config_errors/server_error.php");}
}
else{$server_error="ENV_NOT_FOUND"; require_once("../resources/components/config_errors/server_error.php");}

//Load Pages

?>