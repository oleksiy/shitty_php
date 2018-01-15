<?php
header("HTTP 1.1/ 404 Not Found");
header("X-Powered-By: none ya business");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shitty Inheritance</title>
</head>
<body>
<a href="shittyinheritance2.php">File which includes all of this</a>
<?php
    function hello($name){
        echo "<h1>HELLO {$name}</h1>";
    }
?>
<br/>
<pre>
    <?php
    print_r(headers_list());
    ?>
</pre>
</body>
</html>