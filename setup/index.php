<?php
$page = "index.php";
$p = "";


if(isset($_GET["page"])){
    $p = $_GET["page"];
}


if($p == "" || $p == "index"){
    $page = "index.php";
}


if($p == "step_1" || $p == "step_1"){
    $page = "step_1.php";
}


require_once("sites/".$page);
?>
