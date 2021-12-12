<?php function search_recipe_with_keyword($keyword)
  {
      global $db_connection;
      // Learn more here https://www.w3schools.com/mysql/mysql_like.asp
      $query = 'SELECT * ';
      $query .= 'FROM recipes ';
      $query .= ' WHERE ';
      $query .= "recipe_name LIKE '%" . $keyword . "%'";
      $query .= "OR category LIKE '%" . $keyword . "%' ";
      $query .= "OR category LIKE '%" . $keyword . "%' ";
      $query .= "OR intro LIKE '%" . $keyword . "%' ";
      $query .= "OR description LIKE '%" . $keyword . "%'";

      $result = mysqli_query($db_connection, $query);
      if ($result && $result->num_rows > 0) {
          $db_results = $result;
      } else {
          $db_results = null;
      }
      return $db_results;
  }
  function get_recipes()
  {
      global $db_connection;
      $query = 'SELECT * ';
      $query .= 'FROM recipes';
      $result = mysqli_query($db_connection, $query);

      if ($result && $result->num_rows > 0) {
          $recipes = $result;
      } else {
          $recipes = null;
      }

      return $recipes;
  }
  ?>
