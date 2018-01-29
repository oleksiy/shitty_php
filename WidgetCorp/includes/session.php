<?php
session_start();

function message(){
    if(isset($_SESSION["message"])){
        $output = "<div class=\"message\">'{$_SESSION["message"]}'</div>";
        return $output;
    }
}
?>