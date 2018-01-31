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
                <?php echo htmlentities($current_page["content"]);?><br/>
        <?php } else {?>
            Please select a subject or a page.
        <?php }?>
    </div>
</div>
<?php include("../includes/layouts/footer.php");?>

