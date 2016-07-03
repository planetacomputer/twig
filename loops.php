<?php
// define array of values
$items = array(
  'eye of newt',
  'wing of bat',
  'leg of frog',
  'hair of beast'
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
  $template = $twig->loadTemplate('loops.tpl');

  // set template variables
  // render template
  echo $template->render(array (
    'items' => $items
  ));
  
} catch (Exception $e) {
  die ('ERROR: ' . $e->getMessage());
}
?>