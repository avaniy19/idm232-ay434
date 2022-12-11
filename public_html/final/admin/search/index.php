<?php
include_once __DIR__ . '/../../app.php';
$page_title = 'search';
include_once __DIR__ . '/../../_components/header.php';
$services = get_services();

// Check if search exist in query
if (isset($_GET['search'])) {
  $search = $_GET['search'];
} else {
  $search = '';
}

$query = 'SELECT *';
$query .= ' FROM recipes';
$query .= " WHERE recipe_title LIKE '%{$search}%'";
$query .= " OR ingredients LIKE '%{$search}%'";
$results = mysqli_query($db_connection, $query);

// Check if was have more than 0 results from db
if ($results->num_rows > 0) {
  $recipes_results = true;
} else {
  $recipes_results = false;
}

?>
<br>
<br>
<div class="  mx-auto max-w-7xl px-4">
  <div class="px-4 sm:px-6 lg:px-8">
    <?php include __DIR__ . '/../../_components/navigation-admin.php'; ?>
    <div class="text-center sm:flex sm:items-center mx-auto">
      <div class="sm:flex-auto mx-auto">
        <h1 class="text-4xl font-bold text-center text-stone-900">Search Results</h1>
        <br>
        <form class="mx-auto" action="<?php echo site_url(); ?>/admin/search" method="GET">
          <input class="
          mx-auto
          form-control
        block
        w-full
        max-w-md
        px-3
        py-1.5
        text-base
        font-normal
        text-fuchsia-900
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-fuchsia-900 focus:bg-white focus:border-fuchsia-900 focus:outline-none" type=" text" name="search" id="search" placeholder=" search again..." value="<?php echo $search; ?>">
          <!-- <button type="submit">Search</button> -->
        </form>
        <br>
        <h2 class="tracking-wide text-md text-center text-gray-700">you searched for "<?php echo $search; ?>"</h2>
        <?php
        // If no results, echo no results
        if (!$recipes_results) {
          echo '<p class="tracking-wide text-md text-center text-gray-500">no results found :(</p>';
        }
        ?>
        <?php
        // If error query param exist, show error message
        if (isset($_GET['error'])) {
          echo '<p class="text-red-500">' . $_GET['error'] . '</p>';
        } ?>
      </div>

    </div>

    <br>
    <br>

    <?php
    $site_url = site_url();
    if ($recipes_results) {
      while ($recipes_results = mysqli_fetch_assoc($results)) {
        // echo '<div class="flex flex-row justify-center items-center">';
        echo " 
        <a href='{$site_url}/recipeDetail.php?id={$recipes_results['id']}' class='' >
            <div class='mx-auto block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-stone-900 dark:bg-stone-900 dark:border-stone-900 dark:hover:bg-stone-900'>
            <div= ''>
            <img class='mx-auto max-w-full h-auto rounded-lg rotate-90 -my-8' width='200px' src='{$site_url}/{$recipes_results['image_path']}' alt=''>
                <div class=''>
                    <p class='mt-2 mb-2 text-2xl font-bold text-gray-900 dark:text-lime-100 tracking-wide'>{$recipes_results['recipe_title']}</p>
                    <p class='font-normal text-gray-700 dark:text-gray-400'>{$recipes_results['description']}</p>
                </div> 
                </div> 
            </div>
        </a></div>
        <br>
    ";
        // echo '</div>';
      }
    }
    ?>

  </div>
</div>



<?php include_once __DIR__ . '/../../_components/footer.php';
?>