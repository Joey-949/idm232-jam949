<?php

include '../includes/database.php';
include '../includes/helper.php';


// Set Page Class
if (isset($body_class)) {
    $body_class = $body_class ;
} else {
    $body_class = '';
}

?>

<html>

<head>
    <!-- <link rel="stylesheet" href="./master.css"> -->
    <link rel="stylesheet" href="../master.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Elsie:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
</head>

<body id="<?php echo $body_class; ?>">
    <header class="navbar" id="secondary-navbar">
        <div class="logo">
            <a href="../index.php">
                <img src="../images/logo.png" alt="image of four leaf clover">
            </a>
        </div>
        <div class="menu-btn">
            <div class="menu-btn_burger"></div>
        </div>
        <div class="nav-menu">
            <div class="menu-items hover-style">
                <a href="../users/category.php">Recipes</a>
                <a href="../admin/all-recipes.php">All Recipes</a>
                <a href="../admin/index.php">Add Recipe</a>
                <a href="search-result.html">Search</a>
            </div>
        </div>
    </header>