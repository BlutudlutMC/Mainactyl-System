
<?php require("../../config.php"); ?>
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
        <a class="active" href="/dashboard/index.php">Dashboard</a>
        <a href="/dashboard/servers.php">Servers</a>
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
        <h2>Dashboard</h2>
        <p>Welcome to the Dashboard of Mainactyl!</p>
        <p>Here you have a little overview about your plan, resources and Coins.</p>
        <br>
        <div class="card">
            <img src="/hiq/mainactyl.jpg" class="card-img" height="150px" alt="Error while loading 'Logo'">
            <div class="card-container">
                <h2>Resources overview</h2>
                <h3>Plan</h3>
                <p>Your Plan: <b>Default-Plan</b></p>
                <br>
                <h3>Resources</h3>
                <p>Memory (RAM): <b>2048 MB - 2 GB</b></p>
                <p>Disk (SSD): <b>5120 MB - 5 GB</b></p>
                <p>CPU (Processor): <b>200 % - 2 vCores</b></p>
                <p>Max Servers: <b>2 Servers</b></p>
                <p>Alloactions (Ports): <b>4 Allocations</b></p>
                <p>Backups: <b>5 Backups</b></p>
                <p>Databases (MySQL): <b>2 MySQL Databases</b></p>
                <br>
                <br>
                <h2>First Steps:</h2>
                <h3>Create Server</h3>
                <p>If you want to create your Gameserver click the button bellow!</p>
                <button onclick="createsrv()" class="buttonwbg">Create a new Server</button>
            </div>
        </div>
        <br><br><br>
        <h3>© <?php echo date("Y"); ?> <?php echo $app_name ;?> powered by Mainactyl</h3>
    </div>
    <script src="/hiq/button.js"></script>
</body>
</html>