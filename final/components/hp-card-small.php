<?php
$row = mysqli_fetch_assoc($db_results);
for ($x = 0; $x <= 0; $x++) { ?>
    <div class="hover-style">
        <a href="../users/recipe-detail.php?id=<?php echo $row['id']; ?>">
        <p class="roboto-title"><?php echo $row['Title']; ?></p>
        </a>
    </div>
<?php
}
?>