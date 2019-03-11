<?php

include_once '_config.php';

MyAutoload::start();

$request = $_GET['R'];

$routeur = new Routeur($request);
$routeur->renderController();

/* frontController
  
Instancier variables et constantes
Autoload qui charge toutes les classe

htaccess recupère url

instancie routeur
renderController();

*/
