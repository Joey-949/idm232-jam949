<?php
// Build Query
$query = 'SELECT * ';
$query .= 'FROM recipes';

$db_results = mysqli_query($db_connection, $query);

// If Keyword param exist, update query to show search results instead of everything
if (isset($_GET['keyword'])) {
$keyword = $_GET['keyword'];
$recipes = search_recipe_with_keyword($keyword);
} else {
// Build Query
$recipes = get_recipes();
}
$page_title = 'All-Recipes';

include_once '../global/adminHeader.php';
include_once '../includes/includes.php';

$sql = 'SELECT id, Title, Notes, Ingredients, Directions';
$sql .= 'FROM recipes';
$db_results = mysqli_query($con, $sql);
?>

<html>

<body>
<form class="search-form" action="" method="GET">
                    <input class="searchTerm" type="text" name="keyword" placeholder="Search Recipes..."
                         value="<?php echo @$_GET['keyword']; ?>">
                    <input class="searchButton" type="submit" value="Submit">
               </form>
    <div class="hp-content hp-content-secondary" id="category-content">
        <div>
            <h2 class="secondary-title roboto">All Recipes</h2>
        </div>
        <div class="search-bar" id="search-bar-large">
            <form action="search-result.php" method="GET">
                <input type="text" placeholder="Search" name="recipeSearch">
                <button type="submit"><img src="../images/search.svg" alt="search icon"></button>
            </form>
        </div>
        <div>
            <?php

            if ($db_results && $db_results->num_rows > 0) {
                include '../components/card.php';
            } else {
                echo '<p>There are currently no recipes in the database</p>';
            }
            ?>
            
        </div>
    </div>
</body>

</html>