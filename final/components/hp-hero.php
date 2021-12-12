<?php
$row = mysqli_fetch_assoc($db_results);
?>
    <div id="hero-text-items">
        <a href="../users/recipe-detail.php?id=<?php echo $row['id']; ?>">
            <h1 class="large-title elsie"><?php echo $row['Title']; ?></h1>
        </a>
        <h4 class="small-title">MEAL OF THE DAY</h4>
        <button class="btn-recipe">
            <a href="../users/recipe-detail.php?id=<?php echo $row['id']; ?>">VIEW RECIPE</a>
            <img src="images/arrow-1.svg" alt="right arrow">
        </button>
    </div>
</div>