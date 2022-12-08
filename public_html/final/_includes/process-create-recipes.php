<?php
include __DIR__ . '/../app.php';

if (!$_POST) {
    die('Unauthorized');
}

// Store $_POST data to variables for readability

$recipe_title_value = sanitize_value($_POST['recipe_title']);
$image_path_value = sanitize_value($_POST['image_path']);
$description_value = sanitize_value($_POST['description']);
$servings_value = sanitize_value($_POST['servings']);
$total_time_value = sanitize_value($_POST['total_time']);
$ingredients_value = sanitize_value($_POST['ingredients']);
$instructions_value = sanitize_value($_POST['instructions']);

$result = add_recipe(
    $recipe_title_value,
    $image_path_value,
    $description_value,
    $servings_value,
    $total_time_value,
    $ingredients_value,
    $instructions_value
);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin/recipes');
} else {
    $error_message = 'Sorry there was an error creating the recipe';
    redirect_to('/admin/recipes?error=' . $error_message);
}
