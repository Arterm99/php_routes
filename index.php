<?php
session_start();

// Подключаем БД
use App\Services\App;

// Прикрепляем autoload.php из композера
require_once __DIR__  ."/vendor/autoload.php";
// Подключаем БД
App::start();
// Прикрепляем роутер
require_once __DIR__  ."/router/routes.php";