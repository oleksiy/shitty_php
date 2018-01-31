<?php $layout_context = "public";?>
<?php require_once("../includes/session.php");?>
<?php require_once("../includes/db_connection.php");?>
<?php require_once("../includes/functions.php");?>
<?php find_selected_page(true);?>
<?php include("../includes/layouts/header.php");?>

<div id="main">
    <div id="navigation">
        <?php echo public_navigation($current_subject, $current_page);?>
    </div>
    <div id="page">
        <?php if ($current_page) {?>
            <h2><?php echo htmlentities($current_page["menu_name"]);?></h2><br/>
                <?php echo nl2br(htmlentities($current_page["content"]));?><br/>
        <?php } else {?>
            <p>Welcome!</p>
        <?php }?>
    </div>
</div>
<?php include("../includes/layouts/footer.php");?>

