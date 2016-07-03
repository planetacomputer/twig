<?php
// define navigation array
$nav = array(
  'primary' => array(
    array('name' => 'Clothes', 'url' => '/clothes'),
    array('name' => 'Shoes and Accessories', 'url' => '/accessories'),
    array('name' => 'Toys and Gadgets', 'url' => '/toys'),
    array('name' => 'Books and Movies', 'url' => '/media'),
  ),
  'secondary' => array(
    array('name' => 'By Price', 'url' => '/selector/v328ebs'),
    array('name' => 'By Brand', 'url' => '/selector/gf843k2b'),
    array('name' => 'By Interest', 'url' => '/selector/t31h393'),
    array('name' => 'By Recommendation', 'url' => '/selector/gf942hb')
  )
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
  $template = $twig->loadTemplate('template.tpl');

  // set template variables
  // render template
  echo $template->render(array (
    'nav' => $nav,
    'updated' => '24 Jan 2011'
  ));
  
} catch (Exception $e) {
  die ('ERROR: ' . $e->getMessage());
}
?>