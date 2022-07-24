session_start();
if(!isset($_SESSION['userid'])) {
    $server_error = "Forbidden";
    echo $server_error;
    die();
}
 
//Abfrage der Nutzer ID vom Login
$userid = $_SESSION['userid'];
 