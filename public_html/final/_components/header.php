<?php
// if $page_title variable doesn't exist, create a default one
if (!isset($page_title)) {
  $page_title = '🚨 Missing Title 🚨';
}
$site_title = 'onlyPans';
$document_title = $page_title . ' | ' . $site_title;

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="<?php echo site_url(); ?>/dist/styles/style.css">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Numans&display=swap" rel="stylesheet">

  <!-- Including TinyMCE Library -->
  <script src="https://cdn.tiny.cloud/1/7dw1ocbxe9ymk7mm80dlqz7nfi3xapkp9f4von4jx082v125/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

  <!-- Including TailwindCss Library -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- <script src="tailwind.config.js"></script> -->

  <link rel="icon" type="image/x-icon" href="<?php echo site_url(); ?>/dist/images/favicon.ico">


  <title><?php echo $document_title; ?></title>
</head>

<body>
  <!-- Main Content Begins -->
  <?php include __DIR__ . '/navigation-main.php'; ?>