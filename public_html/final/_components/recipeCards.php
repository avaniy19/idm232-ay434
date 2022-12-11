<?php
if (!isset($result)) {
    echo '$recipes variable is not defined. Please check the code.';
}
?>

<?php
$site_url = site_url();
while ($recipes = mysqli_fetch_array($result)) {
    echo "
        <a href='{$site_url}/recipeDetail.php?id={$recipes['id']}' class=''>
            <div class='mx-auto block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-stone-900 dark:bg-stone-900 dark:border-stone-900 dark:hover:bg-stone-900'>
            <div class=''>
            <img class='mx-auto max-w-full h-auto rounded-lg rotate-90 -my-8' width='200px' src='{$recipes['image_path']}' alt=''> 
            
                <div class=''>
                    <p class='mt-2 mb-2 text-2xl font-bold text-gray-900 dark:text-lime-100 tracking-wide'>{$recipes['recipe_title']}</p>
                    <p class='font-normal text-gray-700 dark:text-gray-400'>{$recipes['description']}</p>
                </div> 
            </div>

            </div>
        </a>
        <br>
        ";
}
?>