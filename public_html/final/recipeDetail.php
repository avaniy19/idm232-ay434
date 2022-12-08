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
        <div class=''>
            <div class=''>
                <div class=''>
                    <div>
                        <h2 class=''>{$recipes['recipe_title']}</h2>
                        <div> 
                            <p class=''> Servings: {$recipes['servings']}</p>
                            <p class=''> Total Time (prep and cook): {$recipes['total_time']}</p>
                        </div>
                    </div>
                    <img class='' width='500px' height='500px' src='{$site_url}/{$recipes['image_path']}' alt=''>
                    <div>
                        <p class=''>{$recipes['description']}</p>
                    </div>

                    <hr class='hr_30'>

                    <div class=''>
                        <div class=''>
                            <h5> Ingredients </h5>
                            <p class=''>{$recipes['ingredients']}</p>
                        </div>
                        <div class=''>
                            <h5> Directions </h5>
                            <p class=''>{$recipes['instructions']}</p>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        ";
}
?>
<!-- </div>
          </div> -->

<?php include_once __DIR__ . '/_components/footer.php';
