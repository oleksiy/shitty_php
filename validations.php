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

<?php include_once("homebutton.php");?>
</body>
</html>