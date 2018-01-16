<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shitty Form Handling</title>
</head>
<body>
<form action="form_processing.php" method="post">
    Username: <input type="text" name="username" value=""/>
    <br/>
    Password: <input type="password" name="password" value=""/>
    <br/>
    <input type="submit" name="submit" value="Submit"/>
</form>

<?php include_once("homebutton.php");?>
</html>