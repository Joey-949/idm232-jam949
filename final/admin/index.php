<?php
$page_title = 'Add';
$body_class = 'add-recipe';

include_once '../global/adminHeader.php';

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
		<h2 class="secondary-title roboto">Add Recipe</h2>
		<form method="POST" id="addRecipe" action="./create-recipe.php" enctype="multipart/form-data">
			<label for="title">Title:</label>
			<input type="text" id="title" name="Title">

			<label for="imageFile">Add File</label>

			<div class="field_wrapper wrapper-style">
				<label for="ingredients">Ingredients:</label>
				<p class="roboto add-recipe-note">Use the '|' (vertical bar) key to add new ingredient</p>
				<div>
					<textarea class="add-text" id="ingredientList" name="Ingredients" placeholder="Ingredient 1"></textarea>
				</div>
			</div>

			<div class="field_wrapper2 wrapper-style">
				<label for="instructions">Instructions:</label>
				<p class="roboto add-recipe-note">Use the '|' (vertical bar) key to add new instruction</p>
				<div>
					<textarea class="add-text" type="text" id="instructionList" name="Directions" placeholder="Step 1"></textarea>
				</div>
			</div>
			<label for="details">Additional Details:</label>
			<textarea class="add-text" id="Details" name="Details"></textarea>
			<input type="hidden" name="imageBase64" id="imageBase64" />
			<button type="submit" value="Submit" name="submit">Confirm Recipe</button>
		</form>

	</div>

</div>

</body>

</html>