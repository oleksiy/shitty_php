<?php
//Step 1: Create Connection
//create a db connection
$dbhost = "127.0.0.1";
$dbuser = "alexblavat";
$dbpass = "password";
$dbname = "widget_corp";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
//test if successful
if(mysqli_connect_errno()){
    die("Database connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ") ");
}
?>
<?php
//Step 2: Perform a query
$query  = "SELECT * ";
$query .= "FROM subjects ";
$query .= "WHERE visible=1 ";
$query .= "ORDER BY position ASC";


$result = mysqli_query($connection, $query);
//you get a resource, which is a collection of database rows
if(!$result){
    //only shows if the syntax is wrong
    die("Database Query Failed!");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Scratch Connection to DB</title>
</head>
<body>
<pre>
<?php
//Step 3: Use returned data (if any)
//output data from each row
while($row = mysqli_fetch_assoc($result)){
    //output data from each row
    //var_dump($row); // raw dump
    echo $row["id"] . "<br/>";
    echo $row["menu_name"] . "<br/>";
    echo $row["position"] . "<br/>";
    echo $row["visible"] . "<br/>";
    echo "<hr/>";
}
?>
</pre>>
<?php
//Step 4: Release returned data
mysqli_free_result($result);

?>
<?php require_once("../homebutton.php");?>
</body>
</html>
<?php
//Step5: close database connection
mysqli_close($connection);
?>