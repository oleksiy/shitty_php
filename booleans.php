<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP booleans and NULLS</title>
</head>
<br>
<?php
$boolean_true = true;
$boolean_false = false;
echo $boolean_true;
echo "<br/>";
echo $boolean_false;
echo "<br/>";
echo is_bool($boolean_false);
echo "<br/>";
$number = 3.124;
if (is_float($number)) {
    echo "it's a float";
}
?>
<br/>
<?php
$n_val = null;
$ff;
echo is_null($n_val);
echo "<br>";
echo "is it empty ".empty($ff);
?>

</body>
</html>