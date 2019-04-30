<?php

include_once '_config.php';

MyAutoload::start();

(isset($_GET['r'])) ? $request = $_GET['r'] : $request = 'index';

$routeur = new Routeur($request);
$routeur->renderController();

