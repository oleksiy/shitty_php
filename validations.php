<?php require_once("common.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>False Positives / Form Validation</title>
</head>
<body>
<?php
echo is_equal(0, false);
echo is_equal(4, true);
echo is_equal(0, null);
echo is_equal(0, "0");
echo is_equal(0, "");
echo is_equal(0, "a");
echo is_equal("1", "01");
echo is_equal("", null);
echo is_equal(3, "3 dogs");
echo is_equal(100, "1e2");
echo is_equal(100, 100.00);
echo is_equal("abc", true);
echo is_equal("123", "    123");
echo is_equal("123", "+0123");
?>
<br/>
<?php
$errors = array();
$value = trim("a");
//presence
if(!isset($value) || !is_numeric($value)){
    echo "Validation failed!<br/>";
    $errors["value"] = "Value cannot be blank";
}
//string length
//minimum length
$value = "a";
$min = 3;
if(strlen($value) < $min){
    echo "Validation failed.<br/>";
    $errors["string"] = "Value has to be longer than 3 characters";
}

//max length
$max = 6;
if(strlen($value) > $max){
    echo "Validation failed.<br/>";
}

if(!empty($errors)){
    echo "<div class=\"error\">";
    echo "Please fix the following errors:";
    echo "<ul>";
    foreach($errors as $key => $error){
        echo "<li>{$error}</li>";
    }
    echo "</ul>";
    echo "</div>";
}

?>

<?php include_once("homebutton.php");?>
</body>
</html>