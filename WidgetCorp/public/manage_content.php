<?php include("../includes/layouts/header.php");?>
<?php require_once("../includes/functions.php");?>
<?php require_once("../includes/db_connection.php");?>
<?php
$selected_subject_id = isset($_GET["subject"]) ? $_GET["subject"] : null;
$selected_page_id = isset($_GET["page"]) ? $_GET["page"] : null;
?>
<div id="main">
    <div id="navigation">
        <ul class="subjects">
            <?php $subject_set = find_all_subjects(); ?>
            <?php // output query results
            while($subject = mysqli_fetch_assoc($subject_set)) {
                ?>
                <li>
                    <a href="manage_content.php?subject=<?php echo urlencode($subject["id"]);?>"><?php echo $subject["menu_name"];?></a>
                    <?php $page_set = find_pages_for_subject($subject["id"]);?>
                    <ul class="pages">
                        <?php // output query results
                        while($page = mysqli_fetch_assoc($page_set)) {
                            ?>
                            <li>
                                <a href="manage_content.php?page=<?php echo urlencode($page["id"]);?>"><?php echo $page["menu_name"]; ?></a>
                            </li>
                            <?php
                        }
                        ?>
                        <?php mysqli_free_result($page_set);?>
                    </ul>
                </li>
                <?php
            }
            ?>
            <?php //free result
            mysqli_free_result($subject_set);
            ?>
        </ul>
    </div>
    <div id="page">
        <h2>Manage Content</h2>
        <?php echo $selected_subject_id;?><br/>
        <?php echo $selected_page_id;?><br/>
    </div>
</div>
<?php include("../includes/layouts/footer.php");?>

