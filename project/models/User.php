<?php

namespace blog\models;

use blog\app\Db;
use blog\interfaces\IModel;

class User extends Model
{
  public ?int $id;
  public string $login;
  public string $pass;

  public function __construct(string $login, string $pass, ?int $id = null)
  {
    $this->id = $id;
    $this->login = $login;
    $this->pass = $pass;
  }

  public function getTableName(): string
  {
    return 'users';
  }
}

