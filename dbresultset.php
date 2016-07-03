<?php
// include and register Twig auto-loader
include 'Twig/Autoloader.php';
Twig_Autoloader::register();

// attempt a connection
try {
  $dbh = new PDO('mysql:dbname=alimentos;host=localhost', 'root', '');
} catch (PDOException $e) {
  echo "Error: Could not connect. " . $e->getMessage();
}

// set error mode
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// attempt some queries
try {
  // execute SELECT query
  // store each row as an object
  $sql = "SELECT alimentos.id AS id, alimentos.nombre AS nombre, alimentos.energia as energia, alimentos.proteina as proteina FROM alimentos";
  /*$sql = "SELECT country.Code AS code, country.Name AS name, country.Region AS region, country.Population AS population, countrylanguage.Language AS language, city.Name AS capital FROM country, city, countrylanguage WHERE country.Code = city.CountryCode AND country.Capital = city.ID AND country.Code = countrylanguage.CountryCode AND countrylanguage.IsOfficial = 'T' ORDER BY population DESC LIMIT 0,20";*/
  $sth = $dbh->query($sql);
  while ($row = $sth->fetchObject()) {
    $data[] = $row;
  }
  
  // close connection, clean up
  unset($dbh); 

  // define template directory location
  $loader = new Twig_Loader_Filesystem('templates');
  
  // initialize Twig environment
  $twig = new Twig_Environment($loader);
  
  // load template
  $template = $twig->loadTemplate('dbresultset.tpl');

  // set template variables
  // render template
  echo $template->render(array (
    'data' => $data
  ));
  
} catch (Exception $e) {
  die ('ERROR: ' . $e->getMessage());
}
?>