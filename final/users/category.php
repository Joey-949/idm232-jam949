<?php
$page_title = 'Category';

include_once '../global/adminHeader.php';

$sql = 'SELECT id, Title, Directions ';
$sql .= 'FROM recipes';
$db_results = mysqli_query($con, $sql);
?>

<html>

<head>
    <link rel="stylesheet" href="../master.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Elsie:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
</head>

<body>
    <div id="category-content">
        <div>
            <div>
                <h1 class="large-title elsie" id="category-title">Food</h1>
            </div>
            <div class="search-bar" id="search-bar-large">
                <form action="search-result-user.php" method="GET">
                    <input type="text" placeholder="Search" name="recipeSearchUser">
                    <button type="submit"><img src="../images/search.svg" alt="search icon"></button>
                </form>
            </div>
        </div>
    </div>
    <div class="recipe-card-grid">
        <?php
        if ($db_results && $db_results->num_rows > 0) {
            include '../components/hp-card-square.php';
        } else {
            echo '<p>There are currently no users in the database</p>';
        }
        ?>
        <?php
        if ($db_results && $db_results->num_rows > 0) {
            include '../components/hp-card-square.php';
        } else {
            echo '<p>There are currently no users in the database</p>';
        }
        ?>
        <?php
        if ($db_results && $db_results->num_rows > 0) {
            include '../components/hp-card-square.php';
        } else {
            echo '<p>There are currently no users in the database</p>';
        }
        ?>
        <?php
        if ($db_results && $db_results->num_rows > 0) {
            include '../components/hp-card-square.php';
        } else {
            echo '<p>There are currently no users in the database</p>';
        }
        ?>
        <?php
        if ($db_results && $db_results->num_rows > 0) {
            include '../components/hp-card-square.php';
        } else {
            echo '<p>There are currently no users in the database</p>';
        }
        ?>
        <?php
        if ($db_results && $db_results->num_rows > 0) {
            include '../components/hp-card-square.php';
        } else {
            echo '<p>There are currently no users in the database</p>';
        }
        ?>
        <?php
        if ($db_results && $db_results->num_rows > 0) {
            include '../components/hp-card-square.php';
        } else {
            echo '<p>There are currently no users in the database</p>';
        }
        ?>
        <?php
        if ($db_results && $db_results->num_rows > 0) {
            include '../components/hp-card-square.php';
        } else {
            echo '<p>There are currently no users in the database</p>';
        }
        ?>
        <?php
        if ($db_results && $db_results->num_rows > 0) {
            include '../components/hp-card-square.php';
        } else {
            echo '<p>There are currently no users in the database</p>';
        }
        ?>
        <?php
        if ($db_results && $db_results->num_rows > 0) {
            include '../components/hp-card-square.php';
        } else {
            echo '<p>There are currently no users in the database</p>';
        }
        ?>
        <?php
        if ($db_results && $db_results->num_rows > 0) {
            include '../components/hp-card-square.php';
        } else {
            echo '<p>There are currently no users in the database</p>';
        }
        ?>
        <?php
        if ($db_results && $db_results->num_rows > 0) {
            include '../components/hp-card-square.php';
        } else {
            echo '<p>There are currently no users in the database</p>';
        }
        ?>

    </div>

</body>

</html>