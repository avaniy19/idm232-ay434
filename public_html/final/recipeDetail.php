<?php
// Make sure the path is correct for each include on this page. Delete this comment once done
include_once __DIR__ . '/app.php';
$page_title = 'View Recipe';
include_once __DIR__ . '/_components/header.php';
?>

<?php
// get recipe data from database
$query = "SELECT * FROM recipes WHERE id = {$_GET['id']}";
$result = mysqli_query($db_connection, $query);

?>


<?php
if (!isset($result)) {
    echo '$recipes variable is not defined. Please check the code.';
}
?>

<?php
$site_url = site_url();
while ($recipes = mysqli_fetch_array($result)) {
    echo "
    <br>
        <div class='justify-center flex max-h-screen mb-5'>
            <div class='min-h-screen overflow-y-aut'>
                <div class='justify-center rounded-lg space-x-2 bg-lime-50 max-w-4xl p-10'>
                    
                        <h2 class='text-4xl font-bold text-center text-stone-900'>{$recipes['recipe_title']}</h2>
                        <div> 
                            <p class='tracking-wide text-md text-center text-gray-700'> servings: {$recipes['servings']} | total time: {$recipes['total_time']}</p>
                        </div>
                    <div class='justify-center -my-20'>
                    <img class='mx-auto rounded-lg justify-center rotate-90 max-w-lg' src='{$site_url}/{$recipes['image_path']}' alt=''>
                    </div>
                    <div class=''>
                        <p class=' text-gray-700 text-center'>{$recipes['description']}</p>
                    </div>
                    <br>

                    <hr class='mx-auto my-2 h-px bg-gray-200 border-0 dark:bg-gray-700'>

                    <br>

                    <div class=''>
                        <div class=''>
                            <h5 class='font-bold text-md pb-5'> Ingredients: </h5>
                            <div class='pl-10'>{$recipes['ingredients']}</div>
                        </div>

                        <hr class='mx-auto my-2 h-px bg-gray-200 border-0 dark:bg-gray-700'>
<br>

                        <div class=''>
                            <h5 class='font-bold text-md pb-5'> Instructions: </h5>
                            <div class='pl-10'>{$recipes['instructions']}</div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        ";
}
?>
