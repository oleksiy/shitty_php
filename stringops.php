<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shitty PHP, now with strings.</title>
</head>
<body>
<h2>String Operations!</h2>
<?php
/**
 * Created by PhpStorm.
 * User: oblavat
 * Date: 1/12/18
 * Time: 2:33 AM
 */
$first = "i hate php";
$second = "why is it so unreadable";
$third = $first;
$fourth = $second;
?>
<br/>
<p>
    Lowercase: <?php echo strtolower($third);?><br/>
    Uppercase: <?php echo strtolower($third);?><br/>
    UppercaseFirst: <?php echo ucfirst($third);?><br/>
    UppercaseWords: <?php echo ucwords($third);?><br/>
    <br/>
    Length: <?php echo strlen($third);?><br/>
    Trim: <?php echo("A") . trim(" B C D ") . "E";?><br/>
    Find: <?php echo strstr($fourth, "so");?><br/>
    Replace by string: <?php echo str_replace("hate","love",$first);?><br/>
    <br/>
    Repeat:<?php echo(str_repeat($first,6));?><br/>
    Make Substring:<?php echo(substr($first, 2, 5));?><br/>
    Find Position:<?php echo(strpos($second, "it"));?><br/>
    Find Character:<?php echo(strchr($first, "p"));?><br/>

</p>
</body>
</html>
