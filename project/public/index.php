<?php

include "../vendor/autoload.php";

use blog\app\Render;

$controllerName = $_GET['c'] ?? 'index';
$actionName = $_GET['a'] ?? 'index';

$controllerClass = "blog\\controllers\\" . ucfirst($controllerName) . "Controller";

if (class_exists($controllerClass)) {
  $render = new Render();
  $controller = new $controllerClass($render);
  $controller->runAction($actionName);
} else {
  die("Нет такого контроллера");
}
