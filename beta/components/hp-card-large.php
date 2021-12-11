<?php
$row = mysqli_fetch_assoc($db_results);
?>
<div>
    <div class="recipe-card-large">
        <a href="../users/recipe-detail.php?id=<?php echo $row['id']; ?>">
            <img src="<?php echo $row['recipeImage']; ?>" alt="image of pasta">
        </a>
        <div class="hover-style-secondary">
            <a href="../users/recipe-detail.php?id=<?php echo $row['id']; ?>">
            </a>
            <p class="roboto">In this easy recipe, inspired by steak Diane 
                (an American restaurant classic), we’re searing beef medallions, 
                then using the fond in the pan to make a rich, bright mushroom sauce 
                for spooning on top. Garlic mashed potatoes and sautéed kale make for 
                delicious, simple sides.</p>
        </div>
    </div>
</div>