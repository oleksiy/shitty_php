<?php
require_once ('common.php');
if(isset($_POST["submit"])){
    //form was submitted
    $username = $_POST["username"];
    $password = $_POST["password"];
    if($username === "admin" && $password === "password"){
        //successful login
        redirect_to("index.html");
    } else {
        $message = "Logging in: {$username}";
    }
}else{
    $username = "";
    $message = "Please log in";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Single Page Form (Shitty)</title>
</head>
<body>
<?php echo $message . "<br/>"?>
<form action="singlepageform.php" method="post">
    Login:   <input type="text" name="username" placeholder="username here" value="<?php echo htmlspecialchars($username);?>" /><br/>
    Password:<input type="password" name="password" placeholder="***"/><br/>
    <input type="submit" name="submit" value="Submit"/><br/>
</form>
<?php include_once("homebutton.php");?>
</body>
</html>