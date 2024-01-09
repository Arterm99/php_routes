<?php

namespace App\Services;


// Подключаем расширения: header, nav и др
class Page
{
    public static function part($part_name){
        require_once "views/components/" . $part_name . ".php";
    }
}