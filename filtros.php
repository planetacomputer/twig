<?php
// include and register Twig auto-loader
include 'Twig/Autoloader.php';
Twig_Autoloader::register();
 
try {
  // specify where to look for templates
  $loader = new Twig_Loader_Filesystem('templates');
  
  // initialize Twig environment
  $twig = new Twig_Environment($loader, array('debug' => true, 'auto_reload' => true, 'cache' => false));
  // load template
  $template = $twig->loadTemplate('filtros.tpl');
  
  // set template variables
  // render template
  echo $template->render(array(
    'name' => 'Clark Kent',
    'username' => 'ckdsdsent',
    'password' => 'krypt0n1te',
  ));
  
} catch (Exception $e) {
  die ('ERROR: ' . $e->getMessage());
}
?>