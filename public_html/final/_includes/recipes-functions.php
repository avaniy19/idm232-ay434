<?php

function add_recipe($recipe_title, $image_path, $description, $servings, $total_time, $ingredients, $instructions)
{
    global $db_connection;
    $query = 'INSERT INTO recipes';
    $query .= ' ( recipe_title, image_path, description, servings, total_time, ingredients, instructions)';
    $query .= " VALUES (' $recipe_title', '$image_path', '$description', '$servings', '$total_time', '$ingredients', '$instructions')";
    $result = mysqli_query($db_connection, $query);
    return $result;
}

function get_recipes()
{
    global $db_connection;
    $query = 'SELECT * FROM recipes order by recipe_title asc';
    $result = mysqli_query($db_connection, $query);
    return $result;
}

function delete_recipe_by_id($id)
{
    global $db_connection;
    $query = "DELETE FROM recipes WHERE id = {$id}";
    $result = mysqli_query($db_connection, $query);
    return $result;
}
