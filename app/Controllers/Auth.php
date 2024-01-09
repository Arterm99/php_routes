<?php

namespace App\Controllers;


use App\Services\Router;

class Auth
{

    // Авторизация
    public function login($data)
    {
        $email = $data['email'];
        $password = $data['password'];

        // Где email = $email
        $user = \R::findOne('users', 'email = ?', [$email]);

        // Ошибка, если не совпадает email
        if(!$user) {
            die('Пользователь не найден');
        }

        // После авторизации данные помещаем в сессию
        if (password_verify($password, $user->password)) {
            session_start();
            $_SESSION["user"] = [
                "id" => $user->id,
                "full_name" => $user->full_name,
                "username" => $user->username,
                "group" => $user->group,
                "email" => $user->email,
                "avatar" => $user->avatar,
            ];
        Router::redirect('/profile');

        } else {
            die('Неверный логин или пароль');
        }

    }


    public function register($data, $files)
    {
        $email = $data['email'];
        $username = $data['username'];
        $full_name = $data['full_name'];
        $password = $data['password'];
        $password_confirm = $data['password_confirm'];

        // Совпадение паролей
        if ($password !== $password_confirm) {
            Router::error(500);
            die();
        }

        $avatar = $files["avatar"];

        $fileName = time() . '_' . $avatar["name"];
        $path = "uploads/avatars/" . $fileName;

        if (move_uploaded_file($avatar["tmp_name"], $path)) {
            // add in bd
            // create table 'users'
            $user = \R::dispense('users');
            $user->email = $email;
            $user->username = $username;
            $user->full_name = $full_name;
            /*
             * 1 - пользователь
             * 2 - админ
             */
            $user->group = 1;
            $user->avatar = "/" . $path;
            $user->password = password_hash($password, PASSWORD_DEFAULT);
            // save people in bd
            \R::store($user);
            Router::redirect('/login');

        } else {
            Router::error(500);
        }

    }

    public function logout()
    {
        unset($_SESSION['user']);
        Router::redirect('/login');
    }

}