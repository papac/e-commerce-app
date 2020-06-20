<?php

$app->get('/', 'SupportController');

$app->get('/contact', 'SupportController@showContact');

$app->get('/products', 'ProductController');

$app->get('/products/:id', 'ProductController@showProduct');

$app->get('/cart', 'CartController');

$app->get('/connexion', 'Auth\LoginController');
$app->post('/connexion', 'Auth\LoginController::login');

$app->get('/inscription', 'Auth\RegisterController');
$app->post('/inscription', 'Auth\RegisterController::register');