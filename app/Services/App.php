<?php

namespace App\Services;

class App
{
    public static function start()
    {
        // Подключаем библиотеки
        self::libs();
        // Подключаем Базу Данных
        self::db();
    }

    public static function libs()
    {

        $config = require_once "config/app.php";
        foreach ($config["libs"] as $lib) {
            require_once "libs/" . $lib . ".php";
        }
    }

    public static function db()
    {
        $config = require_once "config/db.php";
        if($config["enable"]) {
            // "\' - глобально ищет класс R, По умолчанию ищет в нашем namespace App\Services;

            \R::setup( 'mysql:host=' . $config["host"] . ';port=' . $config["port"] . ';dbname=' . $config["db"] . '',
                $config["username"], $config["password"] ); //for both mysql or mariaDB

            if (!\R::testConnection()) {
                die('Error database connect');
            }
        }

    }

}