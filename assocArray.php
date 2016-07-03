<?php
// define array of values
$book = array(
  'title'     => 'Harry Potter and the Deathly Hallows',
  'author'    => 'J. K. Rowling',
  'publisher' => 'Scholastic',
  'category'  => 'Children\'s fiction',
  'pages'     => '784'
);

// include and register Twig auto-loader
include 'Twig/Autoloader.php';
Twig_Autoloader::register();

try {
  // define template directory location
  $loader = new Twig_Loader_Filesystem('templates');
  
  // initialize Twig environment
  $twig = new Twig_Environment($loader);
  
  // load template
  $template = $twig->loadTemplate('assocArray.tpl');

  // set template variables
  // render template
  echo $template->render(array (
    'book' => $book
  ));
  
} catch (Exception $e) {
  die ('ERROR: ' . $e->getMessage());
}
?>