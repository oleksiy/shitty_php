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
    <br/>
    += : <?php $absoluteVal+=100; echo $absoluteVal;?><br/>
    -= : <?php $absoluteVal-=111; echo $absoluteVal;?><br/>
    *= : <?php $absoluteVal*=2; echo $absoluteVal;?><br/>
    /= : <?php $absoluteVal/=5; echo $absoluteVal;?><br/>
    <br/>
    INCREMENT (computed prior to displaying, aka prefix oper) <?php echo(++$absoluteVal);?><br/>
    DECREMENT (same as above) <?php echo(--$absoluteVal);?><br/>
    <br/>
    <h3>Floating Point Numbers</h3>
    <?php
        $float = 3.14;
        $integer = 7;
    ?>
    <?php echo("Is {$integer} integer?" . " " . is_int($integer));?><br>
    <?php echo("Is {$float} float?" . " " . is_float($float));?><br>
    <?php echo("Is {$integer} float?" . " " . is_float($integer));?><br>
    <?php echo("Is {$integer} numeric?" . " " . is_numeric($integer));?><br>
</code>
</body>
</html>

