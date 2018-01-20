<?php
function confirm_query($result_set){
    if(!$result_set){
        die("Database query failed!");
    }
}

function find_all_subjects(){
    global $connection;
    $query  = "SELECT * ";
    $query .= "FROM subjects ";
    $query .= "WHERE visible = 1 ";
    $query .= "ORDER BY position ASC";
    //process result
    $subject_set = mysqli_query($connection, $query);
    confirm_query($subject_set);
    return $subject_set;
}

function find_pages_for_subject($subject_id){
    global $connection;
    $query  = "SELECT * ";
    $query .= "FROM pages ";
    $query .= "WHERE visible = 1 ";
    $query .= "AND subject_id = {$subject_id} ";
    $query .= "ORDER BY position ASC";
    //process result
    $page_set = mysqli_query($connection, $query);
    //Test for SQL syntax errors
    confirm_query($page_set);
    return $page_set;
}

//2 args, current subject id, current page id
function navigation($subject_id, $page_id) {
    $output = "<ul class=\"subjects\">";
    $subject_set = find_all_subjects();
    // output query results
    while($subject = mysqli_fetch_assoc($subject_set)) {
        $output .="<li ";
        if($subject["id"] == $subject_id){
            $output .= "class=\"selected\"";
        }
        $output .= ">";

        $output .= "<a href=\"manage_content.php?subject=";
        $output .= urlencode($subject["id"]);
        $output .= "\">";
        $output .=  $subject["menu_name"];
        $output .= "</a>";

        $page_set = find_pages_for_subject($subject["id"]);
        $output .= "<ul class=\"pages\">";
        // output query results
        while($page = mysqli_fetch_assoc($page_set)) {

            $output .=  "<li ";
            if($page["id"] == $page_id){
                $output .=  "class=\"selected\"";
            }
            $output .=  ">";
            $output .= "<a href=\"manage_content.php?page=";
            $output .= urlencode($page["id"]);
            $output .= "\">";
            $output .= $page["menu_name"];
            $output .= "</a>";
            $output .= "</li>";
        }
        mysqli_free_result($page_set);
        $output .= "</ul>";
        $output .= "</li>";

    }
    //free result
    mysqli_free_result($subject_set);

    $output .= "</ul>";

    return $output;
}