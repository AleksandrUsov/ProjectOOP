<?php


namespace blog\app;


class Render
{
  public function render($template, $params = []): string | false
  {
    return $this->renderTemplate('layouts/main', [
      'menu' => $this->renderTemplate('menu', $params),
      'content' => $this->renderTemplate($template, $params)
    ]);
  }

  public function renderTemplate($template, $params = []): string | false
  {
    ob_start();
    extract($params);
    include '../views/' . $template . '.php';
    return ob_get_clean();
  }
}
