<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arrays in PHP</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: oblavat
 * Date: 1/13/18
 * Time: 10:17 PM
 */
$numbers = array(43,23,11,1,90,253);
echo $numbers[4];
$mixed_array = array(1,"two", 500.2, array("shitty", "php"));
echo "<br/>";
echo $mixed_array; // global variable, remains in scope of the file
?>
<br/>
<pre>
<?php
echo print_r($numbers);
echo "<br/>";
echo print_r($mixed_array);
?>
</pre>
</body>
</html>
