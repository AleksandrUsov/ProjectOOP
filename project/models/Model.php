<?php

namespace blog\models;

use blog\app\Db;
use blog\interfaces\IModel;

abstract class Model implements IModel
{

  abstract protected function getTableName();

  public function getOne($id): mixed
  {
    $tableName = $this->getTableName();
    $query = "SELECT * FROM $tableName WHERE id = $id";
    return Db::getInstance()->queryOne($query, ['id' => $id]);
  }

  public function getAll(): array|false
  {
    $tableName = $this->getTableName();
    $query = "SELECT * FROM $tableName";
    return Db::getInstance()->queryAll($query);
  }

  public function save(): bool
  {
    //Сделать завтра
    return true;
  }

  protected function insert(): bool
  {
    //Проверить работает ли это чудо
    $properties = [];
    foreach ($this as $key => $value) {
      if ($key === 'id') {
        continue;
      }
      $properties[$key] = $value;
    }

    $tableName = $this->getTableName();

    $tableFields = implode(', ' , array_keys($properties));

    $count = count($properties);
    $placeholders = '?' . str_repeat(",? ", $count - 1);

    $values = array_values($properties);

    $query = "
    INSET INTO $tableName($tableFields) VALUES 
    ($placeholders)";

    return Db::getInstance()->execute($query, $values);
  }

  public function delete(int $id): bool
  {
    $tableName = $this->getTableName();
    $query = "DELETE FROM $tableName WHERE id = :id";
    return Db::getInstance()->execute($query, ['id' => $id]);
  }
}
