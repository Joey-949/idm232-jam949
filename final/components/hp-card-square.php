<?php
$row = mysqli_fetch_assoc($db_results);
for ($x = 0; $x <= 0; $x++) { ?>
    <a href="../users/recipe-detail.php?id=<?php echo $row['id']; ?>">
            <div class="middle">
                <div class="grid-text">
                    <p class="roboto"><?php echo $row['Title']; ?></p>
                </div>
            </div>
        </div>
    </a>
<?php
}
?>