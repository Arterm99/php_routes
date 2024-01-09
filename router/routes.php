<?php

use App\Services\Router;
use App\Controllers\Auth;

Router::page('/index.php', 'home');
Router::page('/login', 'login');
Router::page('/register', 'register');
Router::page('/profile', 'profile');
Router::page('/admin', 'admin');


// Перейдя поэтому адресу /auth/register, из класса Auth вызову register
Router::post('/auth/register', Auth::class, 'register',  true, true);
Router::post('/auth/login', Auth::class, 'login',  true);
Router::post('/auth/logout', Auth::class, 'logout');

Router::enable();