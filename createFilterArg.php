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
  $twig->addFilter('obfuscate_address', 
    new Twig_Filter_Function('obfuscate_address', array('is_safe' => array('html')))
  );
  
  // load template
  $template = $twig->loadTemplate('createFilterArg.tpl');

  // set template variables
  // render template
  echo $template->render(array('email' => 'vikram@example.com'));
  
} catch (Exception $e) {
  die ('ERROR: ' . $e->getMessage());
}

function obfuscate_address($str, $display_as_link = 0) {
    $newStr = str_replace(
      array('@', '.', '-'), 
      array(' at ', ' dot ', ' dash '), 
      $str
    );
    return ($display_as_link == 0) ? $newStr : '<a href="mailto:' . $str . '">' . $newStr . '</a>';
}
?>