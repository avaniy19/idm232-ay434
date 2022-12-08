<?php
include_once __DIR__ . '/../../app.php';
$page_title = 'Edit recipes';
include_once __DIR__ . '/../../_components/header.php';
?>

<?php
// get recipes data from database
$query = "SELECT * FROM recipes WHERE id = {$_GET['id']}";
$result = mysqli_query($db_connection, $query);
if ($result->num_rows > 0) {
  // Get row from results and assign to $user variable;
  $recipes = mysqli_fetch_assoc($result);
} else {
  $error_message = 'Recipe does not exist';
  // redirect_to('/admin/recipes?error=' . $error_message);
}

?>

<div class="mx-auto my-16 max-w-7xl px-4">
  <div class="px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="text-xl font-semibold text-red-400">edit an existing recipe</h1>
      </div>
    </div>
    <div class="mt-8 flex flex-col">
      <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
          <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
            <form action="<?php echo site_url(); ?>/_includes/process-edit-recipes.php" method="POST">

              <br>

              <div class="mx-3 w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label for="">recipe title</label>
                <input class="mt-3 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-pink-600" type="text" name="recipe_title" value="<?php echo $recipes['recipe_title'] ?>">
              </div>
              <br>
              <div class="mx-3 w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label for="">image</label>
                <input class="mt-3 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-pink-600" type="text" name="image_path" value="<?php echo $recipes['image_path'] ?>">
              </div>
              <br>

              <div class=" mx-3 w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label for="">description</label>
                <input class="mt-3 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-pink-600" type="text" name="description" value="<?php echo $recipes['description'] ?>">
              </div>
              <br>

              <div class=" mx-3 w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label for="">servings (#)</label>
                <input class="mt-3 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-pink-600" type="text" name="servings" value="<?php echo $recipes['servings'] ?>">
              </div>
              <br>

              <div class=" mx-3 w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label for="">total time</label>
                <input class="mt-3 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-pink-600" type="text" name="total_time" value="<?php echo $recipes['total_time'] ?>">
              </div>
              <br>

              <div class=" mx-3 w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label for="">ingredients</label>
                <textarea class="js-tinymce" name="ingredients"></textarea>
                <!-- <input class="mt-3 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-pink-600" type="text" name="ingredients" value="<?php echo $recipes['ingredients'] ?>"> -->
              </div>
              <br>

              <div class=" mx-3 w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label for="">instructions</label>
                <textarea class="js-tinymce" name="instructions"></textarea>
                <!-- <input class="mt-3 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-pink-600" type="text" name="instructions" value="<?php echo $recipes['instructions'] ?>"> -->
              </div>
              <br>

              <input class=" m-6 nline-flex items-center justify-center rounded-md border border-transparent bg-red-400 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 sm:w-auto cursor-pointer" type="submit" value="save edits">
              <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<?php include_once __DIR__ . '/../../_components/footer.php';
