<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MultiPage & Links TWO</title>
</head>
<body>
<pre>
    <?php
    print_r($_GET);
    ?>
</pre>
<br/>
<h1>collecting specific query parameter called id</h1>
<?php
    if(isset($id_from_get)) {
        $id_from_get = $_GET["id"];
        echo $id_from_get;
    }
?>
<br/>
<!--html encoding -->
<?php
    $link_with_special = htmlspecialchars("<&&ENTER AT YOUR OWN RISK&&>");
?>
<a href="multipage2.php"><?php echo $link_with_special?></a>
<br/>
</body>
</html>