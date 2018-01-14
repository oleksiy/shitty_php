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
    <br/>
    <?php
    echo $mixed_array[3][1];
    ?>
    <br/>
    <?php
    $shorthand = [5,12,"shitty"];
    echo print_r($shorthand);
    ?>
    <br/>

    <h2>Associative Arrays</h2>
    <?php
    $associative_array = array("lastName"=>"Ever", "firstName"=>"Greatest", "title"=>"Sir Drizzy");
    echo print_r($associative_array);
    ?>
    <br/>

</pre>
<?php
echo $associative_array["title"];
?>
<br/>
<h2>Array Functions</h2>
<pre>
    <?php
    echo print_r($numbers);
    echo "<br/>";
    echo "COUNT: " . count($numbers);
    echo "<br/>";
    echo "\r\nMAX: " . max($numbers);
    echo "<br/>";
    echo "\r\nMIN: " . min($numbers);
    echo "<br/>";
    sort($numbers);
    echo "SORT: " .print_r($numbers);
    echo "<br/>";
    rsort($numbers);
    echo "SORT: " .print_r($numbers);
    echo "<br/>";
    echo $number_string = implode(" | ", $numbers);
    echo "<br/>";
    echo print_r(explode(" | ", $number_string));
    echo "<br/>";
    echo "Is 253 in the array? " . in_array(253, $numbers);
    echo "<br/>";
    echo "Is 2 in the array? " . in_array(2, $numbers);
    ?>
</pre>

</body>
</html>
