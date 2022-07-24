
<?php require("../../config.php"); ?>
<?php
session_start();
if(!isset($_SESSION['userid'])) {
    $server_error = "Forbidden";
    echo $server_error;
    die();
}?>
<?php try {
    
    $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpassword);
} catch (PDOException $e){
    echo "Server Error 500";
    die();
}
?>
<?php $userid = $_SESSION['userid']; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/hiq/mainactyl.css">
    <link rel="stylesheet" href="/hiq/hiq.css">
</head>
<body>
    <div class="sidebar">
        <a href="/dashboard/account.php"><?php echo "User ID: ". $userid; ?></a>
        <a href="/dashboard/index.php">Dashboard</a>
        <a href="/dashboard/servers.php">Servers</a>
        <a class="active" href="/dashboard/createservers.php">Create Server</a>
        <a href="/dashboard/buy.php">Buy more Resources</a>
        <a href="/dashboard/afk.php">Earn Coins</a>
        <a href="/dashboard/account.php">Account</a>
        <a href="/dashboard/activity.php">Activity Log</a>
        <?php
            if($userid == "1") {
                echo '<a href="/dashboard/admin/index.php">Admin</a>';
            }
        ?>
    </div>
    <div class="content"><br>
        <div class="card">
            <div class="card-container">
                <h1>Create a new Gameserver...</h1>
                <p>Here you can create your Gameserver.</p>
                <form action="createservers.php" method="post">
                    <input type="text" required placeholder="Enter your Server Name" name="server_name"  class="form-input"><br><br>
                    <input type="text" required placeholder="Choose RAM" name="server_ram" class="form-input"><br><br>
                    <input type="text" required placeholder="Choose vCores" name="server_cores" class="form-input"><br><br>
                    <input type="text" required placeholder="Choose SSD" name="server_ssd" class="form-input"><br><br>
                    <button class="button">Submit</button>
                </form>
                <?php
                if(isset($_POST['server_name'])) {
                    echo "<h1>Server has been created!:". $_POST['server_name'].", ".$_POST['server_ram'].", ".$_POST['server_cores'].", ".$_POST['server_ssd'];
                    header("Location: http://localhost:8080/daemon/api/server/create?user=".$userid."&name=".$_POST['server_name']."&ram=".$_POST['server_ram']."&ssd=".$_POST['server_ssd']."&cores=".$_POST['server_cores']);
                }
                ?>
            </div>
        </div>
        <h3>© <?php echo date("Y"); ?> <?php echo $app_name ;?> powered by Mainactyl</h3>
    </div>
    <script src="/hiq/button.js"></script>
</body>
</html>