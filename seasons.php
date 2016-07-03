<?php
// include and register Twig auto-loader
include 'Twig/Autoloader.php';
Twig_Autoloader::register();

try {
  // define template directory location
  $loader = new Twig_Loader_Filesystem('templates');
  
  // initialize Twig environment
  $twig = new Twig_Environment($loader);
  
  // load template
  $template = $twig->loadTemplate('seasons.tpl');

  // get current month number
  $month = date('m', mktime());

  // set template variables
  // render template
  echo $template->render(array (
    'month' => $month
  ));
  
} catch (Exception $e) {
  die ('ERROR: ' . $e->getMessage());
}
?>