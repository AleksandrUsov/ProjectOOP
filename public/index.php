<?php
use blog\app\{Db, Autoload};
use blog\models\{User, Post};

include "../app/Autoload.php";
spl_autoload_register([new Autoload(), 'loadClass']);

$user = new User( 'login', 'pass');
echo $user->getOne(1) . "<br>";
echo $user->getOne(2) . "<br>";
echo $user->getAll() . "<br>";
echo "<br>";
$post = new Post('Title', 'Text');
echo $post->getOne(1) . "<br>";
echo $post->getOne(2) . "<br>";
echo $post->getAll() . "<br>";










//class Db низкоуровневая работа с БД init fetch query
//Active Record паттерн для работы с БД с записями
//read
//$user = User::getOne(5); создать объект для ОДНОЙ записи в таблице users, с id 5
//$user = User::getAll(); извлечь все записи
//в user будет объект с данными об записи 5 в полях этого объекта

//delete
//$user->delete(); удалить запись с id 5

//update
//$user->name = "Новое имя"
//$user->save();

//create
//$user = new User("Юзер!");
//$user->save(); в юзере окажется новый id
