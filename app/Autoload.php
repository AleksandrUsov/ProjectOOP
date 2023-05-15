<?php
namespace blog\app;
class Autoload
{
    function loadClass($className): void
    {
      $editedClassName = strtr($className, ['blog\\' => '../', '\\' => '/']);
      $editedClassName .= '.php';
      if (file_exists($editedClassName))
      {
        include $editedClassName;
      }
    }
}
