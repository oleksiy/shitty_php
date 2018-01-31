<?php
    if(!isset($layout_context)){
        $layout_context="public";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Widget Corp &reg; <?php if($layout_context == "admin"){echo "Admin";}?></title>
    <link href="stylesheets/public.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="favicon.ico?" type="image/x-icon" rel="shortcut icon"/>
</head>
<body>
<div id="header">
    <h1>Widget Corp <?php if($layout_context == "admin"){echo "Admin";}?></h1>
</div>