<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookies</title>
    <link rel="icon" href="favicon.ico"/>
</head>
<body>
<?php
    $name = "test";
    $value = "shitty";
    $expire = time() + (60 * 60 * 24 * 7); //add seconds
    //setcookie($name, $value, $expire);
    setcookie($name, null, time()-3600);
    //setcookie($name, null, $expire);
    //setcookie($name);
?>
<pre>
    <?php
    $test = isset($_COOKIE["test"]) ? $_COOKIE["test"] : "empty";
    echo $test;
    ?>
</pre>
<?php
require_once('homebutton.php');
?>
</body>
</html>