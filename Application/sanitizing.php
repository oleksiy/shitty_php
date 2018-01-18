<?php


//Database Connection
$dbhost = "127.0.0.1";
$dbuser = "widget_cms";
$dbpass = "password";
$dbname = "widget_corp";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

//Test if Connection is successful, otherwise fail
if(mysqli_connect_errno()) {
    die("DATABASE CONNECTION FAILED:" . mysqli_connect_error() . " (" . mysqli_connect_errno() . ") ");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Escaping Strings</title>
</head>
<body>
<?php
    $menu_name = "Today's menu";
    $position = 4;
    $visible = 1;
    $menu_name = mysqli_escape_string($connection, $menu_name);
    echo $menu_name . "</br>";

    $username = "tobias";
    $password = "fünke$$$";
    $query = "SELECT * from users WHERE username = ? AND password = ?";

?>
</body>
</html>
<?php
mysqli_close($connection);
require_once("../homebutton.php");
?>
