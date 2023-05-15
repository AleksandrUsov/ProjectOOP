<?php
namespace blog\models;

use blog\app\Db;

class Post extends Model
{
  public ?int $id;
  public string $title;
  public string $text;

  public function __construct(string $title, string $text, int $id = null)
  {
    $this->id = $id;
    $this->title = $title;
    $this->text = $text;
  }

  public function getTableName(): string
  {
    return 'posts';
  }
}
