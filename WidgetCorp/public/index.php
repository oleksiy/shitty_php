<?php require_once("../includes/session.php");?>
<?php require_once("../includes/db_connection.php");?>
<?php require_once("../includes/functions.php");?>
<?php find_selected_page();?>
<?php include("../includes/layouts/header.php");?>

<div id="main">
    <div id="navigation">
        <?php echo public_navigation($current_subject, $current_page);?>
    </div>
    <div id="page">
        <?php if ($current_subject) {?>
            <h2>Manage Subject</h2>
            Menu Name: <?php echo htmlentities($current_subject["menu_name"]);?><br/>
        <?php } elseif ($current_page) {?>
                <h2>Manage Page</h2>
                Page Name: <?php echo $current_page["menu_name"];?><br/>

                <?php echo htmlentities($current_page["content"]);?><br/>
        <?php } else {?>
            Please select a subject or a page.
        <?php }?>
    </div>
</div>
<?php include("../includes/layouts/footer.php");?>

