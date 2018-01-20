<?php
    $dbhost = "127.0.0.1";
    $dbuser = "widget_cms";
    $dbpass = "password";
    $dbname = "widget_corp";
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    // Test if connection succeeded
    if(mysqli_connect_errno()) {
        die("Database connection failed! Details: " . mysqli_connect_error() . " (". mysqli_connect_errno() . ") ");
    }
?>
<?php include("../includes/layouts/header.php");?>
<?php require_once("../includes/functions.php");?>
<?php //run a query
$query  = "SELECT * ";
$query .= "FROM subjects ";
$query .= "WHERE visible = 1 ";
$query .= "ORDER BY position ASC";

$result = mysqli_query($connection, $query);
//Test for SQL syntax errors
if(!$result){
    die("Database query failed!");
}
?>
<div id="main">
    <div id="navigation">
        <ul class="subjects">
            <?php // output query results
            while($subject = mysqli_fetch_assoc($result)) {?>
                <li>
                    <?php echo $subject["menu_name"] . " (" . $subject["id"] . ") ";?>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>
    <div id="page">
        <h2>Manage Content</h2>

    </div>
</div>
<?php //free result
    mysqli_free_result($result);
?>
<?php include("../includes/layouts/footer.php");?>
<?php
    mysqli_close($connection);
?>
