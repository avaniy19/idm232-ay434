<?php
include_once __DIR__ . '/../../app.php';
$page_title = 'Create recipes';
include_once __DIR__ . '/../../_components/header.php';
?>

<?php
// get users data from database
$query = 'SELECT * FROM recipes';
$result = mysqli_query($db_connection, $query);

?>

<div class="mx-auto my-16 max-w-7xl px-4">
  <div class="px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="text-xl font-semibold text-pink-600">create new recipe</h1>
      </div>
    </div>
    <div class="mt-8 flex flex-col">
      <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
          <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
            <form action="<?php echo site_url(); ?>/_includes/process-create-recipes.php" method="POST">



              <br>
              <div class="mx-3 w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label for="">recipe title</label>
                <input class="mt-3 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-pink-600" type="text" name="recipe_title">
              </div>
              <br>
              <div class=" mx-3 w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label for="">image</label>
                <input class="mt-3 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-pink-600" type="text" name="image_path">
              </div>
              <br>

              <div class=" mx-3 w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label for="">description </label>
                <input class="mt-3 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-pink-600" type="text" name="description">
              </div>
              <br>

              <div class=" mx-3 w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label for="">servings (#)</label>
                <input class="mt-3 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-pink-600" type="text" name="servings">
              </div>
              <br>

              <div class=" mx-3 w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label for="">total time</label>
                <input class="mt-3 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-pink-600" type="text" name="total_time">
              </div>
              <br>

              <div class=" mx-3 w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label for="">ingredients</label>
                <textarea class="js-tinymce" name="ingredients"></textarea>
                <!-- <input class="mt-3 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-pink-600" type="text" name="ingredients"> -->
              </div>
              <br>

              <div class=" mx-3 w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label for="">instructions</label>
                <textarea class="js-tinymce" name="instructions"></textarea>
                <!-- <input class="mt-3 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-pink-600" type="text" name="instructions"> -->
              </div>

              <br>

              <input class="m-6 nline-flex items-center justify-center rounded-md border border-transparent bg-pink-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-pink-700 focus:ring-offset-2 sm:w-auto cursor-pointer" type="submit" value="submit">

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once __DIR__ . '/../../_components/footer.php';
