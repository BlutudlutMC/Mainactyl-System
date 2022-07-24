<?php require("../config.php"); ?>
<?php try {
    
    $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpassword);
} catch (PDOException $e){
    echo "Server Error 500";
    die();
}
?>