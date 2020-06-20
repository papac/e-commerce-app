<?php

$app->get('/', 'ProductController');
$app->get('/products/:id', 'ProductController::showProduct');

$app->get('/contact', 'SupportController::showContact');
$app->post('/contact', 'SupportController::makeContact');

$app->get('/cart', 'CartController');
$app->post('/cart/add', 'CartController::pushProduct');
$app->post('/cart/:id/delete', 'CartController::removeProduct');
$app->post('/cart/:id/update', 'CartController::updateProduct');

$app->get('/login', 'Auth\LoginController');
$app->post('/login', 'Auth\LoginController::login');

$app->get('/register', 'Auth\RegisterController');
$app->post('/register', 'Auth\RegisterController::register');