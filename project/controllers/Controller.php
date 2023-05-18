<?php

namespace blog\controllers;

use blog\app\Render;

abstract class Controller
{
  protected Render $render;

  public function __construct(Render $render)
  {
    $this->render = $render;
  }

  public function runAction($action): void
  {
    $method = 'action' . ucfirst($action);
    if (method_exists($this, $method)) {
      $this->$method();
    } else {
      die('404 нет такого экшена');
    }
  }

  public function actionIndex(): void
  {
    echo $this->render->render('index');
  }
}
