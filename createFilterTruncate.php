<?php
// include and register Twig auto-loader
include 'Twig/Autoloader.php';
Twig_Autoloader::register();

try {
  // define template directory location
  $loader = new Twig_Loader_Filesystem('templates');
  
  // initialize Twig environment
  $twig = new Twig_Environment($loader);
  
  // add custom function
  $twig->addFunction('truncate', new Twig_Function_Function('truncate'));
  
  // load template
  $template = $twig->loadTemplate('createFilterTruncate.tpl');

  // set template variables
  // render template
  echo $template->render(array('title' => 'This is a very long title'));
  
} catch (Exception $e) {
  die ('ERROR: ' . $e->getMessage());
}

function truncate($str, $length) {
    return (strlen($str) > $length) ? trim(substr($str, 0, $length)) . '...' : $str;
}
?>