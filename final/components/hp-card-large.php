<?php
$row = mysqli_fetch_assoc($db_results);
?>
<div>
    <div class="recipe-card-large">
        <a href="../users/recipe-detail.php?id=<?php echo $row['id']; ?>">
            <img src="../images/food1.jpg" alt="image of pasta">
        </a>
        <div class="hover-style-secondary">
            <a href="../users/recipe-detail.php?id=<?php echo $row['id']; ?>">
            </a>
            <p class="roboto">Irish potatoes may sound like a savory side dish but actually, 
                there are no potatoes at all in this traditional Irish dessert! 
                Potato candies are little bites of sweetened cream cheese and coconut, dusted with cinnamon. 
                They are delicious and incredibly easy to make.</p>
        </div>
    </div>
</div>