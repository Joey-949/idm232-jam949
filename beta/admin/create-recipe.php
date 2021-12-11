<?php

include_once '../includes/database.php';
include_once '../includes/helper.php';

// Form has been submitted
if (isset($_POST['submit'])) {

    //  Parse Data
    $title = mysqli_real_escape_string($con, $_POST['Title']);
    $recipeDetails = mysqli_real_escape_string($con, $_POST['Details']);
    $recipeIngredients = mysqli_real_escape_string($con, $_POST['Ingredients']);
    $recipeInstructions = mysqli_real_escape_string($con, $_POST['Instructions']);
    $recipeNutrition = mysqli_real_escape_string($con, $_POST['Nutrition']);
    $imageBase64 = ($_POST['imageBase64']);


    // Build Query
    $sql = "INSERT INTO `recipe`(`Title`, `Details`, `Ingredients`, `Instructions`, `Nutrition`, `Image`) 
    VALUES ('$title','$recipeDetails','$recipeIngredients','$recipeInstructions','$recipeNutrition', '$imageBase64');";

    // Execute Query
    $db_results = mysqli_query($con, $sql);
    if ($db_results) {
        // Success
        redirectTo('index.php');
    } else {
        // Error
        redirectTo('index.php?error=' . mysqli_error($con));
    }
}
?>