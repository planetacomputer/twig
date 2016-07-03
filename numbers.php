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
  $template = $twig->loadTemplate('numbers.tpl');

  // generate random number and
  // check whether odd or even
  $num = rand (0,30);
  $div = ($num % 2);  

  // set template variables
  // render template
  echo $template->render(array (
    'num' => $num,
    'div' => $div
  ));
  
} catch (Exception $e) {
  die ('ERROR: ' . $e->getMessage());
}
?>