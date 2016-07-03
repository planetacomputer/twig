<?php
// include and register Twig auto-loader
include 'Twig/Autoloader.php';
Twig_Autoloader::register();

try {
  // define template directory location
  $loader = new Twig_Loader_Filesystem('templates');
  
  // initialize Twig environment
  $twig = new Twig_Environment($loader);
  
  // add custom filter
  $twig->addFilter('obfuscate_address', new Twig_Filter_Function('obfuscate_address'));
  
  // load template
  $template = $twig->loadTemplate('createFilter.tpl');

  // set template variables
  // render template
  echo $template->render(array('email' => 'vikram@example.com'));
  
} catch (Exception $e) {
  die ('ERROR: ' . $e->getMessage());
}

function obfuscate_address($str) {
    return str_replace(
      array('@', '.', '-'), 
      array(' at ', ' dot ', ' dash '), 
      $str
    );
}
?>