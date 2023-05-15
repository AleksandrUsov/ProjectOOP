<?php

namespace blog\interfaces;

interface IModel {
  public function getOne(int $id);
  public function getAll();
}
