<?php

namespace blog\app;

require_once '../app/config.php';

use blog\traits\TSigletone;

/**
 * Class Db задача низкоуровневая работа с БД
 */
final class Db
{

  use TSigletone;

  private ?\PDO $connection = null;

  public function getConnection(): \PDO
  {
    if (is_null($this->connection)) {
      $this->connection = new \PDO(DSN, DB_USERNAME, DB_PASSWORD, DB_OPTIONS);
    }
    return $this->connection;
  }

  public function query(string $sql, array $params = null): bool
  {
    $statement = $this->connection->prepare($sql);
    $this->connection->query();
    return $statement->execute($params);
  }

  public function execute(string $query, array $params): bool
  {
    $statement = $this->connection->prepare($query);
    return $statement->execute($params);
  }

  public function queryOne(string $query, array $params): mixed
  {
    $statement = $this->connection->prepare($query);
    $statement->execute($params);
    return $statement->fetch();
  }

  public function queryAll(string $query): array|false
  {
    $statement = $this->connection->query($query);
    return $statement->fetchAll();
  }

  public function lasInsertId(): int|false
  {
    return $this->connection->lastInsertId();
  }

}
