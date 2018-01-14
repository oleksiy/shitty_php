<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shitty Comparison Operators</title>
</head>
<body>
<?php
$var1 = 2;
$var2 = 3;
$var3 = "2";
echo $var1 == $var1;
?>
<br/>
<?php
if($var1 === $var3){ //identical checks for type
    echo "yes";
}else {
    echo "no";
}
?>
<br/>
<?php
if(!isset($status)){
    $status = "single, ready to mingle";
} else {
    echo "unchanged;";
}
echo $status;
?>
<br/>
<?php
$scams = "bitconnect";
switch($scams){
    case 'email':
        echo "bad";
        break;
    case 'bitconnect':
        echo "run away!";
        break;
    case 2:
        echo "a number?";
        break;
    default:
        echo "fell all the way through";

}
?>
</body>
</html>

