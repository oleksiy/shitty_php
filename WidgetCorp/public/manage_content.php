<?php include("../includes/layouts/header.php");?>
<?php require_once("../includes/functions.php");?>
<?php require_once("../includes/db_connection.php");?>
<?php
$selected_subject_id = isset($_GET["subject"]) ? $_GET["subject"] : null;
$selected_page_id = isset($_GET["page"]) ? $_GET["page"] : null;
?>
<div id="main">
    <div id="navigation">
        <?php echo navigation($selected_subject_id, $selected_page_id);?>
    </div>
    <div id="page">
        <h2>Manage Content</h2>
        <?php echo $selected_subject_id;?><br/>
        <?php echo $selected_page_id;?><br/>
    </div>
</div>
<?php include("../includes/layouts/footer.php");?>

