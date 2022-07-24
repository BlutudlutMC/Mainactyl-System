
<?php require("../../config.php"); ?>
<?php session_start();
if(!isset($_SESSION['userid'])) {
    $server_error = "Forbidden";
    echo $server_error;
    die();
} ?>
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
        <a class="active" href="/dashboard/servers.php">Servers</a>
        <a href="/dashboard/createservers.php">Create Server</a>
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
    <div class="content">
        <h2>Servers</h2>
        <p>Welcome to the Dashboard of Mainactyl!</p>
        <p>Here you can see your servers.</p>
        <button onclick="createsrv()" class="buttonwbg">Create new...</button><br><br>
        <div class="card">
            <img src="/hiq/mainactyl.jpg" class="card-img" height="150px" alt="Error while loading 'Logo'">
            <div class="card-container">
                <h1>Your Servers</h1>
                <br>
                <h2>No servers where found on the system.</h2>
                <h2>It seems you do not have any servers!</h2>
                <b>Create one now!</b><br>
                <button onclick="createsrv()" class="buttonwbg">Create a new Server</button>
            </div>
        </div>
        <h3>© <?php echo date("Y"); ?> <?php echo $app_name ;?> powered by Mainactyl</h3>
    </div>
    <script src="/hiq/button.js"></script>
</body>
</html>