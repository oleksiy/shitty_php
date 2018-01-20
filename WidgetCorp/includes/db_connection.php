<?php // database connection
define("DB_SERVER", "127.0.0.1");
define("DB_USER", "widget_cms");
define("DB_PASS", "password");
define("DB_NAME", "widget_corp");

$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
// Test if connection succeeded
if(mysqli_connect_errno()) {
    die("Database connection failed! Details: " . mysqli_connect_error() . " (". mysqli_connect_errno() . ") ");
}
