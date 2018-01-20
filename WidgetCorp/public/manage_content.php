<?php include("../includes/layouts/header.php");?>
<?php require_once("../includes/functions.php");?>
<?php require_once("../includes/db_connection.php");?>
<div id="main">
    <div id="navigation">
        <ul class="subjects">
            <?php //run a query
            $query  = "SELECT * ";
            $query .= "FROM subjects ";
            $query .= "WHERE visible = 1 ";
            $query .= "ORDER BY position ASC";

            $result = mysqli_query($connection, $query);
            //Test for SQL syntax errors
            confirm_query($result);
            ?>
            <?php // output query results
            while($subject = mysqli_fetch_assoc($result)) {?>
                <li>
                    <?php echo $subject["menu_name"] . " (" . $subject["id"] . ") ";?>
                </li>
                <?php
            }
            ?>
            <?php //free result
            mysqli_free_result($result);
            ?>
        </ul>
    </div>
    <div id="page">
        <h2>Manage Content</h2>

    </div>
</div>
<?php include("../includes/layouts/footer.php");?>

