<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shitty PHP now with numbers</title>
</head>
<body>
<h2>Number Operations!</h2>
<?php
/**
 * Created by PhpStorm.
 * User: oblavat
 * Date: 1/12/18
 * Time: 2:54 AM
 */
$absoluteVal = abs(0-300);
$expo = pow(2,8);
$square_root = sqrt(25);
$modulo = fmod(20, 7);
$random = rand();
$seeded_random = rand(1,10);
?>
<code>
    Absolute Value: <?php echo $absoluteVal;?> <br/>
    Exponential: <?php echo $expo;?> <br/>
    Square Root: <?php echo $square_root; ?> <br/>
    Modulo: <?php echo $modulo;?> <br/>
    Random: <?php echo $random;?> <br/>
    Random(max, min): <?php echo $seeded_random;?> <br/>
</code>
</body>
</html>

