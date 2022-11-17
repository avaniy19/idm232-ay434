<?php
$main_navigation = [
  [
    'title' => 'about',
    'url' => 'about.php',
  ],
  [
    'title' => 'recipes',
    'url' => 'https://avaniyata.com/idm232/final/admin/users',

  ],
  [
    'title' => 'contact',
    'url' => 'contact.php',
  ],

];

?>
<header class="px-2 py-4 bg-gray-800">
  <div class="max-w-7xl flex justify-between mx-auto">
    <a href="<?php echo site_url(); ?>">
      <img src="<?php echo site_url(); ?>/dist/images/logo.png" alt="logo">
    </a>

    <nav class="text-white flex items-center">
      <?php
      foreach ($main_navigation as $nav_item) {
        echo '<a href="' . $nav_item['url'] . '" class="p-4 inline-block">' . $nav_item['title'] . '</a>';
      }
      ?>

    </nav>
  </div>
</header>