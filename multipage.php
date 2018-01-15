<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MultiPage & Links</title>
</head>
<body>
<?php $link_name = "Passing Data between pages";?>
<?php $id = 2 ?>
<?php $company = rawurlencode("Bit&Rex Inc");?>
<a href="multipage2.php?id=<?php echo $id;?>&company=<?php echo $company;?>"><?php echo $link_name;?></a>
</body>
</html>