<?php
session_start();
if(!isset($_SESSION['userid'])) {
    $server_error = "Forbidden";
    echo $server_error;
    die();
}
 
require_once("../../resources/components/dashboard.php");
?>