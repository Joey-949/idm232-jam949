
    <div class="master-recipe-card roboto">

        <div class=" master-recipe-card-text">
            <a href="../users/recipe-detail.php?id=<?php echo $row['id']; ?>">
                <h4 class="master-recipe-title"><?php echo $row['recipeTitle']; ?></h4>
            </a>
            <div>
                <div>
                    <a href="../admin/update-recipe.php?id=<?php echo $row['id']; ?>">
                        <p>Edit</p>
                        <img src=" ../images/edit.svg" alt="edit">
                    </a>
                </div>
                <div>
                    <a href="../admin/delete-recipe.php?id=<?php echo $row['id']; ?>">
                        <p>Delete</p>
                        <img src="../images/delete.svg" alt="delete">
                    </a>
                </div>
            </div>
        </div>
    </div>
