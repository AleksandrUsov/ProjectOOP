<?php
namespace blog\traits;

trait TSigletone
{
    private static mixed $instance = null;

    private function __construct() {}
    private function __clone() {}


    public static function getInstance(): static
    {
        if (is_null(static::$instance)) {
            static::$instance = new static();
        }
        return static::$instance;
    }

}
