<?php
$page_title = 'Update Recipe';
$body_class = 'add-recipe';

include_once '../global/adminHeader.php';


if (isset($_POST['update'])) {
    $recipe_id = $_POST['recipe_id'];
    // Make sure GET ID == post ID
    if ($_GET['id'] != $recipe_id) {
        redirectTo('/admin/update-recipe.php?id=' . $_GET['id'] . '&error=User ID does not match current user.');
    }
    //  Parse Data
    $title = mysqli_real_escape_string($con, $_POST['recipeTitle']);
    $recipeDetails = mysqli_real_escape_string($con, $_POST['recipeDetails']);
    $recipeIngredients = mysqli_real_escape_string($con, $_POST['recipeIngredients']);
    $recipeInstructions = mysqli_real_escape_string($con, $_POST['recipeInstructions']);
    $recipeNutrition = mysqli_real_escape_string($con, $_POST['recipeNutrition']);
    $imageBase64 = $_POST['imageBase64'];

    // Build Query
    $sql = 'UPDATE recipe SET ';
    $sql .= "recipeTitle = '{$title}', ";
    $sql .= "recipeDetails = '{$recipeDetails}', ";
    $sql .= "recipeIngredients = '{$recipeIngredients}', ";
    $sql .= "recipeInstructions = '{$recipeInstructions}', ";
    $sql .= "recipeNutrition = '{$recipeNutrition}', ";
    $sql .= "recipeImage = '{$imageBase64}' ";
    $sql .= "WHERE id = {$recipe_id}";

    // Execute Query
    $db_results = mysqli_query($con, $sql);

    if ($db_results && $db_results->num_rows > 0) {
        // Success
        redirectTo('/admin/index.php?success=');
    } else {
        // Error
        redirectTo('/admin/index.php?id=' . $recipe_id . '&error=' . mysqli_error($con));
    }
} elseif (isset($_GET['id'])) {
    $recipe_id = $_GET['id'];
    // Build Query
    $sql = 'SELECT * ';
    $sql .= 'FROM recipe ';
    $sql .= 'WHERE id=' . $recipe_id;

    $db_results = mysqli_query($con, $sql);
    if ($db_results) {
        $user = $row = mysqli_fetch_assoc($db_results);
    } else {
        // Redirect user if ID does not have a match in the DB
        redirectTo('/admin/index.php?error=' . mysqli_error($con));
    }
} else {
    // Redirect user if no ID is passed in URL
    redirectTo('/admin/index.php');
}

?>
<Script>
    function updateBase64() {
        var file = document.querySelector('input[type=file]')['files'][0];
        var reader = new FileReader();
        var baseString;
        reader.onloadend = function() {
            baseString = reader.result;
            document.getElementById("imageBase64").value = baseString;
            console.log(baseString);
        };
        reader.readAsDataURL(file);
    }
</script>
<div class="hp-content hp-content-secondary" id="category-content">
    <div>
        <h2 class="secondary-title roboto">Edit Recipe</h2>
        <form method="POST" id="addRecipe" action="" enctype="multipart/form-data">

            <label for="title">Title:</label>
            <input type="text" id="title" name="recipeTitle" value="<?php echo $user['recipeTitle']; ?>">

            <label for="imageFile">Add File</label>
            <input type="file" id="imageFile" name="recipeImage" placeholder="Insert Image:" onchange="updateBase64()">

            <div class="field_wrapper wrapper-style">
                <label for="ingredients">Ingredients:</label>
                <p class="roboto add-recipe-note">Use the '|' (vertical bar) key to add new ingredient</p>
                <div>
                    <textarea class="add-text" type="text" id="ingredientList" name="recipeIngredients"><?php echo $user['recipeIngredients']; ?></textarea>
                </div>
            </div>

            <div class="field_wrapper2 wrapper-style">
                <label for="instructions">Instructions:</label>
                <p class="roboto add-recipe-note">Use the '|' (vertical bar) key to add new instruction</p>
                <div>
                    <textarea class="add-text" type="text" id="instructionList" name="recipeInstructions"><?php echo $user['recipeInstructions']; ?></textarea>
                </div>
            </div>

            <div class="field_wrapper3 wrapper-style">
                <label for="nutrition">Nutrition:</label>
                <div>
                    <textarea class="add-text" type="text" id="nutritionList" name="recipeNutrition"><?php echo $user['recipeNutrition']; ?></textarea>
                </div>
            </div>
            <label for="details">Additional Details:</label>
            <textarea class="add-text" id="recipeDetails" name="recipeDetails"><?php echo $user['recipeDetails']; ?></textarea>
            <input type="hidden" value="<?php echo $user['id']; ?>" name="recipe_id">
            <input type="hidden" name="imageBase64" id="imageBase64" value="<?php echo $user['recipeImage']; ?>" />
            <button type="submit" value="Submit" name="update">Update Recipe</button>
        </form>
    </div>

</div>