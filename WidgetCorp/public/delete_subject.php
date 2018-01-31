<?php
require_once("../includes/session.php");
require_once("../includes/db_connection.php");
require_once("../includes/functions.php");


$current_subject = find_subject_by_id($_GET["subject"]);
if(!$current_subject){
    //Subject ID is missing or invalid
    //Subject cannot be found in the database
    redirect_to("manage_content.php");
}

$pages_set = find_pages_for_subject($current_subject["id"]);
if (mysqli_num_rows($pages_set) > 0) {
    //Failure
    $_SESSION["message"] = "Subject deletion failed, please delete all subject sub-pages.";
    redirect_to("manage_content.php?subject={$current_subject["id"]}");
}

$id = $current_subject["id"];
$query = "DELETE FROM subjects WHERE id = {$id} LIMIT 1";
$result = mysqli_query($connection, $query);

if ($result && mysqli_affected_rows($connection) == 1){
    //success
    $_SESSION["message"] = "Subject deleted.";
    redirect_to("manage_content.php");
} else {
    //Failure
    $_SESSION["message"] = "Subject deletion failed.";
    redirect_to("manage_content.php?subject={$id}");
}

