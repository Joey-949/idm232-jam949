<?php
$recipe_id = $_GET['id'];

$sql = mysqli_query($con, "SELECT * FROM recipe WHERE id='$recipe_id'");

while ($row = mysqli_fetch_assoc($sql)) {
    $recipeIngredients = $row['recipeIngredients'];
    $recipeInstructions = $row['recipeInstructions'];
    $recipeIngredientsExplode = explode("|", htmlspecialchars_decode($row['recipeIngredients']));
    $recipeInstructionsExplode = explode("|", htmlspecialchars_decode($row['recipeInstructions']));
?>
    <div class="detail-top">
        <div id="text-side">
            <h2 class="elsie"><?php echo $row['recipeTitle']; ?></h2>
        </div>
        <div id="image-side">
            <li style='background: url("<?php echo $row['recipeImage'];?>"); background-size: cover; list-style-type: none; ")'></li>
        </div>
    </div>
    <div class="detail-content">
        <div class="detail-element">
            <h4 class="detail-subtitle roboto">INGREDIENTS</h4>
            <ul class="detail-list roboto">
                <?php foreach($recipeIngredientsExplode as $value){
                    echo "<li>$value</li>";}; ?>
            </ul>
        </div>
        <div class="detail-element">
            <h4 class="detail-subtitle roboto">INSTRUCTIONS</h4>
            <ol class="detail-list roboto">
                <?php foreach ($recipeInstructionsExplode as $value) {
        echo "<li>$value</li>";}; ?>
            </ol>
        </div>
        <div class="detail-element">
            <h4 class="detail-subtitle roboto">NUTRITION</h4>
            <p class="roboto"><?php echo $row['recipeNutrition']; ?> </p>
        </div>
        <div class="detail-element">
            <h4 class="detail-subtitle roboto">ADDITIONAL DETAILS</h4>
            <p class="roboto"><?php echo $row['recipeDetails']; ?> </p>
        </div>
    </div>
<?php
}
?>