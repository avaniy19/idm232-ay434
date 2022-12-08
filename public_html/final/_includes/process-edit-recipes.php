<?php
include __DIR__ . '/../app.php';

if (!$_POST) {
    die('Unauthorized');
}

// Store $_POST data to variables for readability
$id = $_POST['id'];
$recipe_title_value = sanitize_value($_POST['recipe_title']);
$image_path_value = sanitize_value($_POST['image_path']);
$description_value = sanitize_value($_POST['description']);
$servings_value = sanitize_value($_POST['servings']);
$total_time_value = sanitize_value($_POST['total_time']);
$ingredients_value = sanitize_value($_POST['ingredients']);
$instructions_value = sanitize_value($_POST['instructions']);

// Create a SQL statement to insert the data into the database
$query = "UPDATE recipes SET
     recipe_title = '{$recipe_title_value}',
     image_path = '{$image_path_value}',
     description = '{$description_value}', 
     servings = '{$servings_value}', 
     total_time = '{$total_time_value}', 
     ingredients = '{$ingredients_value}', 
     instructions = '{$instructions_value}' 
WHERE id = {$id}";

// Run the SQL statement
$result = mysqli_query($db_connection, $query);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin/recipes');
} else {
    $error_message = 'Recipe was not updated: ' . mysqli_error($db_connection);
    redirect_to('/admin/recipes?error=' . $error_message);
}
