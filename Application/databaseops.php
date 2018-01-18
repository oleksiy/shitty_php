<?php
    require_once("../homebutton.php");

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
    <title>Database Operations</title>
</head>
<body>
<h1>Creating a record</h1>
<?php
    /*
    $menu_name = "Edit me";
    $position = 4;
    $visible = null;

    //normally collected on $_POST
    $query = "INSERT INTO subjects (menu_name, position, visible)
              VALUES ('{$menu_name}', {$position}, {$visible})";

    $result = mysqli_query($connection, $query);
    if($result){
        //success
        //redirect somewhere
        echo("Success!");
    } else {
        //Failure
        //$message = "Subject creation failed";
        die("Database query failed. " . mysqli_error($connection));
    }
    */
?>
<h1>Updating Record</h1>
<?php
    //Update Query
    $id = 5;
    $menu_name = "Delete me";
    $position = 4;
    $visible = 1;

    $query = "UPDATE subjects SET menu_name='{$menu_name}', position = {$position}, visible = {$visible}, WHERE id={id}";
    $result = mysqli_query($connection, $query);
    if ($result) {
        echo("Record updated!");
    } else {
        die("Database query failed. " . mysqli_error($connection));
    }

?>
</body>
</html>
<?php
    mysqli_close($connection);
?>