<?php
// Make sure the path is correct for each include on this page. Delete this comment once done
include_once __DIR__ . '/app.php';
$page_title = 'View All Recipes';
include_once __DIR__ . '/_components/header.php';
?>

<?php
// get data from database

$query = 'SELECT * FROM recipes ORDER BY recipe_title ASC';
$result = mysqli_query($db_connection, $query);

?>


<div class="">
    <div class="">
        <br>
        <br>
        <h2 class='text-4xl font-bold text-center text-stone-900'>All Recipes</h2>
        <br>

        <p class='tracking-wide text-md text-center text-gray-700'> get ready to wok and roll with meals so easy to make, <br> you could do it with one hand and your eyes closed!
            &#128293;</p>
        <br>
        <br>
    </div>
</div>

<div class="">
    <div class="">
        <?php include __DIR__ . '/_components/recipeCards.php'; ?>
    </div>
</div>


<?php include_once __DIR__ . '/_components/footer.php';
