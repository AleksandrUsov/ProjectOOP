<?php

namespace blog\app;

use blog\traits\TSingleton;

/**
 * Class Db задача низкоуровневая работа с БД
 * @package blog\app
 */
final class Db
{

  use TSingleton;

  //SELECT * FROM users WHERE id = 1
  public function queryOne($sql)
  {
    return $sql;
  }

  //SELECT * FROM users
  public function queryAll($sql)
  {
    return $sql;
  }
}
