<?php

use Minhhai\Duan\Controllers\Admin\AccountController;
use Minhhai\Duan\Controllers\Admin\CategoryController;
use Minhhai\Duan\Controllers\Admin\DashboardController;
use Minhhai\Duan\Controllers\Admin\PostController;

$router->mount('/admin', function () use ($router) {

    $router->get('/', DashboardController::class . '@dashboard');

    // CRUD USER
    $router->mount('/posts', function () use ($router) {
        $router->get('/',               PostController::class . '@index');  // Danh sách
        $router->get('/create',         PostController::class . '@create'); // Show form thêm mới
        $router->post('/store',         PostController::class . '@store');  // Lưu mới vào DB
        $router->get('/{id}/show',      PostController::class . '@show');   // Xem chi tiết
        $router->get('/{id}/edit',      PostController::class . '@edit');   // Show form sửa
        $router->post('/{id}/update',   PostController::class . '@update'); // Lưu sửa vào DB
        $router->get('/{id}/delete',    PostController::class . '@delete'); // Xóa
    });
    $router->mount('/categories', function () use ($router) {
        $router->get('/', CategoryController::class . '@index');  // Danh sách
    });
    $router->mount('/accounts', function () use ($router) {
        $router->get('/', AccountController::class . '@index');  // Danh sách
        $router->get('/{id}/editaccount', AccountController::class . '@formedit');  // Danh sách
        $router->post('/{id}/update', AccountController::class . '@updateUser');  // Danh sách
        $router->get('/{id}/delete', AccountController::class . '@delete');  // Danh sách
    });
});
