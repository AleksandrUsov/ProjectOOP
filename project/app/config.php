<?php
define('ROOT', dirname($_SERVER['DOCUMENT_ROOT']));

const DSN = 'pgsql:host=localhost;dbname=asap';
const DB_USERNAME = 'postgres';
const DB_PASSWORD = 'postgres';
const DB_OPTIONS = [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES => false,
];
