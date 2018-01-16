<?php
//redirect user to a page
function redirect_to($location){
    header("Location: " . $location);
    exit;
}

//bad way to compare
function is_bad_equal($value1, $value2){
    $output = "{$value1} == {$value2}";
    if($value1 == $value2){
        $output .= " is true<br/>";
    } else {
        $output .= " is false<br/>";
    }
    return $output;
}

function is_equal($value1, $value2){
    $output = "{$value1} == {$value2}";
    if($value1 === $value2){
        $output .= " is true<br/>";
    } else {
        $output .= " is false<br/>";
    }
    return $output;
}