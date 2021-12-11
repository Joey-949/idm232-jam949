<?php
$page_title = 'Detail';

include_once '../global/adminHeader.php';

$sql = 'SELECT * FROM recipes';
$db_results = mysqli_query($con, $sql);

?>
<html>
    <?php
        if ($db_results && $db_results->num_rows > 0) {
            include '../components/detail-content.php';
        } else {
            echo '<p>There are currently no users in the database</p>';
        }
    ?>

</body>

</html>