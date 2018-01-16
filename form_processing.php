<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Processing</title>
</head>
<body>
<p>This is the data you're passing</p>
<pre>
    <?php
    print_r(get_defined_vars());
    print_r($_POST);
    ?>
</pre>
<br/>
<?php
    if(isset($_POST["username"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        echo $username . " --> " . $password . "<br/>";
    }

    if(isset($_POST["submit"])){
        echo "form was submitted";
    }else{
        echo "page was refreshed";
    }
?>

<?php include_once("homebutton.php");?>
</body>
</html>


