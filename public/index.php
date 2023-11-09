<?php
// ce fichier sera le fichier index.php a finir


// ici on lit le fichier routes.yaml
$routes = yaml_parse_file('routes.yaml');

// ici on recupere l'url  et on la nettoie
$uri = strtolower($_SERVER["REQUEST_URI"]);
$uri = strtok($uri, "?");
$uri = strlen($uri)>1 ? rtrim($uri, "/"):$uri;


// Parcourir les routes pour trouver la correspondance
foreach ($routes['routes'] as $route) {
    echo $route['url'] ." == ". $uri ;
    if ($route['url'] == $uri) {
        // if ($route['url'] == "/".$uri) {
         // Appeler le contrôleur et l'action appropriés
         $controller = new $route['controller'];
         $action = $route['action'];
         $controller->$action();
        //  exit; // Arrêter le traitement une fois que la route a été trouvée
     }
 }
 
 // Gérer le cas où aucune route ne correspond
 echo "Page non trouvée";

