<?php require("../config.php"); sleep(2); ?>	
<?php
session_start();
try {
    
    $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpassword);
} catch (PDOException $e){
    echo "Server Error 500";
    die();
}

if(isset($_GET['login'])) {
    $email = $_POST['email'];
    $passwort = $_POST['passwort'];
    
    $statement = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $result = $statement->execute(array('email' => $email));
    $user = $statement->fetch();
        
    //Überprüfung des Passworts
    if ($user !== false && password_verify($passwort, $user['passwort'])) {
        $_SESSION['userid'] = $user['id'];
        die('<meta http-equiv="refresh" content="1;URL=\'/dashboard/\'" />');
    } else {
        $errorMessage = "<b style='color: white;'>Invalid Password or Email Address.</b> <br>";
    }
    
}
?>

<!DOCTYPE html>
<?php 
if(isset($_SESSION['userid'])) {
    header("Location: /dashboard");
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to <?php echo $app_name;?></title>
    <link rel="stylesheet" href="/hiq/mainactyl.css">
    <link rel="stylesheet" href="/hiq/hiq.css">
</head>
<body class="login_bg">
    <?php 
    if(isset($errorMessage)) {
        echo $errorMessage;
    }
    ?>
    <div class="container is-fluid center">
        <h1>Login to continue to <?php echo $app_name; ?></h1>
        <div class="login_wrapper">
            
            <form action="?login=1" method="post">

                <div style="text-align: center; position: relative; item-align: center; justify-content: center;" >
                    <img src="/hiq/mainactyl_black_bg.png" class="img-container" height="50%" width="50%" alt="Container IMG not loaded." srcset="">
                    <fieldset>
                        <p>
                            <label for="email">EMAIL</label>
                            <input type="email" size="40" name="email" id="email">
                        </p>
                        <p>
                            <label for="passwort">PASSWORD</label>
                            <input type="password" size="40" name="passwort" id="passwort">
                        </p>
                        <p>
                            <input type="submit" value="Login" class="button">
                        </p>
                    </fieldset>
                </div>
            </form>
        </div>
    </div>
</body>
</html>