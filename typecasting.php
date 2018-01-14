<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shitty Typecasting</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: oblavat
 * Date: 1/13/18
 * Time: 11:49 PM
 */
$integer = 2;
echo gettype($integer);
?>
<br/>
<?php
    echo gettype((string)$integer);
?>
<br/>
<?php
settype($integer, "float");
echo gettype($integer);
?>
</body>
</html>
