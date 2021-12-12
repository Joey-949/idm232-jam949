<?php
$page_title = 'All-Recipes';

include_once '../global/adminHeader.php';

$sql = 'SELECT id, Title, Directions ';
$sql .= 'FROM recipes';
$db_results = mysqli_query($con, $sql);
$query = $_GET['recipeSearchUser'];
?>

<html>

<body>
    <div class="hp-content hp-content-secondary" id="category-content">
        <div>
            <h1 class="large-title elsie" id="category-title">SEARCH RESULT</h1>
        </div>
        <div class="search-bar" id="search-bar-large">
            <form action="search-result-user.php" method="GET">
                <input type="text" placeholder="Search" name="recipeSearchUser" value="<?php echo $query; ?>">
                <button type="submit"><img src="../images/search.svg" alt="search icon"></button>
            </form>
        </div>
        <div>
            <?php
            while ($row = mysqli_fetch_assoc($db_results)) {
                if (!str_contains(strtoupper($row['recipeTitle']), strtoupper($query))) {
                    continue;
                }
                $id = $row['id'];
                $recipeTitle = $row['Title'];
                $recipeImage = $row['Image'];

                echo "<div class='master-recipe-card roboto'>
                <div class='master-recipe-card-image'>
                    <li style='background: url(\"" . $recipeImage . "\"); background-size: cover; list-style-type: none; ')></li>
                </div>

                <div class=' master-recipe-card-text'>
                    <a href='../users/recipe-detail.php?id=" . $id . "'>
                        <h4 class='master-recipe-title'>" . $recipeTitle . "</h4>
                    </a>
                </div>
            </div>";
            }
            ?>
        </div>
    </div>
</body>

</html>