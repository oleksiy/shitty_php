<?php
//redirect user to a page
function redirect_to($location){
    header("Location: " . $location);
    exit;
}