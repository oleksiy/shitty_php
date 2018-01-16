<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sessions</title>
</head>
<body>
<?php
    $_SESSION["first_name"] = "Timmy";
    $name = $_SESSION["first_name"];
    echo $name;
?>
<?php include_once('homebutton.php');?>
</body>
</html>